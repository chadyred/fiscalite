<?php

namespace Fiscalite\GestionFiscaliteBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Fiscalite\GestionFiscaliteBundle\Entity\TypeRue;
use Fiscalite\GestionFiscaliteBundle\Form\TypeRueType;

/**
 * TypeRue controller.
 *
 */
class TypeRueController extends Controller {

    /**
     * Lists all TypeRue entities.
     *
     */
    public function indexAction() {
        $em = $this->getDoctrine()->getManager();

        $entities = $em->getRepository('FiscaliteGestionFiscaliteBundle:TypeRue')->findAllGroupByOrderBy(); //GroupByOrderBy
//        foreach ($entities as $entity) {
//            $entities2 = $em->getRepository('FiscaliteGestionFiscaliteBundle:TypeRue')->findBy(array('libelle' => $entity->getLibelle()));
//            foreach ($entities2 as $entity2) {
//                $entity2->setLatitude($entity->getLatitude());
//                $entity2->setLongitude($entity->getLongitude());
//                $em->flush();
//            }
//        }

        return $this->render('FiscaliteGestionFiscaliteBundle:TypeRue:index.html.twig', array(
                    'entities' => $entities,
        ));
    }

    /**
     * Creates a new TypeRue entity.
     *
     */
    public function createAction(Request $request) {
        $entity = new TypeRue();
        $form = $this->createCreateForm($entity);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('typerue_show', array('id' => $entity->getId())));
        }

        return $this->render('FiscaliteGestionFiscaliteBundle:TypeRue:new.html.twig', array(
                    'entity' => $entity,
                    'form' => $form->createView(),
        ));
    }

    /**
     * Creates a form to create a TypeRue entity.
     *
     * @param TypeRue $entity The entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createCreateForm(TypeRue $entity) {
        $form = $this->createForm(new TypeRueType(), $entity, array(
            'action' => $this->generateUrl('typerue_create'),
            'method' => 'POST',
        ));

        $form->add('submit', 'submit', array('label' => 'Create'));

        return $form;
    }

    /**
     * Displays a form to create a new TypeRue entity.
     *
     */
    public function newAction() {
        $entity = new TypeRue();
        $form = $this->createCreateForm($entity);

        return $this->render('FiscaliteGestionFiscaliteBundle:TypeRue:new.html.twig', array(
                    'entity' => $entity,
                    'form' => $form->createView(),
        ));
    }

    /**
     * Finds and displays a TypeRue entity.
     *
     */
    public function showAction($id) {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('FiscaliteGestionFiscaliteBundle:TypeRue')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find TypeRue entity.');
        }

        $deleteForm = $this->createDeleteForm($id);

        return $this->render('FiscaliteGestionFiscaliteBundle:TypeRue:show.html.twig', array(
                    'entity' => $entity,
                    'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing TypeRue entity.
     *
     */
    public function editAction($id) {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('FiscaliteGestionFiscaliteBundle:TypeRue')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find TypeRue entity.');
        }

        $editForm = $this->createEditForm($entity);
        $deleteForm = $this->createDeleteForm($id);

        return $this->render('FiscaliteGestionFiscaliteBundle:TypeRue:edit.html.twig', array(
                    'entity' => $entity,
                    'edit_form' => $editForm->createView(),
                    'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Creates a form to edit a TypeRue entity.
     *
     * @param TypeRue $entity The entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createEditForm(TypeRue $entity) {
        $form = $this->createForm(new TypeRueType(), $entity, array(
            'action' => $this->generateUrl('typerue_update', array('id' => $entity->getId())),
            'method' => 'PUT',
        ));

        $form->add('submit', 'submit', array('label' => 'Update'));

        return $form;
    }

    /**
     * Edits an existing TypeRue entity.
     *
     */
    public function updateAction(Request $request, $id) {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('FiscaliteGestionFiscaliteBundle:TypeRue')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find TypeRue entity.');
        }

        $deleteForm = $this->createDeleteForm($id);
        $editForm = $this->createEditForm($entity);
        $editForm->handleRequest($request);

        if ($editForm->isValid()) {
            $em->flush();

            return $this->redirect($this->generateUrl('typerue_edit', array('id' => $id)));
        }

        return $this->render('FiscaliteGestionFiscaliteBundle:TypeRue:edit.html.twig', array(
                    'entity' => $entity,
                    'edit_form' => $editForm->createView(),
                    'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a TypeRue entity.
     *
     */
    public function deleteAction(Request $request, $id) {
        $form = $this->createDeleteForm($id);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $entity = $em->getRepository('FiscaliteGestionFiscaliteBundle:TypeRue')->find($id);

            if (!$entity) {
                throw $this->createNotFoundException('Unable to find TypeRue entity.');
            }

            $em->remove($entity);
            $em->flush();
        }

        return $this->redirect($this->generateUrl('typerue'));
    }

    /**
     * Creates a form to delete a TypeRue entity by id.
     *
     * @param mixed $id The entity id
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm($id) {
        return $this->createFormBuilder()
                        ->setAction($this->generateUrl('typerue_delete', array('id' => $id)))
                        ->setMethod('DELETE')
                        ->add('submit', 'submit', array('label' => 'Delete'))
                        ->getForm()
        ;
    }

    /**
     * Deletes a Mail entity.
     *
     */
    public function majtyperuejsonAction() {
        $session = $this->getRequest()->getSession();
        $request = $this->getRequest();
        $id = $request->request->get('id');
        $lat = $request->request->get('lat');
        $lng = $request->request->get('lng');
        $em = $this->getDoctrine()->getManager();
        $entity = $em->getRepository('FiscaliteGestionFiscaliteBundle:TypeRue')->findOneBy(array('id' => $id));
        if ($entity) {
            $entity->setLatitude($lat);
            $entity->setLongitude($lng);
            $em->flush();
            $session->getFlashBag()->add('success', $entity->getLibelle() . 'a été mise à jour');
        }
        return new JsonResponse(array('data' => 'mise à jour'));
    }

}
