<?php

namespace CodersLabBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;

use CodersLabBundle\Entity\Book;

class BookController extends Controller {

    /**
     * @Route("/createBook")
     */
    public function createBookAction(Request $req) {
        $book = new Book();
        $form = $this->createFormBuilder($book)
                ->setMethod("POST")
                ->add("title", "text")
                ->add("rating", "number")
                ->add("description", "text")
                ->add("pages", "number")
                ->add("author", EntityType::class, [
                    "class" => "CodersLabBundle:Author", "choice_label" => "name"
                ])
                ->add("save", "submit")
                ->getForm();

        $form->handleRequest($req);
        if ($form->isSubmitted() && $form->isValid()) {
            $book = $form->getData();
            $em = $this->getDoctrine()->getManager();
            $em->persist($book);
            $em->flush();
            return $this->redirectToRoute("coderslab_book_showallbooks");
        }

        return $this->render('CodersLabBundle:Book:create_book.html.twig', array(
                    "form" => $form->createView()
        ));
    }

    /**
     * @Route("/showBook/{id}")
     */
    public function showBookAction($id) {
        $book = $this->getDoctrine()->getRepository("CodersLabBundle:Book")->find($id);
        if ($book == null) {
            throw $this->createNotFoundException("brak id w bazie");
        }

        return $this->render('CodersLabBundle:Book:show_book.html.twig', array(
                    "book" => $book
        ));
    }

    /**
     * @Route("/showAllBooks")
     */
    public function showAllBooksAction() {
        $books = $this->getDoctrine()->getRepository("CodersLabBundle:Book")->findAll();

        return $this->render('CodersLabBundle:Book:show_all_books.html.twig', array(
                    "books" => $books
        ));
    }

    /**
     * @Route("/editBook/{id}")
     */
    public function editBookAction(Request $req, $id) {
        $book = $this->getDoctrine()->getRepository("CodersLabBundle:Book")->find($id);
        $form = $this->createFormBuilder($book)
                ->setMethod("POST")
                ->add("title", "text")
                ->add("rating", "number")
                ->add("description", "text")
                ->add("pages", "number")
                ->add("author", EntityType::class, [
                    "class" => "CodersLabBundle:Author", "choice_label" => "name"
                ])
                ->add("save", "submit")
                ->getForm();

        $form->handleRequest($req);
        if ($form->isSubmitted() && $form->isValid()) {
            $book = $form->getData();
            $em = $this->getDoctrine()->getManager();
            $em->flush();
            return $this->redirectToRoute("coderslab_book_showallbooks");
        }

        return $this->render('CodersLabBundle:Book:edit_book.html.twig', array(
                    "form" => $form->createView()
        ));
    }

    /**
     * @Route("/deleteBook/{id}")
     */
    public function deleteBookAction($id) {
        $book = $this->getDoctrine()->getRepository("CodersLabBundle:Book")->find($id);
        if ($book == null) {
            throw $this->createNotFoundException("brak id w bazie");
        }
        $em = $this->getDoctrine()->getManager();
        $em->remove($book);
        $em->flush();

        return $this->redirectToRoute("coderslab_book_showallbooks");
    }

}
