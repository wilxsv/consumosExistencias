<?php

namespace Minsal\RutinaBundle\Controller;

use Minsal\CoreBundle\Entity\CtlExistencias;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\ResponseHeaderBag;
use Symfony\Component\HttpFoundation\BinaryFileResponse;

class DefaultController extends Controller
{
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();
        
        $dql = "SELECT i FROM  MinsalCoreBundle:CtlInsumo i";
		$insumo = $em->createQuery( $dql )->getResult();
        $ctlExistencias = $em->getRepository('MinsalCoreBundle:CtlExistencias')->findAll();

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
}
