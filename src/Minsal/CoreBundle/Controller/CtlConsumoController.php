<?php

namespace Minsal\CoreBundle\Controller;

use Minsal\CoreBundle\Entity\CtlConsumo;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

/**
 * Ctlconsumo controller.
 *
 */
class CtlConsumoController extends Controller
{
    /**
     * Lists all ctlConsumo entities.
     *
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $ctlConsumos = $em->getRepository('MinsalCoreBundle:CtlConsumo')->findAll();

        return $this->render('ctlconsumo/index.html.twig', array(
            'ctlConsumos' => $ctlConsumos,
        ));
    }

    /**
     * Creates a new ctlConsumo entity.
     *
     */
    public function newAction(Request $request)
    {
        $ctlConsumo = new Ctlconsumo();
        $form = $this->createForm('Minsal\CoreBundle\Form\CtlConsumoType', $ctlConsumo);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($ctlConsumo);
            $em->flush();

            return $this->redirectToRoute('consumo_show', array('id' => $ctlConsumo->getId()));
        }

        return $this->render('ctlconsumo/new.html.twig', array(
            'ctlConsumo' => $ctlConsumo,
            'form' => $form->createView(),
        ));
    }

    /**
     * Finds and displays a ctlConsumo entity.
     *
     */
    public function showAction(CtlConsumo $ctlConsumo)
    {
        $deleteForm = $this->createDeleteForm($ctlConsumo);

        return $this->render('ctlconsumo/show.html.twig', array(
            'ctlConsumo' => $ctlConsumo,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing ctlConsumo entity.
     *
     */
    public function editAction(Request $request, CtlConsumo $ctlConsumo)
    {
        $deleteForm = $this->createDeleteForm($ctlConsumo);
        $editForm = $this->createForm('Minsal\CoreBundle\Form\CtlConsumoType', $ctlConsumo);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('consumo_edit', array('id' => $ctlConsumo->getId()));
        }

        return $this->render('ctlconsumo/edit.html.twig', array(
            'ctlConsumo' => $ctlConsumo,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a ctlConsumo entity.
     *
     */
    public function deleteAction(Request $request, CtlConsumo $ctlConsumo)
    {
        $form = $this->createDeleteForm($ctlConsumo);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($ctlConsumo);
            $em->flush();
        }

        return $this->redirectToRoute('consumo_index');
    }

    /**
     * Creates a form to delete a ctlConsumo entity.
     *
     * @param CtlConsumo $ctlConsumo The ctlConsumo entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(CtlConsumo $ctlConsumo)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('consumo_delete', array('id' => $ctlConsumo->getId())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }
}
