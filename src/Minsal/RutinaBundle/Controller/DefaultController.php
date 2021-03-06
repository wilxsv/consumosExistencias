<?php

namespace Minsal\RutinaBundle\Controller;

use Minsal\CoreBundle\Entity\CtlExistencias;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\ResponseHeaderBag;
use Symfony\Component\HttpFoundation\BinaryFileResponse;
use Symfony\Component\Routing\Generator\UrlGeneratorInterface;
use Doctrine\ORM\Query\ResultSetMapping;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Security;

class DefaultController extends Controller
{
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();
        
        $registro = false;
        $movimiento = false;
        $suministros = false;
        $auth_checker = $this->get('security.authorization_checker');
        if ($auth_checker->isGranted('IS_AUTHENTICATED_FULLY')) {
			$this->setMenu( $auth_checker );
			$id = $this->getUser()->getId();
			
			$dql = "SELECT e.id FROM  MinsalCoreBundle:FosUser u JOIN u.establecimiento e WHERE u.id = $id";
			$persona = $em->createQuery( $dql )->getResult();
			$e = 0;
			foreach ($persona as $i) {
				$e = $i['id'];
            }
            
            if ( $this->allIdRoles() != '0' ){
				$dql = "SELECT c.fechaConsumo, c.cantidadConsumo , e.cantidadExistencia, i.nombreLargoInsumo, i.id, i.codigoSinab, u.nombreUnidad
					FROM MinsalCoreBundle:CtlConsumo c JOIN c.ctlExistencia e JOIN e.ctlInsumoid i JOIN i.ctlEstablecimientoid ee JOIN i.unidadMedida u
					WHERE ee.id = $e
					ORDER BY e.id";
					$query = $em->createQuery($dql);
					if ($query->getResult() )
						$registro = $query->getResult();
				$dql = "SELECT m.fechaMovimiento, m.cantidad, e.nombre, i.nombreLargoInsumo, i.id, i.codigoSinab
					FROM MinsalCoreBundle:CtlMovimiento m JOIN m.ctlEstablecimientoid e JOIN m.ctlInsumoid i
					WHERE e.id = $e
					ORDER BY e.id";
					$query = $em->createQuery($dql);
					if ($query->getResult() )
						$movimiento = $query->getResult();
			}
			
			$dql = "SELECT i FROM MinsalCoreBundle:CtlSuministro i
				WHERE i.roleRegistra IN (".$this->allIdRoles().")";
			$query = $em->createQuery($dql);
			$suministros = $query->getResult();
			
			foreach ($this->getUser()->getRoles() as $role){
				if ($role != 'ROLE_USER'){/*
					$dql = "SELECT c.fechaConsumo, c.cantidadConsumo , e.cantidadExistencia, e.almacenFarmacia, ee.nombre, i.nombreLargoInsumo, e.loteExistencia
					FROM MinsalCoreBundle:CtlConsumo c JOIN c.ctlExistencia e JOIN e.ctlInsumoid i JOIN i.ctlEstablecimientoid ee
					WHERE ee.id = $e
					ORDER BY e.id";
					$query = $em->createQuery($dql);
					if ($query->getResult() )
						$registro = $query->getResult();
					$dql = "SELECT m.fechaMovimiento, m.cantidad, e.nombre, i.nombreLargoInsumo
					FROM MinsalCoreBundle:CtlMovimiento m JOIN m.ctlEstablecimientoid e JOIN m.ctlInsumoid i
					WHERE e.id = $e
					ORDER BY e.id";
					$query = $em->createQuery($dql);
					if ($query->getResult() )
						$movimiento = $query->getResult();*/
					
				}
			}
		}

