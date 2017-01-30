<?php

namespace CodersLabBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

class BookController extends Controller {
    
    /**
     * @Route("/newBook")
     */
    public function newBookAction() {
        return $this->render("CodersLabBundle:Book:new_book.html.twig");
    }
    
    
    /* Stwórz akcję /newBook, która ma wyświetlać formularz do tworzenia nowej książki. 
     * Formularz – póki co – napisz w normalnym HTML. Formularz ma kierować do akcji 
     * /createBook. */
}
