<?php

namespace CodersLabBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

use CodersLabBundle\Entity\Author;

class AuthorController extends Controller
{
    /**
     * @Route("/createAuthor")
     */
    public function createAuthorAction()
    {
        return $this->render('CodersLabBundle:Author:create_author.html.twig', array(
            // ...
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
     * @Route("/deleteAuthor")
     */
    public function deleteAuthorAction()
    {
        return $this->render('CodersLabBundle:Author:delete_author.html.twig', array(
            // ...
        ));
    }

}
