<?php

namespace Minsal\CoreBundle\Controller;

use Minsal\CoreBundle\Entity\CtlTipoMovimiento;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

/**
 * Ctltipomovimiento controller.
 *
 */
class CtlTipoMovimientoController extends Controller
{
    /**
     * Lists all ctlTipoMovimiento entities.
     *
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $ctlTipoMovimientos = $em->getRepository('MinsalCoreBundle:CtlTipoMovimiento')->findAll();

        return $this->render('ctltipomovimiento/index.html.twig', array(
            'ctlTipoMovimientos' => $ctlTipoMovimientos,
        ));
    }

    /**
     * Creates a new ctlTipoMovimiento entity.
     *
     */
    public function newAction(Request $request)
    {
        $ctlTipoMovimiento = new Ctltipomovimiento();
        $form = $this->createForm('Minsal\CoreBundle\Form\CtlTipoMovimientoType', $ctlTipoMovimiento);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($ctlTipoMovimiento);
            $em->flush();

            return $this->redirectToRoute('tipo_movimiento_show', array('id' => $ctlTipoMovimiento->getId()));
        }

        return $this->render('ctltipomovimiento/new.html.twig', array(
            'ctlTipoMovimiento' => $ctlTipoMovimiento,
            'form' => $form->createView(),
        ));
    }

    /**
     * Finds and displays a ctlTipoMovimiento entity.
     *
     */
    public function showAction(CtlTipoMovimiento $ctlTipoMovimiento)
    {
        $deleteForm = $this->createDeleteForm($ctlTipoMovimiento);

        return $this->render('ctltipomovimiento/show.html.twig', array(
            'ctlTipoMovimiento' => $ctlTipoMovimiento,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing ctlTipoMovimiento entity.
     *
     */
    public function editAction(Request $request, CtlTipoMovimiento $ctlTipoMovimiento)
    {
        $deleteForm = $this->createDeleteForm($ctlTipoMovimiento);
        $editForm = $this->createForm('Minsal\CoreBundle\Form\CtlTipoMovimientoType', $ctlTipoMovimiento);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('tipo_movimiento_edit', array('id' => $ctlTipoMovimiento->getId()));
        }

        return $this->render('ctltipomovimiento/edit.html.twig', array(
            'ctlTipoMovimiento' => $ctlTipoMovimiento,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a ctlTipoMovimiento entity.
     *
     */
    public function deleteAction(Request $request, CtlTipoMovimiento $ctlTipoMovimiento)
    {
        $form = $this->createDeleteForm($ctlTipoMovimiento);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($ctlTipoMovimiento);
            $em->flush();
        }

        return $this->redirectToRoute('tipo_movimiento_index');
    }

    /**
     * Creates a form to delete a ctlTipoMovimiento entity.
     *
     * @param CtlTipoMovimiento $ctlTipoMovimiento The ctlTipoMovimiento entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(CtlTipoMovimiento $ctlTipoMovimiento)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('tipo_movimiento_delete', array('id' => $ctlTipoMovimiento->getId())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }
}