        return $this->render('MinsalRutinaBundle:Default:index.html.twig', array(
            'ctlExistencias' => $registro,
            'movimiento' => $movimiento,
            'registro' => $registro,
            'region' => false,
            'suministros' => $suministros,
        ));
    }
    
    public function registroAction(){
			foreach ($this->getUser()->getRoles() as $role){
				$dql = "
				SELECT u
				FROM MinsalCoreBundle:FosUser u JOIN u.establecimiento e JOIN e.ctlInsumoid i JOIN i.grupoid gg JOIN gg.grupo g JOIN g.suministro s JOIN s.roleRegistra r 
				ORDER BY e.id
					
				SELECT e 
					FROM MinsalCoreBundle:CtlEstablecimiento e JOIN e.ctlInsumoid i JOIN i.grupoid gg JOIN gg.grupo g JOIN g.suministro s JOIN s.roleRegistra r 
					WHERE r.nombreRol = '$role'
					ORDER BY e.id";
				$query = $em->createQuery($dql);
				if ($query->getResult() )
				$registro = true;
			}			
	}
    
    public function xlsAction()
    {   
		$clave = "minsal";
        $phpExcelObject = $this->get('phpexcel')->createPHPExcelObject( $this->container->getParameter('kernel.root_dir').'/../web/files/registro.xlsx' );

        $phpExcelObject->getProperties()->setCreator("Ministerio de Salud - Republica de El Salvador, C. A.")
           ->setLastModifiedBy("Ministerio de Salud - Republica de El Salvador, C. A.")
           ->setTitle("Archivo de registro de consumos y existencias")
           ->setDescription( uniqid() );
        $phpExcelObject->setActiveSheetIndex(0);
        $em = $this->getDoctrine()->getManager();
        $id = $this->getUser()->getId();
		$dql = "SELECT e.id, e.nombre FROM  MinsalCoreBundle:FosUser u JOIN u.establecimiento e WHERE u.id = $id";
		$persona = $em->createQuery( $dql )->getResult();
		$e = 0;
		//Encabezado
		foreach ($persona as $i) {
			$e = $i['id'];
			$ee = $i['nombre'];
        }
        //Producros por establecimiento del usuario
		foreach ($this->getUser()->getRoles() as $role){
			if ($role != 'ROLE_USER'){
				$dql = "SELECT i.id, i.codigoSinab, i.nombreLargoInsumo
					FROM MinsalCoreBundle:CtlEstablecimiento e JOIN e.ctlInsumoid i JOIN i.grupoid gg JOIN gg.grupo g JOIN g.suministro s JOIN s.roleRegistra r 
					WHERE r.nombreRol = '$role' AND e.id = $e
					ORDER BY e.id";
				$persona = $em->createQuery( $dql )->getResult();
				$dql = "SELECT i.id, i.codigoSinab, i.nombreLargoInsumo, e.loteExistencia, e.fechaCaducidad, e.cantidadExistencia
					FROM MinsalCoreBundle:CtlExistencias e JOIN e.ctlInsumoid i JOIN i.grupoid gg JOIN gg.grupo g JOIN g.suministro s JOIN s.roleRegistra r 
					WHERE r.nombreRol = '$role' AND e.ctlEstablecimientoid = $e
					ORDER BY e.id";
				$insumo = $em->createQuery( $dql )->getResult();
			}
		}
		$cuadro = $em->createQuery("SELECT i.id, i.codigoSinab, i.nombreLargoInsumo FROM MinsalCoreBundle:CtlInsumo i JOIN i.ctlEstablecimientoid ee WHERE ee.id = $e")->getResult();
		
		//set datos personales
		$phpExcelObject->setActiveSheetIndex(0)->setCellValue('C2', $ee);
		$phpExcelObject->setActiveSheetIndex(0)->setCellValue('C3', date('Y-m-d'));
		$phpExcelObject->setActiveSheetIndex(0)->setCellValue('C4', $this->container->get('security.context')->getToken()->getUser());
		$i = 6;/*
		foreach ($insumo as $item) {
                $phpExcelObject->setActiveSheetIndex(0)->setCellValue('A'.$i, $item['id'])
                ->setCellValue('B'.$i, $item['codigoSinab'])
                ->setCellValue('C'.$i, $item['nombreLargoInsumo']);
                //->setCellValue('D'.$i, $item['loteExistencia'])
                //->setCellValue('E'.$i, date_format( $item['fechaCaducidad'] , 'Y-m-d') )
                //->setCellValue('F'.$i, $item['cantidadExistencia']);
            $phpExcelObject->getActiveSheet()->protectCells('A'.$i.':'.'C'.$i, $clave);
            $i++;
         }*/
		foreach ($cuadro as $item) {
                $phpExcelObject->setActiveSheetIndex(0)
                ->setCellValue('A'.$i, $item['id'])
                ->setCellValue('B'.$i, $item['codigoSinab'])
                ->setCellValue('C'.$i, $item['nombreLargoInsumo']);
            $i++;
         }
        $phpExcelObject->getActiveSheet()->protectCells('A1:D'.$i, $clave);
        $phpExcelObject->getActiveSheet()->getProtection()->setSheet(true);
        //Validacion de campos
        //salida
        $i = 3;
		foreach ($cuadro as $item) {
                $phpExcelObject->setActiveSheetIndex(1)
                ->setCellValue('A'.$i, $item['id'])
                ->setCellValue('B'.$i, $item['codigoSinab'])
                ->setCellValue('C'.$i, $item['nombreLargoInsumo']);
            $i++;
         }
        $phpExcelObject->getActiveSheet()->protectCells('A1:C'.$i, $clave);
        $phpExcelObject->getActiveSheet()->getProtection()->setSheet(true);
        $phpExcelObject->setActiveSheetIndex(0)->setTitle('Mensual');
        $phpExcelObject->setActiveSheetIndex(1)->setTitle('Diario');
        $phpExcelObject->getSecurity()->setLockWindows(true);
        $phpExcelObject->getSecurity()->setLockStructure(true);
        $phpExcelObject->getSecurity()->setWorkbookPassword($clave);
        $writer = $this->get('phpexcel')->createWriter($phpExcelObject, 'Excel2007');
        $response = $this->get('phpexcel')->createStreamedResponse($writer);
        $dispositionHeader = $response->headers->makeDisposition(ResponseHeaderBag::DISPOSITION_ATTACHMENT,date("Ymd").".xls");
        $response->headers->set('Content-Type', 'text/vnd.ms-excel; charset=utf-8');
        $response->headers->set('Pragma', 'public');
        $response->headers->set('Cache-Control', 'maxage=1');
        $response->headers->set('Content-Disposition', $dispositionHeader);

        return $response;
    }
    
    public function validarCelda( $objetoExcell, $celda, $max ){
		$objValidation = $objetoExcell->getActiveSheet()->getCell( $celda )->getDataValidation();
		$objValidation->setType( \PHPExcel_Cell_DataValidation::TYPE_WHOLE );
		$objValidation->setErrorStyle( \PHPExcel_Cell_DataValidation::STYLE_STOP );
		$objValidation->setAllowBlank(true);
		$objValidation->setShowInputMessage(false);
		$objValidation->setShowErrorMessage(true);
		$objValidation->setErrorTitle('Cantidad erronea');
		$objValidation->setError('Cantidad no permitida!');
		$objValidation->setPromptTitle('Allowed input');
		$objValidation->setPrompt(" Solo se permiten cantidades entre 0 y $max");
		$objValidation->setFormula1(0);
		$objValidation->setFormula2( $max );
		return $objValidation;
	}
    
    private function setMenu( $rol ){
		$em = $this->getDoctrine()->getManager();
        
        $list = '';
        $pass = '';
		$rsm = new ResultSetMapping;
		$rsm->addEntityResult('MinsalCoreBundle:CtlAcceso', 'a');
		$rsm->addFieldResult('a','path_acceso','pathAcceso');
		$rsm->addFieldResult('a','id','id');
		$rsm->addFieldResult('a','nombre_acceso','nombreAcceso');
		$nq = $this->getDoctrine()->getManager()
    ->createNativeQuery('
        SELECT a.path_acceso, r.id , a.nombre_acceso, r.nombre_rol
		FROM ctl_acceso a INNER JOIN permisos AS p ON (a.id = p.acceso_id) INNER JOIN ctl_rol AS r ON (r.id = p.rol_id) ORDER BY a.nombre_acceso ASC;
		',
        $rsm
    );
    $acceso = $nq->getArrayResult();
		foreach ($acceso as $accesos) {	
			$pass = $pass.$accesos['pathAcceso'].'/';
			$roles = $em->getRepository('MinsalCoreBundle:CtlRol')->findById($accesos['id']);
			$my = null;
			foreach ($roles as $rolt) {	
				if ( $rol->isGranted( $rolt->getNombreRol() ) ){
					$this->get('session')->set('user', $rolt->getNombreRol() );
					$pass = $pass.$rolt->getNombreRol().'/';
					$url = $this->generateUrl($accesos['pathAcceso'], array());//$this->generateUrl($accesos->getPathAcceso(), UrlGeneratorInterface::ABSOLUTE_URL);
					$list = $list.'<li><a href="'.$url.'"><i class="fa fa-circle-o text-aqua"></i> <span>'.$accesos['nombreAcceso'].'</span></a></li>';	
				}
			}			
		}
		$this->get('session')->set('rol', $this->getUser()->getRoles() );
		$this->get('session')->set('menu', $list);
		$this->get('session')->set('pass', $pass);
		
		
        $em = $this->getDoctrine()->getManager();
        $id = $this->getUser()->getId();
		$dql = "SELECT e.id, e.nombre, u.fullname FROM  MinsalCoreBundle:FosUser u JOIN u.establecimiento e WHERE u.id = $id";
		$persona = $em->createQuery( $dql )->getResult();
		$e = 0;
		//Encabezado
		foreach ($persona as $i) {
			$e = $i['fullname'];
			$ee = $i['nombre'];
        }
		$this->get('session')->set('nombre', $e);
		$this->get('session')->set('establecimiento', $ee);
	}
	
	public function allIdRoles(){
		$em = $this->getDoctrine()->getManager();
		$all ="0";
		foreach ($this->getUser()->getRoles() as $role){
			//$roles = $em->getRepository('MinsalCoreBundle:CtlRol')->findByNombreRol($role);
			$dql = "SELECT r.id, r.nombreRol FROM MinsalCoreBundle:CtlRol r WHERE r.nombreRol = '$role' ORDER BY r.id";
			$roles = $em->createQuery( $dql )->getArrayResult();
			foreach($roles as $rolt) {
				$all.=",".$rolt['id'];
			}
		}
		return $all;
	}
}
