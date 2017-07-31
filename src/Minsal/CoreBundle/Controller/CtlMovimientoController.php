<?php

namespace Minsal\CoreBundle\Controller;

use Minsal\CoreBundle\Entity\CtlMovimiento;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

use Symfony\Component\HttpFoundation\ResponseHeaderBag;
use Symfony\Component\HttpFoundation\BinaryFileResponse;
use Symfony\Component\Routing\Generator\UrlGeneratorInterface;
use Doctrine\ORM\Query\ResultSetMapping;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Security;
/**
 * Ctlmovimiento controller.
 *
 */
class CtlMovimientoController extends Controller
{
    /**
     * Lists all ctlMovimiento entities.
     *
     */
    public function indexAction()
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

        $repository = $this->getDoctrine()->getRepository('MinsalCoreBundle:CtlMovimiento');
		$query = $repository->createQueryBuilder('p')->where("p.ctlEstablecimientoid = $e OR p.establecimientoOrigen = $e")->addOrderBy('p.fechaMovimiento', 'ASC')->getQuery();
		$ctlMovimientos = $query->getResult();
			

        return $this->render('ctlmovimiento/index.html.twig', array(
            'ctlMovimientos' => $ctlMovimientos,
            'establecimiento' => $ee,
            'id' => $e	,
        ));
    }

    /**
     * Creates a new ctlMovimiento entity.
     *
     */
    public function newAction(Request $request)
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
        
        $ctlMovimiento = new Ctlmovimiento();
        $form = $this->createForm('Minsal\CoreBundle\Form\CtlMovimientoType', $ctlMovimiento);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $ctlMovimiento->setFechaMovimiento(new \DateTime($_POST["minsal_corebundle_ctlmovimiento"]["fechaMovimiento"]));
            $ctlMovimiento->setFechaRegistroMovimiento(new \DateTime("now"));
            $em->persist($ctlMovimiento);
            $em->flush();

            return $this->redirectToRoute('movimiento_show', array('id' => $ctlMovimiento->getId(), 'e' => $id ));
        }

        return $this->render('ctlmovimiento/new.html.twig', array(
            'ctlMovimiento' => $ctlMovimiento, 'e' => $e ,
            'form' => $form->createView(),
        ));
    }

    /**
     * Finds and displays a ctlMovimiento entity.
     *
     */
    public function showAction(CtlMovimiento $ctlMovimiento)
    {
        $deleteForm = $this->createDeleteForm($ctlMovimiento);

        return $this->render('ctlmovimiento/show.html.twig', array(
            'ctlMovimiento' => $ctlMovimiento,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing ctlMovimiento entity.
     *
     */
    public function editAction(Request $request, CtlMovimiento $ctlMovimiento)
    {
        $deleteForm = $this->createDeleteForm($ctlMovimiento);
        $editForm = $this->createForm('Minsal\CoreBundle\Form\CtlMovimientoType', $ctlMovimiento);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('movimiento_edit', array('id' => $ctlMovimiento->getId()));
        }

        return $this->render('ctlmovimiento/edit.html.twig', array(
            'ctlMovimiento' => $ctlMovimiento,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a ctlMovimiento entity.
     *
     */
    public function deleteAction(Request $request, CtlMovimiento $ctlMovimiento)
    {
        $form = $this->createDeleteForm($ctlMovimiento);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($ctlMovimiento);
            $em->flush();
        }

        return $this->redirectToRoute('movimiento_index');
    }

    /**
     * Creates a form to delete a ctlMovimiento entity.
     *
     * @param CtlMovimiento $ctlMovimiento The ctlMovimiento entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(CtlMovimiento $ctlMovimiento)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('movimiento_delete', array('id' => $ctlMovimiento->getId())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }
    
    public function cierreAction(Request $request)
    {
		if (! $request->isXmlHttpRequest()) {
            throw new NotFoundHttpException();
        }
        if ($request->query->get('establecimiento') != NULL && is_numeric($request->query->get('establecimiento')) ){
			$id = $request->query->get('establecimiento');
			$em = $this->getDoctrine()->getManager();
			//$em->getConnection()->exec( "select * from delcuadrobasico( $id );" );
	        return new Response( '<div class="info-box"><span class="info-box-icon bg-red"><i class="fa fa-star-o"></i></span>
			 <div class="info-box-content"><span class="info-box-text">Cierre realizado con exito. </span></div>
			</div>' );
		}
		else{
			return new Response( 'Error en los datos enviados !!!' );
		}
    }
}
