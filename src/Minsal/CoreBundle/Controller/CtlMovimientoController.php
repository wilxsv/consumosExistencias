<?php

namespace Minsal\CoreBundle\Controller;

use Minsal\CoreBundle\Entity\CtlMovimiento;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

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

        $ctlMovimientos = $em->getRepository('MinsalCoreBundle:CtlMovimiento')->findAll();

        return $this->render('ctlmovimiento/index.html.twig', array(
            'ctlMovimientos' => $ctlMovimientos,
        ));
    }

    /**
     * Creates a new ctlMovimiento entity.
     *
     */
    public function newAction(Request $request)
    {
        $ctlMovimiento = new Ctlmovimiento();
        $form = $this->createForm('Minsal\CoreBundle\Form\CtlMovimientoType', $ctlMovimiento);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($ctlMovimiento);
            $em->flush();

            return $this->redirectToRoute('movimiento_show', array('id' => $ctlMovimiento->getId()));
        }

        return $this->render('ctlmovimiento/new.html.twig', array(
            'ctlMovimiento' => $ctlMovimiento,
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
}
