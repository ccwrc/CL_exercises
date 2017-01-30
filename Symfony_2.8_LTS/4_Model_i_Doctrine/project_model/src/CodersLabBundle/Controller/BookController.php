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
        // return new Response("książka o id: " . $newBook->getId() . " została utworzona");
        return $this->render("CodersLabBundle:Book:show_book.html.twig", [
            "id" => $newBook->getId(),
            "book" => $newBook
        ]);
    }
    
    /**
     * @Route("/showBook/{id}")
     */
    public function showBookAction($id) {
        $bookRepo = $this->getDoctrine()->getRepository("CodersLabBundle:Book");
        $book = $bookRepo->find($id);
        
        return $this->render("CodersLabBundle:Book:show_book.html.twig", [
            "book" => $book
        ]);
    }




    /* Stwórz akcję /showBook/{id}, która ma pobierać książkę o podanym id z bazy danych i 
     * wyświetlać jej informację na stronie. Zmodyfikuj akcję /createBook tak żeby 
     * po stworzeniu nowej książki przekierowywała do akcji /showBook 
     * dla nowo dodanej książki. */
}
