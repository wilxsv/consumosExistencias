<?php

namespace Minsal\CoreBundle\Controller;

use Minsal\CoreBundle\Entity\CtlMecanismo;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;


/**
 * Ctlmecanismo controller.
 *
 */
class CtlMecanismoController extends Controller
{
    /**
     * Lists all ctlMecanismo entities.
     *
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $ctlMecanismos = $em->getRepository('MinsalCoreBundle:CtlMecanismo')->findAll();

        return $this->render('ctlmecanismo/index.html.twig', array(
            'ctlMecanismos' => $ctlMecanismos,
        ));
    }

    /**
     * Finds and displays a ctlMecanismo entity.
     *
     */
    public function showAction(CtlMecanismo $ctlMecanismo)
    {

        return $this->render('ctlmecanismo/show.html.twig', array(
            'ctlMecanismo' => $ctlMecanismo,
        ));
    }
}
