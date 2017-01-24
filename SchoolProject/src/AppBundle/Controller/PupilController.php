<?php

namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Symfony\Component\HttpFoundation\Request;
// odstep miedzy pakietami standardowymi a wlasnymi wskazany/zalecany
use AppBundle\Entity\Pupil;

class PupilController extends Controller {

    /**
     * @Route("/pupil/new")
     * @Method("GET")
     */
    public function newPupilAction() {
        return $this->render("AppBundle:Pupil:new.html.twig");
    }

    /**
     * @Route("/pupil/new")
     * @Method("POST")
     */
    public function createPupilAction(Request $req) {
        $em = $this->getDoctrine()->getManager();
          // var_dump($req);
        $name = $req->request->get("name");
        $age = $req->request->get("age");
        $description = $req->request->get("description");

        $newPupil = new Pupil();
        $newPupil->setAge($age);
        $newPupil->setDescription($description);
        $newPupil->setName($name);

        $em->persist($newPupil); //daje znac, ze istnieje
        $em->flush(); // dane leca zbiorczo, akurat tu jedna sztuka 

        //TODO: redirect do pokazania jednego ucznia (na todo jest wyszukiwanie :)))
        // no i todo zrobione ponizej...
        return $this->redirectToRoute("app_pupil_showpupil", ["id" => $newPupil->getId()]);
    }

    /**
     * @Route("/pupil/{id}", requirements={"id"="\d+"})
     * @Method("GET")
     */
    public function showPupilAction($id) {
        $repo = $this->getDoctrine()->getRepository('AppBundle:Pupil');
        $pupil = $repo->find($id);

        return $this->render("AppBundle:Pupil:show.html.twig", [
                    "pupil" => $pupil
        ]);
    }

    /**
     * @Route("/getpupilswithoutclass")
     */
    public function getPupilsWithoutclass() {
        $repo = $this->getDoctrine()->getRepository('AppBundle:Pupil');
        $pupilsWithoutClass = $repo->getAllPupilsWithoutClass();

        return $this->render("AppBundle:Pupil:list.html.twig", [
                    "pupils" => $pupilsWithoutClass
        ]);
    }

    /**
     * @Route("/getpupilswithbetween/{minAge}/{maxAge}")
     */
    public function getPupilsWithBetween($minAge, $maxAge) {
        $repo = $this->getDoctrine()->getRepository('AppBundle:Pupil');
        $allPupilsWithAgeBetween = $repo->getAllPupilsWithAgeBetween($minAge, $maxAge);

        return $this->render("AppBundle:Pupil:list.html.twig", [
                    "pupils" => $allPupilsWithAgeBetween
        ]);
    }

}
