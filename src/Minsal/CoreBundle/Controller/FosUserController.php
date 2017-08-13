<?php

namespace Minsal\CoreBundle\Controller;

use Minsal\CoreBundle\Entity\FosUser;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

use Minsal\CoreBundle\Entity\CtlEstablecimiento;
use Symfony\Component\Routing\Generator\UrlGeneratorInterface;


use FOS\UserBundle\Event\FilterUserResponseEvent;
use FOS\UserBundle\Event\FormEvent;
use FOS\UserBundle\Event\GetResponseUserEvent;
use FOS\UserBundle\Form\Factory\FactoryInterface;
use FOS\UserBundle\FOSUserEvents;
use FOS\UserBundle\Model\UserInterface;
use FOS\UserBundle\Model\UserManagerInterface;
use Symfony\Component\EventDispatcher\EventDispatcherInterface;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;
use Symfony\Component\Security\Core\Exception\AccessDeniedException;
use Symfony\Component\Security\Core\Role\RoleInterface;
/**
 * Fosuser controller.
 *
 */
class FosUserController extends Controller
{
    /**
     * Lists all fosUser entities.
     *
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $fosUsers = $em->getRepository('MinsalCoreBundle:FosUser')->findAll();

        return $this->render('fosuser/index.html.twig', array(
            'fosUsers' => $fosUsers,
        ));
    }

    /**
     * Creates a new fosUser entity.
     *
     */
    public function newAction(Request $request)
    {
        $fosUser = new Fosuser();
        $form = $this->createForm('Minsal\CoreBundle\Form\FosUserType', $fosUser);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $last_line = system('cd .. && php app/console fos:user:create '.$form->get('username')->getData().' '.$form->get('email')->getData().' '.$form->get('password')->getData() , $retval);
            if (!$retval){
				$request->getSession()->getFlashBag()->add('success', 'Usuario creado');
				$em = $this->getDoctrine()->getManager();
				$user = $em->getRepository('MinsalCoreBundle:FosUser')->findOneByUsername($form->get('username')->getData());
				if (!$user) {
					throw $this->createNotFoundException( 'Usuario no creado ' );
				}
				$user->setEstablecimiento( $form->get('establecimiento')->getData() );
				$user->setFullname( $form->get('fullname')->getData() );
				$rol = $em->getRepository('MinsalCoreBundle:CtlRol')->find($form->get('roles')->getData());
				if (!$rol) {
					throw $this->createNotFoundException( 'Usuario no creado ' );
				}
				$last_line = system('cd .. && php app/console fos:user:promote '.$form->get('username')->getData().' '.$rol->getNombreRol() , $retval);
				$em->flush();
				$request->getSession()->getFlashBag()->add('success', 'Rol agregado');
				return $this->redirectToRoute('admin_personas_show', array('id' => $user->getId() ) );
			}
        }

        return $this->render('fosuser/new.html.twig', array(
            'fosUser' => $fosUser,
            'form' => $form->createView(),
        ));
    }

    /**
     * Finds and displays a fosUser entity.
     *
     */
    public function showAction(FosUser $fosUser)
    {
        $deleteForm = $this->createDeleteForm($fosUser);

        return $this->render('fosuser/show.html.twig', array(
            'fosUser' => $fosUser,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing fosUser entity.
     *
     */
    public function editAction(Request $request, FosUser $fosUser)
    {
        $deleteForm = $this->createDeleteForm($fosUser);
        $editForm = $this->createForm('Minsal\CoreBundle\Form\FosUserType', $fosUser);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $em = $this->getDoctrine()->getManager();
			$user = $em->getRepository('MinsalCoreBundle:FosUser')->findOneById($fosUser->getId() );
			if (!$user) {
				throw $this->createNotFoundException( 'Usuario no creado ' );
			}
			$user->setEstablecimiento( $editForm->get('establecimiento')->getData() );
			$user->setFullname( $editForm->get('fullname')->getData() );
			$em->flush();
				
            
            $request->getSession()->getFlashBag()->add('success', 'Perfil actualizado');

            return $this->redirectToRoute('admin_personas_edit', array('id' => $fosUser->getId()));
        }

        return $this->render('fosuser/edit.html.twig', array(
            'fosUser' => $fosUser,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a fosUser entity.
     *
     */
    public function deleteAction(Request $request, FosUser $fosUser)
    {
        $form = $this->createDeleteForm($fosUser);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($fosUser);
            $em->flush();
        }

        return $this->redirectToRoute('admin_personas_index');
    }

    /**
     * Creates a form to delete a fosUser entity.
     *
     * @param FosUser $fosUser The fosUser entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(FosUser $fosUser)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('admin_personas_delete', array('id' => $fosUser->getId())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }
}
