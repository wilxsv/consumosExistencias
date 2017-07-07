<?php

namespace Minsal\CoreBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

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
    public function manualAction()
    {
		
        $em = $this->getDoctrine()->getManager();
        $dql = "SELECT i FROM  MinsalCoreBundle:CtlInsumo i";
		$insumo = $em->createQuery( $dql )->setMaxResults(125)->getResult();
		
        return $this->render('MinsalCoreBundle:Default:manual.html.twig', array('insumo' => $insumo,));
    }
    public function archivoAction()
    {
        return $this->render('MinsalCoreBundle:Default:archivo.html.twig');
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
}
