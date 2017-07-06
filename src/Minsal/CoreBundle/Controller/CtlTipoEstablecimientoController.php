<?php

namespace Minsal\CoreBundle\Controller;

use Minsal\CoreBundle\Entity\CtlTipoEstablecimiento;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;


/**
 * Ctltipoestablecimiento controller.
 *
 */
class CtlTipoEstablecimientoController extends Controller
{
    /**
     * Lists all ctlTipoEstablecimiento entities.
     *
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $ctlTipoEstablecimientos = $em->getRepository('MinsalCoreBundle:CtlTipoEstablecimiento')->findAll();

        return $this->render('ctltipoestablecimiento/index.html.twig', array(
            'ctlTipoEstablecimientos' => $ctlTipoEstablecimientos,
        ));
    }

    /**
     * Finds and displays a ctlTipoEstablecimiento entity.
     *
     */
    public function showAction(CtlTipoEstablecimiento $ctlTipoEstablecimiento)
    {

        return $this->render('ctltipoestablecimiento/show.html.twig', array(
            'ctlTipoEstablecimiento' => $ctlTipoEstablecimiento,
        ));
    }
}
