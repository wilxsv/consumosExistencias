<?php

namespace Minsal\CoreBundle\Controller;

use Minsal\CoreBundle\Entity\CtlEstablecimiento;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

/**
 * Ctlestablecimiento controller.
 *
 */
class CtlEstablecimientoController extends Controller
{
    /**
     * Lists all ctlEstablecimiento entities.
     *
     */
    public function indexAction(Request $request)
    {
        $em = $this->getDoctrine()->getManager();
        $form = $this->createForm('Minsal\CoreBundle\Form\CuadroType');
        $form->handleRequest($request);

        $ctlEstablecimientos = $em->getRepository('MinsalCoreBundle:CtlTipoEstablecimiento')->findAll();

        return $this->render('ctlestablecimiento/index.html.twig', array(
            'ctlEstablecimientos' => $ctlEstablecimientos,
            'form' => $form->createView(),
        ));
    }

    /**
     * Creates a new ctlEstablecimiento entity.
     *
     */
    public function newAction(Request $request)
    {
        $ctlEstablecimiento = new Ctlestablecimiento();
        $form = $this->createForm('Minsal\CoreBundle\Form\CtlEstablecimientoType', $ctlEstablecimiento);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($ctlEstablecimiento);
            $em->flush();

            return $this->redirectToRoute('configuracion_establecimientos_show', array('id' => $ctlEstablecimiento->getId()));
        }

        return $this->render('ctlestablecimiento/new.html.twig', array(
            'ctlEstablecimiento' => $ctlEstablecimiento,
            'form' => $form->createView(),
        ));
    }

    /**
     * Finds and displays a ctlEstablecimiento entity.
     *
     */
    public function showAction(CtlEstablecimiento $ctlEstablecimiento)
    {

        return $this->render('ctlestablecimiento/show.html.twig', array(
            'ctlEstablecimiento' => $ctlEstablecimiento,
        ));
    }

    /**
     * Displays a form to edit an existing ctlEstablecimiento entity.
     *
     */
    public function editAction(Request $request, CtlEstablecimiento $ctlEstablecimiento)
    {
        $editForm = $this->createForm('Minsal\CoreBundle\Form\CtlEstablecimientoType', $ctlEstablecimiento);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('configuracion_establecimientos_edit', array('id' => $ctlEstablecimiento->getId()));
        }

        return $this->render('ctlestablecimiento/edit.html.twig', array(
            'ctlEstablecimiento' => $ctlEstablecimiento,
            'edit_form' => $editForm->createView(),
        ));
    }

    /**
     * Deletes a ctlEstablecimiento entity.
     *
     */
    public function deleteAction(Request $request, CtlEstablecimiento $ctlEstablecimiento)
    {
        $form = $this->createDeleteForm($ctlEstablecimiento);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($ctlEstablecimiento);
            $em->flush();
        }

        return $this->redirectToRoute('configuracion_establecimientos_index');
    }

    /**
     * Creates a form to delete a ctlEstablecimiento entity.
     *
     * @param CtlEstablecimiento $ctlEstablecimiento The ctlEstablecimiento entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(CtlEstablecimiento $ctlEstablecimiento)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('configuracion_establecimientos_delete', array('id' => $ctlEstablecimiento->getId())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }
    
    
    public function programaAction()
    {
        $em = $this->getDoctrine()->getManager();

        $ctlEstablecimientos = $em->getRepository('MinsalCoreBundle:CtlEstablecimiento')->findAll();

        return $this->render('ctlestablecimiento/index.html.twig', array(
            'ctlEstablecimientos' => $ctlEstablecimientos,
        ));
    }    
    
    public function cuadroAction(Request $request)
    {
        $form = $this->createForm('Minsal\CoreBundle\Form\CuadroType');
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
			$id = $_POST["minsal_cuadro_basico"]["tipo"];
			$em = $this->getDoctrine()->getManager();
			foreach ($_POST["minsal_cuadro_basico"]["insumo"] as $selectedOption)
			{
				$em->getConnection()->exec( "select * from setCuadroBasico( $id, $selectedOption );" );
			}
			return $this->redirectToRoute('configuracion_establecimientos_index');
        }

        return $this->render('ctlestablecimiento/new.html.twig', array(
            'form' => $form->createView(),
        ));
    }
    
     public function ajaxAction(Request $request) 
    {
        if (! $request->isXmlHttpRequest()) {
            throw new NotFoundHttpException();
        }
        $em = $this->getDoctrine()->getEntityManager();
        if ($request->query->get('suministro') != NULL && is_numeric($request->query->get('suministro')) ){
			$result = $em->createQuery( "SELECT g.id, g.nombreGrupo FROM MinsalCoreBundle:CtlGrupo g WHERE g.suministro = ".$request->query->get('suministro')." ORDER BY g.nombreGrupo" )->getResult();
        	return $this->render('ctlestablecimiento/ajax.html.twig', array( 'rest'=> TRUE, 'suministro'=> $result));
		
        } elseif ($request->query->get('grupo') != NULL && is_numeric($request->query->get('grupo')) ){
			$result = $em->createQuery( "SELECT g.id, g.nombreGrupo FROM MinsalCoreBundle:CtlGrupo g WHERE g.grupo = ".$request->query->get('grupo')." ORDER BY g.nombreGrupo" )->getResult();
        	return $this->render('ctlestablecimiento/ajax.html.twig', array( 'rest'=> TRUE, 'grupo'=> $result));
		}  elseif ($request->query->get('subgrupo') != NULL && is_numeric($request->query->get('subgrupo')) ){
			$result = $em->createQuery( "SELECT g.id, g.nombreLargoInsumo FROM MinsalCoreBundle:CtlInsumo g WHERE g.grupoid = ".$request->query->get('subgrupo')." ORDER BY g.nombreLargoInsumo" )->getResult();
        	return $this->render('ctlestablecimiento/ajax.html.twig', array( 'rest'=> TRUE, 'insumo'=> $result));
		} else {
          return $this->render('ctlestablecimiento/ajax.html.twig', array( 'rest'=> FALSE ));
		}
    }
}
