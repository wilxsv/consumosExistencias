<?php

namespace Minsal\RutinaBundle\Controller;

use Minsal\CoreBundle\Entity\CtlExistencias;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;


class DefaultController extends Controller
{
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();
        
        //$ctlEstablecimientos = $em->createQuery( "SELECT e FROM MinsalCoreBundle:CtlEstablecimiento e" )->setMaxResults(100)->getResult();
        //$dql = "SELECT i FROM  MinsalCoreBundle:CtlInsumo i";
		//$insumo = $em->createQuery( $dql )->setMaxResults(100)->getResult();
/*
 * SELECT u, p, rg, r FROM CRMCoreBundle:User u
              JOIN CRMCoreBundle:Profile p
              JOIN CRMCoreBundle:RoleGroup rg
              JOIN CRMCoreBundle:Role r
              WHERE
                u.id=:user
 * */
        $ctlExistencias = $em->getRepository('MinsalCoreBundle:CtlExistencias')->findAll();

        return $this->render('MinsalRutinaBundle:Default:index.html.twig', array(
            'ctlExistencias' => $ctlExistencias,
        ));
    }
}
