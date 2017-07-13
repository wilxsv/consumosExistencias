<?php

namespace Minsal\CoreBundle\Controller;

use Minsal\CoreBundle\Entity\CtlInsumo;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

/**
 * Ctlinsumo controller.
 *
 */
class CtlInsumoController extends Controller
{
    /**
     * Lists all ctlInsumo entities.
     *
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $ctlInsumos = $em->getRepository('MinsalCoreBundle:CtlInsumo')->findAll();

        return $this->render('ctlinsumo/index.html.twig', array(
            'ctlInsumos' => $ctlInsumos,
        ));
    }

    /**
     * Creates a new ctlInsumo entity.
     *
     */
    public function newAction(Request $request)
    {
        $ctlInsumo = new Ctlinsumo();
        $form = $this->createForm('Minsal\CoreBundle\Form\CtlInsumoType', $ctlInsumo);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($ctlInsumo);
            $em->flush();

            return $this->redirectToRoute('configuracion_productos_show', array('id' => $ctlInsumo->getId()));
        }

        return $this->render('ctlinsumo/new.html.twig', array(
            'ctlInsumo' => $ctlInsumo,
            'form' => $form->createView(),
        ));
    }

    /**
     * Finds and displays a ctlInsumo entity.
     *
     */
    public function showAction(CtlInsumo $ctlInsumo)
    {
        $deleteForm = $this->createDeleteForm($ctlInsumo);

        return $this->render('ctlinsumo/show.html.twig', array(
            'ctlInsumo' => $ctlInsumo,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing ctlInsumo entity.
     *
     */
    public function editAction(Request $request, CtlInsumo $ctlInsumo)
    {
        $deleteForm = $this->createDeleteForm($ctlInsumo);
        $editForm = $this->createForm('Minsal\CoreBundle\Form\CtlInsumoType', $ctlInsumo);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('configuracion_productos_index');
        }

        return $this->render('ctlinsumo/edit.html.twig', array(
            'ctlInsumo' => $ctlInsumo,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a ctlInsumo entity.
     *
     */
    public function deleteAction(Request $request, CtlInsumo $ctlInsumo)
    {
        $form = $this->createDeleteForm($ctlInsumo);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($ctlInsumo);
            $em->flush();
        }

        return $this->redirectToRoute('configuracion_productos_index');
    }

    /**
     * Creates a form to delete a ctlInsumo entity.
     *
     * @param CtlInsumo $ctlInsumo The ctlInsumo entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(CtlInsumo $ctlInsumo)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('configuracion_productos_delete', array('id' => $ctlInsumo->getId())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }
}
