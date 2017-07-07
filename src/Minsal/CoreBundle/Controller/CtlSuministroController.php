<?php

namespace Minsal\CoreBundle\Controller;

use Minsal\CoreBundle\Entity\CtlSuministro;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

/**
 * Ctlsuministro controller.
 *
 */
class CtlSuministroController extends Controller
{
    /**
     * Lists all ctlSuministro entities.
     *
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $ctlSuministros = $em->getRepository('MinsalCoreBundle:CtlSuministro')->findAll();

        return $this->render('ctlsuministro/index.html.twig', array(
            'ctlSuministros' => $ctlSuministros,
        ));
    }

    /**
     * Creates a new ctlSuministro entity.
     *
     */
    public function newAction(Request $request)
    {
        $ctlSuministro = new Ctlsuministro();
        $form = $this->createForm('Minsal\CoreBundle\Form\CtlSuministroType', $ctlSuministro);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($ctlSuministro);
            $em->flush();

            return $this->redirectToRoute('configuracion_suministros_show', array('id' => $ctlSuministro->getId()));
        }

        return $this->render('ctlsuministro/new.html.twig', array(
            'ctlSuministro' => $ctlSuministro,
            'form' => $form->createView(),
        ));
    }

    /**
     * Finds and displays a ctlSuministro entity.
     *
     */
    public function showAction(CtlSuministro $ctlSuministro)
    {
        $deleteForm = $this->createDeleteForm($ctlSuministro);

        return $this->render('ctlsuministro/show.html.twig', array(
            'ctlSuministro' => $ctlSuministro,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing ctlSuministro entity.
     *
     */
    public function editAction(Request $request, CtlSuministro $ctlSuministro)
    {
        $deleteForm = $this->createDeleteForm($ctlSuministro);
        $editForm = $this->createForm('Minsal\CoreBundle\Form\CtlSuministroType', $ctlSuministro);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('configuracion_suministros_edit', array('id' => $ctlSuministro->getId()));
        }

        return $this->render('ctlsuministro/edit.html.twig', array(
            'ctlSuministro' => $ctlSuministro,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a ctlSuministro entity.
     *
     */
    public function deleteAction(Request $request, CtlSuministro $ctlSuministro)
    {
        $form = $this->createDeleteForm($ctlSuministro);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($ctlSuministro);
            $em->flush();
        }

        return $this->redirectToRoute('configuracion_suministros_index');
    }

    /**
     * Creates a form to delete a ctlSuministro entity.
     *
     * @param CtlSuministro $ctlSuministro The ctlSuministro entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(CtlSuministro $ctlSuministro)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('configuracion_suministros_delete', array('id' => $ctlSuministro->getId())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }
}
