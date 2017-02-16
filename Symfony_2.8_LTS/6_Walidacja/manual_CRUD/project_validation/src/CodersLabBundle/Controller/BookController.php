<?php

namespace CodersLabBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

class BookController extends Controller
{
    /**
     * @Route("/createBook")
     */
    public function createBookAction()
    {
        return $this->render('CodersLabBundle:Book:create_book.html.twig', array(
            // ...
        ));
    }

    /**
     * @Route("/showBook")
     */
    public function showBookAction()
    {
        return $this->render('CodersLabBundle:Book:show_book.html.twig', array(
            // ...
        ));
    }

    /**
     * @Route("/showAllBooks")
     */
    public function showAllBooksAction()
    {
        return $this->render('CodersLabBundle:Book:show_all_books.html.twig', array(
            // ...
        ));
    }

    /**
     * @Route("/editBook")
     */
    public function editBookAction()
    {
        return $this->render('CodersLabBundle:Book:edit_book.html.twig', array(
            // ...
        ));
    }

    /**
     * @Route("/deleteBook")
     */
    public function deleteBookAction()
    {
        return $this->render('CodersLabBundle:Book:delete_book.html.twig', array(
            // ...
        ));
    }

}
