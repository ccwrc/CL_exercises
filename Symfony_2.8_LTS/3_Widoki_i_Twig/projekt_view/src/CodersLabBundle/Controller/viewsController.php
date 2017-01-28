<?php

namespace CodersLabBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

class viewsController extends Controller {
    
    /**
     * @Route("/render")
     */
    public function renderAction() {
        return $this->render("CodersLabBundle:view:view_ex_a3.html.twig");
    }
    
    /**
     * @Route("/render/{username}")
     */
    public function renderUsernameAction($username) {
        return $this->render("CodersLabBundle:view:view_ex_b1.html.twig", [
            "username" => $username
        ]);
    }


    /* Stwórz nową akcję przypisaną do adresu /render/{username}. Podepnij do niej widok 
     * view_ex_b1.html.twig (który możesz znaleźć w katalogu z zadaniami). 
     * Widok ten przyjmuje jedną zmienną o nazwie username. Przekaż ją. */
}
