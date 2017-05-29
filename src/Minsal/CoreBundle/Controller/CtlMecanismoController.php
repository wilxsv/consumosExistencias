<?php

namespace Minsal\CoreBundle\Controller;

use Minsal\CoreBundle\Entity\CtlMecanismo;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

/**
 * Ctlmecanismo controller.
 *
 */
class CtlMecanismoController extends Controller
{
    /**
     * Lists all ctlMecanismo entities.
     *
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $ctlMecanismos = $em->getRepository('MinsalCoreBundle:CtlMecanismo')->findAll();

        return $this->render('ctlmecanismo/index.html.twig', array(
            'ctlMecanismos' => $ctlMecanismos,
        ));
    }

    /**
     * Creates a new ctlMecanismo entity.
     *
     */
    public function newAction(Request $request)
    {
        $ctlMecanismo = new Ctlmecanismo();
        $form = $this->createForm('Minsal\CoreBundle\Form\CtlMecanismoType', $ctlMecanismo);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($ctlMecanismo);
            $em->flush();

            return $this->redirectToRoute('mecanismo_show', array('id' => $ctlMecanismo->getId()));
        }

        return $this->render('ctlmecanismo/new.html.twig', array(
            'ctlMecanismo' => $ctlMecanismo,
            'form' => $form->createView(),
        ));
    }

    /**
     * Finds and displays a ctlMecanismo entity.
     *
     */
    public function showAction(CtlMecanismo $ctlMecanismo)
    {
        $deleteForm = $this->createDeleteForm($ctlMecanismo);

        return $this->render('ctlmecanismo/show.html.twig', array(
            'ctlMecanismo' => $ctlMecanismo,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing ctlMecanismo entity.
     *
     */
    public function editAction(Request $request, CtlMecanismo $ctlMecanismo)
    {
        $deleteForm = $this->createDeleteForm($ctlMecanismo);
        $editForm = $this->createForm('Minsal\CoreBundle\Form\CtlMecanismoType', $ctlMecanismo);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('mecanismo_edit', array('id' => $ctlMecanismo->getId()));
        }

        return $this->render('ctlmecanismo/edit.html.twig', array(
            'ctlMecanismo' => $ctlMecanismo,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a ctlMecanismo entity.
     *
     */
    public function deleteAction(Request $request, CtlMecanismo $ctlMecanismo)
    {
        $form = $this->createDeleteForm($ctlMecanismo);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($ctlMecanismo);
            $em->flush();
        }

        return $this->redirectToRoute('mecanismo_index');
    }

    /**
     * Creates a form to delete a ctlMecanismo entity.
     *
     * @param CtlMecanismo $ctlMecanismo The ctlMecanismo entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(CtlMecanismo $ctlMecanismo)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('mecanismo_delete', array('id' => $ctlMecanismo->getId())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }
}
