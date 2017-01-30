<?php

namespace CodersLabBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

use CodersLabBundle\Entity\Book;

class BookController extends Controller {
    
    /**
     * @Route("/newBook")
     */
    public function newBookAction() {
        return $this->render("CodersLabBundle:Book:new_book.html.twig");
    }
    
    /**
     * @Route("/createBook")
     * @Method("POST")
     */
    public function createBookAction(Request $req) {
        $em = $this->getDoctrine()->getManager();
        
        $bookTitle = $req->request->get('title');
        $bookDescription = $req->request->get('description');
        $bookRating = $req->request->get('rating');
        
        $newBook = new Book();
        $newBook->setTitle($bookTitle);
        $newBook->setDescription($bookDescription);
        $newBook->setRating($bookRating);
        
        $em->persist($newBook);
        $em->flush();
        
        return new Response("książka o id: " . $newBook->getId() . " została utworzona");
    }




    /* Stwórz akcję /createBook. Akcja ta ma pobierać informacje z POST-a i na jej podstawie 
     * tworzyć i zapamiętywać do bazy danych nową książkę. Na razie powinna wyświetlać 
     * statyczną informację o tym, że udało się stworzyć książkę (co zweryfikuj za pomocą 
     * PHPMyAdmin). */
}
