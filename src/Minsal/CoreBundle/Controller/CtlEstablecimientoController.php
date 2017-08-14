<?php

namespace Minsal\CoreBundle\Controller;

use Minsal\CoreBundle\Entity\CtlEstablecimiento;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

use Symfony\Component\HttpFoundation\ResponseHeaderBag;
use Symfony\Component\HttpFoundation\BinaryFileResponse;
use Symfony\Component\Routing\Generator\UrlGeneratorInterface;
use Doctrine\ORM\Query\ResultSetMapping;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Security;

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

        $ctlEstablecimientos = $em->getRepository('MinsalCoreBundle:CtlTipoEstablecimiento')->findAll();

        return $this->render('ctlestablecimiento/index.html.twig', array(
            'ctlEstablecimientos' => $ctlEstablecimientos,
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
		$em = $this->getDoctrine()->getManager();
		$dql = "SELECT e.id, i.nombreLargoInsumo, g.nombreGrupo, gg.nombreGrupo AS detalleInsumo, s.nombreSuministro FROM  MinsalCoreBundle:CtlEstablecimiento e JOIN e.ctlInsumoid i JOIN i.grupoid gg JOIN gg.grupo g JOIN g.suministro s WHERE e.id = ".$ctlEstablecimiento->getId();
		$insumo = $em->createQuery( $dql )->getResult();
		$id = $ctlEstablecimiento->getId();
		//Para la parte publica
		$sql = "SELECT * from (
			SELECT i.nombre_largo_insumo, c.fecha_cuadro_basico, c.fecha_cuadro_basico AS fecha_inicio_cuadro_basico 
			FROM ctl_establecimiento e INNER JOIN cuadro_basico c ON e.id = c.ctl_establecimientoid INNER JOIN ctl_insumo i ON i.id = c.ctl_insumoid 
			WHERE e.id = $id
				UNION
			SELECT i.nombre_largo_insumo, c.fecha_cuadro_basico, c.fecha_inicio_cuadro_basico 
			FROM ctl_establecimiento e INNER JOIN historico_cuadro_basico c ON e.id = c.establecimiento_id INNER JOIN ctl_insumo i ON i.id = c.insumo_id 
			WHERE e.id = $id
			) AS t ORDER BY 2 DESC";
		$rsm = new ResultSetMapping;
		$rsm->addEntityResult('MinsalCoreBundle:CtlEstablecimiento', 'e');
		$rsm->addFieldResult('e','nombre_largo_insumo','nombre');
		$rsm->addFieldResult('e','fecha_cuadro_basico','direccion');
		$rsm->addFieldResult('e','fecha_inicio_cuadro_basico','telefono');
		$nq = $this->getDoctrine()->getManager()->createNativeQuery($sql, $rsm);

        return $this->render('ctlestablecimiento/show.html.twig', array(
            'nombre' => $ctlEstablecimiento->getNombre(),
            'actual' => $nq->getArrayResult(),
            'ctlEstablecimiento' => $insumo,
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

            return $this->redirectToRoute('configuracion_establecimientos_show', array('id' => $ctlEstablecimiento->getId()));
            //return $this->redirectToRoute('configuracion_establecimientos_edit', array('id' => $ctlEstablecimiento->getId()));
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

        if ($form->isSubmitted() ) {//&& $form->isValid()
			$id = $_POST["minsal_cuadro_basico"]["tipo"];
			$em = $this->getDoctrine()->getManager();
			foreach ($_POST["minsal_cuadro_basico"]["insumo"] as $selectedOption)
			{
				$em->getConnection()->exec( "select * from setCuadroBasico( $id, $selectedOption );" );
			}
			return $this->redirectToRoute('configuracion_establecimientos_index');
			$request->getSession()->getFlashBag()->add('success', 'Cuadro básico creado con exito para todos los establecimientos por tipo de establecimiento');
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
		}  elseif ($request->query->get('cuadro') != NULL && is_numeric($request->query->get('cuadro')) ){
			$result = $em->createQuery( "SELECT i.nombreLargoInsumo FROM MinsalCoreBundle:CtlInsumo i JOIN i.ctlEstablecimientoid e JOIN e.idTipoEstablecimiento t WHERE t.id = ".$request->query->get('cuadro')." GROUP BY i.nombreLargoInsumo ORDER BY i.nombreLargoInsumo " )->getResult();
			$result2 = $em->createQuery( "SELECT e FROM MinsalCoreBundle:CtlEstablecimiento e WHERE e.idTipoEstablecimiento = ".$request->query->get('cuadro')." ORDER BY e.idMunicipio, e.nombre " )->getResult();
        	return $this->render('ctlestablecimiento/ajax.html.twig', array( 'rest'=> FALSE, 'cuadro'=> $result, 'establecimiento'=> $result2));
		} else {
          return $this->render('ctlestablecimiento/ajax.html.twig', array( 'rest'=> FALSE ));
		}
    }
    
        
    public function delcuadroAction(Request $request)
    {
        if (! $request->isXmlHttpRequest()) {
            throw new NotFoundHttpException();
        }
        if ($request->query->get('cuadro') != NULL && is_numeric($request->query->get('cuadro')) ){
			$id = $request->query->get('cuadro');
			$em = $this->getDoctrine()->getManager();
			$em->getConnection()->exec( "select * from delcuadrobasico( $id );" );
	        return new Response( '<div class="col-md-12 col-sm-12 col-xs-12">
          <div class="info-box">
           <span class="info-box-icon bg-red"><i class="fa fa-star-o"></i></span>
            <div class="info-box-content">
              <span class="info-box-text">Cuadro basico para el tipo de establecimiento ha sido eliminado. </span>
            </div>
			</div>
			</div>' );
		}
		else{
			return new Response( 'Error en los datos enviados !!!' );
		}
    }
    
}
