<?php

namespace Minsal\CoreBundle\Controller;

use Minsal\CoreBundle\Entity\CtlInsumo;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;


/**
 * Ctlinsumo controller.
 *
 */
class CtlInsumoController extends Controller
{
    /**
     * Lists all ctlInsumo entities.
     *
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $ctlInsumos = $em->getRepository('MinsalCoreBundle:CtlInsumo')->findAll();

        return $this->render('ctlinsumo/index.html.twig', array(
            'ctlInsumos' => $ctlInsumos,
        ));
    }

    /**
     * Finds and displays a ctlInsumo entity.
     *
     */
    public function showAction(CtlInsumo $ctlInsumo)
    {

        return $this->render('ctlinsumo/show.html.twig', array(
            'ctlInsumo' => $ctlInsumo,
        ));
    }
}
