<?php

namespace Minsal\CoreBundle\Controller;

use Minsal\CoreBundle\Entity\CtlComponente;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

/**
 * Ctlcomponente controller.
 *
 */
class CtlComponenteController extends Controller
{
    /**
     * Lists all ctlComponente entities.
     *
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $ctlComponentes = $em->getRepository('MinsalCoreBundle:CtlComponente')->findAll();

        return $this->render('ctlcomponente/index.html.twig', array(
            'ctlComponentes' => $ctlComponentes,
        ));
    }

    /**
     * Creates a new ctlComponente entity.
     *
     */
    public function newAction(Request $request)
    {
        $ctlComponente = new Ctlcomponente();
        $form = $this->createForm('Minsal\CoreBundle\Form\CtlComponenteType', $ctlComponente);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $user = $em->getRepository('MinsalCoreBundle:FosUser')->findOneById($this->getUser()->getId());
            $ctlComponente->setRegistroSchema(new \DateTime('now'));
            $ctlComponente->setUserSchema($user);
            $ctlComponente->setUserIpSchema($request->getClientIp());
            $em->persist($ctlComponente);
            $em->flush();
            $request->getSession()->getFlashBag()->add('success', 'Dependencia / Programa agregado');

            return $this->redirectToRoute('configuracion_programas_show', array('id' => $ctlComponente->getId()));
        }

        return $this->render('ctlcomponente/new.html.twig', array(
            'ctlComponente' => $ctlComponente,
            'form' => $form->createView(),
        ));
    }

    /**
     * Finds and displays a ctlComponente entity.
     *
     */
    public function showAction(CtlComponente $ctlComponente)
    {
        $deleteForm = $this->createDeleteForm($ctlComponente);

        return $this->render('ctlcomponente/show.html.twig', array(
            'ctlComponente' => $ctlComponente,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing ctlComponente entity.
     *
     */
    public function editAction(Request $request, CtlComponente $ctlComponente)
    {
        $deleteForm = $this->createDeleteForm($ctlComponente);
        $editForm = $this->createForm('Minsal\CoreBundle\Form\CtlComponenteType', $ctlComponente);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $user = $em->getRepository('MinsalCoreBundle:FosUser')->findOneById($this->getUser()->getId());
            $ctlComponente->setRegistroSchema(new \DateTime('now'));
            $ctlComponente->setUserSchema($user);
            $ctlComponente->setUserIpSchema($request->getClientIp());
            $this->getDoctrine()->getManager()->flush();
            $request->getSession()->getFlashBag()->add('success', 'Dependencia / Programa actualizado');

            return $this->redirectToRoute('configuracion_programas_index');
        }

        return $this->render('ctlcomponente/edit.html.twig', array(
            'ctlComponente' => $ctlComponente,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a ctlComponente entity.
     *
     */
    public function deleteAction(Request $request, CtlComponente $ctlComponente)
    {
        $form = $this->createDeleteForm($ctlComponente);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($ctlComponente);
            $em->flush();
        }

        return $this->redirectToRoute('configuracion_programas_index');
    }

    /**
     * Creates a form to delete a ctlComponente entity.
     *
     * @param CtlComponente $ctlComponente The ctlComponente entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(CtlComponente $ctlComponente)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('configuracion_programas_delete', array('id' => $ctlComponente->getId())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }
}
