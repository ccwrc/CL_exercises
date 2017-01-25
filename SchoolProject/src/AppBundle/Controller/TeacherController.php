<?php

namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

use AppBundle\Entity\Teacher;

/**
 * @Route("/teacher")
 */
class TeacherController extends Controller {

    /**
     * @Route("/new")
     */
    public function newAction() {
        return $this->render('AppBundle:Teacher:new.html.twig');
    }

    /**
     * @Route("/create")
     * @Method("POST")
     */
    public function createAction(Request $req) {
        $em = $this->getDoctrine()->getManager();

        $newTeacher = new Teacher();
        $newTeacher->setName($req->request->get("name", "")); //domyslnie name puste
        // ponizej zrzutuj na float i dosw. domyslnie 0 lat
        $newTeacher->setExperience((float) $req->request->get("experience", 0));

        $em->persist($newTeacher);
        $em->flush();

        return $this->redirectToRoute("app_teacher_show", [
                    "id" => $newTeacher->getId()
        ]);
    }

    /**
     * @Route("/show/{id}", requirements={"id"="\d+"})
     */
    public function showAction($id) {
        $repo = $this->getDoctrine()->getRepository('AppBundle:Teacher');
        $teacher = $repo->find($id);

        return $this->render('AppBundle:Teacher:show.html.twig', array(
                    "teacher" => $teacher
        )); //powysza tablica tez dziala ok
    }

    /**
     * @Route("/addPupil")
     * @Method("GET")
     */
    public function addPupilAction() {
        $pupilRepo = $this->getDoctrine()->getRepository('AppBundle:Pupil');
        $teacherRepo = $this->getDoctrine()->getRepository('AppBundle:Teacher');

        $allPupils = $pupilRepo->findAll();
        $allTeachers = $teacherRepo->findAll();

        return $this->render('AppBundle:Teacher:add_pupil.html.twig', array(
                    "pupils" => $allPupils,
                    "teachers" => $allTeachers
        ));
    }

    /**
     * @Route("/addPupil")
     * @Method("POST")
     */
    public function relationTeacherPupilAction(request $req) {
        $teacherRepo = $this->getDoctrine()->getRepository('AppBundle:Teacher');
        $pupilRepo = $this->getDoctrine()->getRepository('AppBundle:Pupil');

        $em = $this->getDoctrine()->getManager();
         //ponizej find by id - find($id)
        $teacher = $teacherRepo->find($req->request->get("teacher_id"));
        $pupil = $pupilRepo->find($req->request->get("pupil_id"));

        $teacher->addPupil($pupil);
        $pupil->addTeacher($teacher);

        $em->flush();

        return $this->redirectToRoute("app_teacher_show", [
                    "id" => $teacher->getId()
        ]);
    }

}
