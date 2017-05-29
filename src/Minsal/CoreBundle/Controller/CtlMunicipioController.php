<?php

namespace Minsal\CoreBundle\Controller;

use Minsal\CoreBundle\Entity\CtlMunicipio;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;


/**
 * Ctlmunicipio controller.
 *
 */
class CtlMunicipioController extends Controller
{
    /**
     * Lists all ctlMunicipio entities.
     *
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $ctlMunicipios = $em->getRepository('MinsalCoreBundle:CtlMunicipio')->findAll();

        return $this->render('ctlmunicipio/index.html.twig', array(
            'ctlMunicipios' => $ctlMunicipios,
        ));
    }

    /**
     * Finds and displays a ctlMunicipio entity.
     *
     */
    public function showAction(CtlMunicipio $ctlMunicipio)
    {

        return $this->render('ctlmunicipio/show.html.twig', array(
            'ctlMunicipio' => $ctlMunicipio,
        ));
    }
}
