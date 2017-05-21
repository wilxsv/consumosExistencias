<?php

namespace Minsal\CoreBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

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
        return $this->render('MinsalCoreBundle:Default:manual.html.twig');
    }
    public function archivoAction()
    {
        return $this->render('MinsalCoreBundle:Default:archivo.html.twig');
    }
}
