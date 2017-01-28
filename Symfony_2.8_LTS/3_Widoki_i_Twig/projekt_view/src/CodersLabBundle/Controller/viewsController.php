<?php

namespace CodersLabBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;

class viewsController extends Controller {
    
    /**
     * @Template("CodersLabBundle:view:view_ex_a3.html.twig")
     * @Route("/render")
     */
    public function renderAction() {
        // return $this->render("CodersLabBundle:view:view_ex_a3.html.twig");
        return [];
    }
    
    /**
     * @Template("CodersLabBundle:view:view_ex_b1.html.twig")
     * @Route("/render/{username}")
     */
    public function renderUsernameAction($username) {
//        return $this->render("CodersLabBundle:view:view_ex_b1.html.twig", [
//            "username" => $username
//        ]);
        return ["username" => $username];
    }
    
    /**
     * @Route("/repeatSentence/{n}")
     */
    public function repeatSentenceAction($n) {
        return $this->render("CodersLabBundle:view:repeat.html.twig", [
            "n" => $n, "sentence" => "zdanie przekazane z kontrolera jeden raz"]);
    }


    /* Stwórz akcję podpiętą do adresu /repeatSentence/{n}. Do akcji dopisz widok, 
     * który powtórzy n razy zdanie „Symfony jest fajne” . Pętle wykonaj w szablonie, 
     * przekaż do niego liczbę powtórzeń.

Zmodyfikuj swoje rozwiązanie w taki sposób, żeby zdanie, które wyświetlasz, 
     * było przekazane z kontrolera. Dopiero w chwili, w której zdanie nie jest 
     * przekazane, ma się wyświetlić napis „Symfony jest fajne”. */
}
