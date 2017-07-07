<?php

namespace Minsal\CoreBundle\Controller;

use Minsal\CoreBundle\Entity\CtlExistencias;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

/**
 * Ctlexistencia controller.
 *
 */
class CtlExistenciasController extends Controller
{
    /**
     * Lists all ctlExistencia entities.
     *
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $c = $em->getRepository('MinsalCoreBundle:CtlExistencias')->findAll();
        $e = $em->getRepository('MinsalCoreBundle:CtlConsumo')->findAll();

        return $this->render('ctlexistencias/index.html.twig', array(
            'ctlConsumos' => $c,
            'ctlExistencias' => $e,
        ));
    }

    /**
     * Creates a new ctlExistencia entity.
     *
     */
    public function newAction(Request $request)
    {
        //$ctlExistencia = new CtlExistencia();
        $form = $this->createForm('Minsal\CoreBundle\Form\CtlExistenciasType');
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {

        }

        return $this->render('ctlexistencias/new.html.twig', array(
            'form' => $form->createView(),
        ));
    }

    /**
     * Finds and displays a ctlExistencia entity.
     *
     */
    public function showAction(CtlExistencias $ctlExistencia)
    {
        $deleteForm = $this->createDeleteForm($ctlExistencia);

        return $this->render('ctlexistencias/show.html.twig', array(
            'ctlExistencia' => $ctlExistencia,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing ctlExistencia entity.
     *
     */
    public function editAction(Request $request, CtlExistencias $ctlExistencia)
    {
        $deleteForm = $this->createDeleteForm($ctlExistencia);
        $editForm = $this->createForm('Minsal\CoreBundle\Form\CtlExistenciasType', $ctlExistencia);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('existencias_edit', array('id' => $ctlExistencia->getId()));
        }

        return $this->render('ctlexistencias/edit.html.twig', array(
            'ctlExistencia' => $ctlExistencia,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a ctlExistencia entity.
     *
     */
    public function deleteAction(Request $request, CtlExistencias $ctlExistencia)
    {
        $form = $this->createDeleteForm($ctlExistencia);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($ctlExistencia);
            $em->flush();
        }

        return $this->redirectToRoute('existencias_index');
    }

    /**
     * Creates a form to delete a ctlExistencia entity.
     *
     * @param CtlExistencias $ctlExistencia The ctlExistencia entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(CtlExistencias $ctlExistencia)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('existencias_delete', array('id' => $ctlExistencia->getId())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }
}
