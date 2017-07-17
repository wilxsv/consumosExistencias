<?php

namespace Minsal\CoreBundle\Controller;

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
        return $this->render('MinsalCoreBundle:Default:index.html.twig');
    }
    public function registroAction()
    {
        return $this->render('MinsalCoreBundle:Default:registro.html.twig');
    }
    public function manualAction(Request $request)
    {
		if ($request->isXmlHttpRequest()) {
            
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
        $dql = "SELECT e.id, i.nombreLargoInsumo, e.loteExistencia, e.fechaCaducidad
        FROM  MinsalCoreBundle:CtlExistencias e JOIN e.ctlEstablecimientoid ee  JOIN e.ctlInsumoid i
        WHERE ee.id = $e";
		$insumo = $em->createQuery( $dql )->getResult();
		
        return $this->render('MinsalCoreBundle:Default:manual.html.twig', array('insumo' => $insumo, 'establecimiento' => $ee, ));
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
        return $this->render('MinsalCoreBundle:Default:archivo.html.twig', array(
            'suministro' => $suministro,
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
