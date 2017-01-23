<?php

namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\JsonResponse;

use AppBundle\Entity\Classroom;

class ClassroomController extends Controller {
    
    /**
     * @Route("/")
     */
    public function testAction() { // testowe wejscie na glowna
        return $this->render("::base.html.twig");
    }

    /**
     * @Route("/class/new")
     * @Method("GET")
     */
    public function newClassroomAction() {
        return $this->render("AppBundle:Classroom:new.html.twig");
    }

    /**
     * @Route("/class/new")
     * @Method("POST")
     */
    public function createNewClassroomAction(Request $req) {
        // em - menadzer encji pobierany z doktrynki
        $em = $this->getDoctrine()->getManager();

        $className = $req->request->get("className");

        $newClassroom = new Classroom();
        $newClassroom->setName($className);

        $em->persist($newClassroom); //powiadomienie, ze juz jest
        $em->flush(); //MiB2 zatwierdzenie i zapis wszystkich danych

        // $postData = $req->request->all();
        // var_dump($postData);
        // return new Response("nowa klasa o id {$newClassroom->getId()} zostala utworzona");
        // return new JsonResponse($newClassroom);
        //return $this->render("AppBundle:Classroom:show.html.twig", [
        //   "class" => $newClassroom
        // ]);

        return $this->redirectToRoute("app_classroom_getoneclass", [
                    "id" => $newClassroom->getId()
        ]);
    }

    /**
     * @Route("/class")
     * @Method("GET")
     */
    public function showAllClassesAction() {
        $classroomRepo = $this->getDoctrine()->getRepository('AppBundle:Classroom');
        $allClassess = $classroomRepo->findAll();
        // return new JsonResponse($allClassess);
        return $this->render("AppBundle:Classroom:list.html.twig", [
                    "allClasses" => $allClassess
        ]);
    }

    /**
     * @Route("/class/{id}", requirements={"id"="\d+"})
     * @Method("GET")
     */
    public function getOneClassAction($id) {
        $classroomRepo = $this->getDoctrine()->getRepository('AppBundle:Classroom');
        $class = $classroomRepo->find($id);
        //return new JsonResponse($class);
        return $this->render("AppBundle:Classroom:show.html.twig", ["class" => $class]);
    }

    /**
     * @Route("/class/delete/{id}", requirements={"id"="\d+"})
     */
    public function deleteClassroomAction($id) {
        // public function deleteClassroomAction(Classroom $class)
        $classroomRepo = $this->getDoctrine()->getRepository("AppBundle:Classroom");
        $em = $this->getDoctrine()->getManager();

        $classroom = $classroomRepo->find($id);
        if ($classroom != null) {
            $em->remove($classroom);
            $em->flush();
        }
        // return new JsonResponse(true);
        return $this->redirectToRoute("app_classroom_showallclasses");
    }

    /**
     * @Route("/class/modify/{id}", requirements={"id"="\d+"})
     * @Method("GET")
     */
    public function modifyClassroomAction(Request $req, $id) {
        $repo = $this->getDoctrine()->getRepository("AppBundle:Classroom");
        $classToModify = $repo->find($id);

        return $this->render("AppBundle:Classroom:edit.html.twig", ["classroom" => $classToModify]);
    }

    /**
     * @Route("/class/modify/{id}", requirements={"id"="\d+"})
     * @Method("POST")
     */
    public function changeClassroomAction(Request $req, $id) {
        $repo = $this->getDoctrine()->getRepository("AppBundle:Classroom");
        $em = $this->getDoctrine()->getManager();

        $newName = $req->request->get("className");

        $classToModify = $repo->find($id);
        if ($classToModify != null) {
            $classToModify->setName($newName);
            $em->flush();
        }

        return $this->redirectToRoute("app_classroom_getoneclass", [
                    "id" => $classToModify->getId()
        ]);
    }

    /**
     * @Route("/class/{id}/addPupil", requirements={"id"="\d+"})
     * @Method("GET")
     */
    public function prepareAddPupilAction($id) {
        // $em = $this->getDoctrine()->getManager();

        $classRepo = $this->getDoctrine()->getRepository("AppBundle:Classroom");
        $pupilRepo = $this->getDoctrine()->getRepository("AppBundle:Pupil");

        $classroom = $classRepo->find($id);
        $allPupils = $pupilRepo->findAll();

        return $this->render("AppBundle:Classroom:add_pupil.html.twig", [
                    "class" => $classroom,
                    "pupils" => $allPupils]);
    }

    /**
     * @Route("/class/{classId}/addPupil", requirements={"id"="\d+"})
     * @Method("POST")
     */
    public function addPupilToClassAction(Request $req, $classId) {
        $em = $this->getDoctrine()->getManager();

        $classRepo = $this->getDoctrine()->getRepository("AppBundle:Classroom");
        $pupilRepo = $this->getDoctrine()->getRepository("AppBundle:Pupil");

        $classroom = $classRepo->find($classId);

        $pupilsId = $req->request->get("pupilsId");
        foreach ($pupilsId as $pupilId) {
            $pupil = $pupilRepo->find($pupilId);
            $pupil->setClassroom($classroom);
            $classroom->addPupil($pupil);
        }
        $em->flush();


        return $this->redirectToRoute("app_classroom_getoneclass", [
                    "id" => $classroom->getId()
        ]);
    }

    /**
     * @Route("/class/{id}")
     * @Method("POST")
     *
      public function modifyClassAction(Request $req, $id) {
      $classroomRepo = $this->getDoctrine()->getRepository("AppBundle:Classroom");
      $em = $this->getDoctrine()->getManager();

      $class = $classroomRepo->find($id);
      if($class != null) {
      $class->setName( $req->request->get("name") );
      $em->flush();
      }

      return new JsonResponse($class);
      }

      /**
     * @Route("/class/{id}")
     * @Method("DELETE")
     *
      public function deleteClassroomAction($id) {
      // public function deleteClassroomAction(Classroom $class)
      $classroomRepo = $this->getDoctrine()->getRepository("AppBundle:Classroom");
      $em = $this->getDoctrine()->getManager();

      $classroom = $classroomRepo->find($id);
      if($classroom != null) {
      $em->remove($classroom);
      $em->flush();
      }
      return new JsonResponse(true);
      }
     */
}
