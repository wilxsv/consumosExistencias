<?php

namespace Minsal\CoreBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\ResponseHeaderBag;
use Symfony\Component\HttpFoundation\BinaryFileResponse;
use Symfony\Component\Routing\Generator\UrlGeneratorInterface;
use Doctrine\ORM\Query\ResultSetMapping;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Security;
use Symfony\Component\HttpFoundation\Response;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('MinsalCoreBundle:Default:index.html.twig');
    }
    public function registroAction()
    {
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
					$registro = false;
			foreach ($this->getUser()->getRoles() as $role){
				if ($role != 'ROLE_USER'){//, ee.nombre 
					$dql = "SELECT e.cantidadExistencia, e.loteExistencia, e.almacenFarmacia, i.nombreLargoInsumo
					FROM MinsalCoreBundle:CtlExistencias e JOIN e.ctlInsumoid i
					WHERE e.ctlEstablecimientoid = $e AND e.almacenFarmacia = FALSE
					ORDER BY e.id";
					$query = $em->createQuery($dql);
					if ($query->getResult() )
						$registro = $query->getResult();
				}
			}
        return $this->render('MinsalCoreBundle:Default:registro.html.twig', array('insumo' => $registro ));
    }
    public function manualAction(Request $request)
    {
		if ($request->isXmlHttpRequest()) {
			$id = $this->getUser()->getId();
			$em = $this->getDoctrine()->getManager();
			$em->getConnection()->exec( "INSERT INTO ctl_consumo(fecha_consumo, cantidad_consumo, registro_schema, ctl_mecanismoid, ctl_existencia, user_id_schema)
			VALUES ('".$request->query->get('fecha')."', ".$request->query->get('cantidad').",now(), 1, ".$request->query->get('id').", $id)" );			
            return new Response( '<div class="col-md-12 col-sm-12 col-xs-12">
          <div class="info-box">
           <span class="info-box-icon bg-red"><i class="fa fa-star-o"></i></span>
            <div class="info-box-content">
              <span class="info-box-text">. </span>
            </div>
			</div>
			</div>' );
        }
		
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

        $em = $this->getDoctrine()->getManager();
        $dql = "SELECT e.id, i.nombreLargoInsumo, e.loteExistencia, e.fechaCaducidad, e.cantidadExistencia
        FROM  MinsalCoreBundle:CtlExistencias e JOIN e.ctlEstablecimientoid ee  JOIN e.ctlInsumoid i
        WHERE ee.id = $e";
		$insumo = $em->createQuery( $dql )->getResult();
		$establecimientos = $em->createQuery( "SELECT e.id, e.nombre FROM  MinsalCoreBundle:CtlEstablecimiento e WHERE e.enableSchema = 1" )->getResult();
		
        return $this->render('MinsalCoreBundle:Default:manual.html.twig', array('insumo' => $insumo, 'establecimiento' => $ee, 'establecimientos' => $establecimientos, ));
    }
    
    public function archivoAction()
    {
		$suministro = false;
		$em = $this->getDoctrine()->getManager();
        $auth_checker = $this->get('security.authorization_checker');
		foreach ($this->getUser()->getRoles() as $role){
			if ($role != 'ROLE_USER'){
				$dql = "SELECT s FROM  MinsalCoreBundle:CtlSuministro s JOIN s.roleRegistra r WHERE r.nombreRol = '$role'";
				$persona = $em->createQuery( $dql )->getResult();
				foreach ($persona as $i) {
					$suministro = $i->getNombreSuministro();
				}
			}
		}
		////////////////////////////////////
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
			}
		}
		$dql = "SELECT i.id, i.codigoSinab, i.nombreLargoInsumo, e.loteExistencia, e.fechaCaducidad, e.cantidadExistencia
					FROM MinsalCoreBundle:CtlExistencias e JOIN e.ctlInsumoid i JOIN i.grupoid gg JOIN gg.grupo g JOIN g.suministro s JOIN s.roleRegistra r 
					WHERE r.nombreRol = 'ROLE_REGISTRO_LOCAL' AND e.ctlEstablecimientoid = $e
					ORDER BY e.id";
				$insumo = $em->createQuery( $dql )->getResult();
				
				
        return $this->render('MinsalCoreBundle:Default:archivo.html.twig', array(
            'suministro' => $suministro,'insumo' => $insumo,
        ));
    }    
    
    public function cuadroAction(Request $request)
    {
        $em = $this->getDoctrine()->getManager();
        $establecimientos = $em->getRepository('MinsalCoreBundle:CtlEstablecimiento')->findAll();
        $form = $this->createForm('Minsal\CoreBundle\Form\CuadroType');
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
        }
        return $this->render('MinsalCoreBundle:Default:cuadro.html.twig', array('form' => $form->createView(), 'establecimientos' => $establecimientos));
    }
    
    public function getRest(){
		$service_url = 'http://localhost:8080/v1/sinab/procesoscompras?tocken=eccbc87e4b5ce2fe28308fd9f2a7baf3';
       $curl = curl_init($service_url);
       curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
       $curl_response = curl_exec($curl);
       curl_close($curl);
		
		
	return $curl_response;
	}
}
