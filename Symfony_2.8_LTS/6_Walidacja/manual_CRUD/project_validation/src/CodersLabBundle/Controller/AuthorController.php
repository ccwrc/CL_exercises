<?php

namespace CodersLabBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Request;

use CodersLabBundle\Entity\Author;

class AuthorController extends Controller {
    
    /**
     * @Route("/createAuthor")
     */
    public function createAuthorAction(Request $req) {
        $author = new Author();
        $form = $this->createFormBuilder($author)
                ->setMethod("POST")
                ->add("name", "text")
                ->add("description", "text")
                ->add("age", "integer")
                ->add("save", "submit")
                ->getForm();

        $form->handleRequest($req);
        if ($form->isValid() && $form->isSubmitted()) {
            $author = $form->getData();
            $em = $this->getDoctrine()->getManager();
            $em->persist($author);
            $em->flush();
            return $this->redirectToRoute("coderslab_author_showallauthors");
        }

        return $this->render('CodersLabBundle:Author:create_author.html.twig', array(
                    "form" => $form->createView()
        ));
    }

    /**
     * @Route("/showAuthor/{id}")
     */
    public function showAuthorAction($id) {
        $author = $this->getDoctrine()->getRepository("CodersLabBundle:Author")->find($id);

        return $this->render('CodersLabBundle:Author:show_author.html.twig', array(
                    "author" => $author
        ));
    }

    /**
     * @Route("/showAllAuthors")
     */
    public function showAllAuthorsAction() {
        $authors = $this->getDoctrine()->getRepository("CodersLabBundle:Author")->findAll();

        return $this->render('CodersLabBundle:Author:show_all_authors.html.twig', array(
                    "authors" => $authors
        ));
    }

    /**
     * @Route("/editAuthor")
     */
    public function editAuthorAction()
    {
        return $this->render('CodersLabBundle:Author:edit_author.html.twig', array(
            // ...
        ));
    }

    /**
     * @Route("/deleteAuthor/{id}")
     */
    public function deleteAuthorAction($id) {
        $author = $this->getDoctrine()->getRepository("CodersLabBundle:Author")->find($id);
        if ($author == null) {
            throw $this->createNotFoundException("brak id w bazie");
        }
        $em = $this->getDoctrine()->getManager();
        $em->remove($author);
        $em->flush();

        return $this->redirectToRoute("coderslab_author_showallauthors");
    }

}
