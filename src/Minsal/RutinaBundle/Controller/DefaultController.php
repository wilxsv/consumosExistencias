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
        
        $dql = "SELECT i FROM  MinsalCoreBundle:CtlInsumo i";
		$insumo = $em->createQuery( $dql )->getResult();
        $ctlExistencias = $em->getRepository('MinsalCoreBundle:CtlExistencias')->findAll();
        
        $auth_checker = $this->get('security.authorization_checker');
        if ($auth_checker->isGranted('IS_AUTHENTICATED_FULLY')) {
			$this->setMenu( $auth_checker );
		}

        return $this->render('MinsalRutinaBundle:Default:index.html.twig', array(
            'ctlExistencias' => $ctlExistencias,
        ));
    }
    
    public function xlsAction()
    {   
        $phpExcelObject = $this->get('phpexcel')->createPHPExcelObject( $this->container->getParameter('kernel.root_dir').'/../web/files/registro.xlsx' );

        $phpExcelObject->getProperties()->setCreator("Ministerio de Salud - Republica de El Salvador, C. A.")
           ->setLastModifiedBy("Ministerio de Salud - Republica de El Salvador, C. A.")
           ->setTitle("Archivo de registro de consumos y existencias")
           ->setDescription( uniqid() );
        $phpExcelObject->setActiveSheetIndex(0);

        $em = $this->getDoctrine()->getManager();
        $dql = "SELECT i FROM  MinsalCoreBundle:CtlInsumo i";
		$insumo = $em->createQuery( $dql )->setMaxResults(125)->getResult();
		$i = 6;
		foreach ($insumo as $item) {
            $phpExcelObject->setActiveSheetIndex(0)
                ->setCellValue('A'.$i, $item->getId())
                ->setCellValue('B'.$i, $item->getCodigoSinab())
                ->setCellValue('C'.$i, $item->getNombreLargoInsumo());
            $i++;
         }
        $phpExcelObject->getActiveSheet()->setTitle('Datos');
        $phpExcelObject->setActiveSheetIndex(0);
        $writer = $this->get('phpexcel')->createWriter($phpExcelObject, 'Excel2007');
        $response = $this->get('phpexcel')->createStreamedResponse($writer);
        $dispositionHeader = $response->headers->makeDisposition(ResponseHeaderBag::DISPOSITION_ATTACHMENT,date("Ymd").".xls");
        $response->headers->set('Content-Type', 'text/vnd.ms-excel; charset=utf-8');
        $response->headers->set('Pragma', 'public');
        $response->headers->set('Cache-Control', 'maxage=1');
        $response->headers->set('Content-Disposition', $dispositionHeader);

        return $response;   
        /*
        $file = $this->container->getParameter('kernel.root_dir').'/../web/files/registro.xlsx';
        
        $response = new BinaryFileResponse($file);
        $response->setContentDisposition(ResponseHeaderBag::DISPOSITION_ATTACHMENT);
        
        return $response;
        */
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
        SELECT a.path_acceso, r.id , a.nombre_acceso
		FROM ctl_acceso a INNER JOIN permisos AS p ON (a.id = p.acceso_id) INNER JOIN ctl_rol AS r ON (r.id = p.rol_id) ORDER BY a.nombre_acceso ASC;
		',
        $rsm
    );
    $acceso = $nq->getArrayResult();
		foreach ($acceso as $accesos) {	
			$pass = $pass.$accesos['pathAcceso'].'/';
			$roles = $em->getRepository('MinsalCoreBundle:CtlRol')->findById($accesos['id']);
			foreach ($roles as $rolt) {	
				if ( $rol->isGranted( $rolt->getNombreRol() ) ){
					$pass = $pass.$rolt->getNombreRol().'/';
					$url = $this->generateUrl($accesos['pathAcceso'], array());//$this->generateUrl($accesos->getPathAcceso(), UrlGeneratorInterface::ABSOLUTE_URL);
					$list = $list.'<li><a href="'.$url.'"><i class="fa fa-circle-o text-aqua"></i> <span>'.$accesos['nombreAcceso'].'</span></a></li>';	
				}
			}			
		}		
		$this->get('session')->set('menu', $list);
		$this->get('session')->set('pass', $pass);
	}
}
