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
        $authorsRepo = $this->getDoctrine()->getRepository('CodersLabBundle:Author');
        $allAuthors = $authorsRepo->findAll();
        
        return $this->render("CodersLabBundle:Book:new_book.html.twig", [
            "authors" => $allAuthors
        ]);
    }

    /**
     * @Route("/createBook")
     * @Method("POST")
     */
    public function createBookAction(Request $req) {
        $em = $this->getDoctrine()->getManager();

        $bookTitle = $req->request->get('title', 'domyślny tytuł książki');
        $bookDescription = $req->request->get('description', 'domyślny opis książki');
        $bookRating = (double)$req->request->get('rating', 0.00);
        
        $authorRepo = $this->getDoctrine()->getRepository("CodersLabBundle:Author");
        $bookAuthor = $authorRepo->find($req->request->get("authorId"));

        $newBook = new Book();
        $newBook->setTitle($bookTitle);
        $newBook->setDescription($bookDescription);
        $newBook->setRating($bookRating);
        $newBook->setAuthor($bookAuthor);

        $em->persist($newBook);
        $em->flush();

        return $this->render("CodersLabBundle:Book:show_book.html.twig", [
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

    /**
     * @Route("/showAllBooks")
     */
    public function showAllBooksAction() {
        $bookRepo = $this->getDoctrine()->getRepository("CodersLabBundle:Book");
        $books = $bookRepo->findAll();

        return $this->render("CodersLabBundle:Book:show_all_books.html.twig", [
                    "books" => $books
        ]);
    }

    /**
     * @Route("/deleteBook/{id}")
     */
    public function deleteBookAction($id) {
        $em = $this->getDoctrine()->getManager();
        $bookRepo = $this->getDoctrine()->getRepository("CodersLabBundle:Book");
        $book = $bookRepo->find($id);

        if (!$book) {
            return new Response("Wprowadziłeś błędne ID");
        }
        $em->remove($book);
        $em->flush();

        return new Response("Książka usunięta");
    }
    
    /**
     * @Route("/showBooksWhereIdIsBigger/{id}")
     */
    public function showBooksWhereIdIsBiggerAction($id) {
        $bookRepo = $this->getDoctrine()->getRepository("CodersLabBundle:Book");
        $books = $bookRepo->showBooksWhereIdIsBigger($id);
        
        return $this->render("CodersLabBundle:Book:show_all_books.html.twig", [
            "books" => $books
        ]);
    }
    
    /**
     * @Route("/showBooksWhereRatingIsBigger/{rating}")
     */
    public function showBooksWhereRatingIsBiggerAction($rating) {
        $bookRepo = $this->getDoctrine()->getRepository("CodersLabBundle:Book");
        $books = $bookRepo->showBooksWhereRatingIsBigger($rating);
        
        return $this->render("CodersLabBundle:Book:show_all_books.html.twig", [
            "books" => $books
        ]);        
    }
    
    /**
     * @Route("/showBooksWhereTitleContains/{string}")
     */
    public function showBooksWhereTitleContainsAction($string) {
        $bookRepo = $this->getDoctrine()->getRepository("CodersLabBundle:Book");
        $books = $bookRepo->showBooksWhereTitleContains($string);
        
        return $this->render("CodersLabBundle:Book:show_all_books.html.twig", [
            "books" => $books
        ]);  
    }
    


}
