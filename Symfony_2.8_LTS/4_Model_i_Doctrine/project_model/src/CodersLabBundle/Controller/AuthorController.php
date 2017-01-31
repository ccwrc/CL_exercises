<?php

namespace CodersLabBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

class AuthorController extends Controller
{
    /**
     * @Route("/createAuthor")
     */
    public function createAuthorAction() {
        
        return $this->render('CodersLabBundle:Author:create_author.html.twig', array(
            // ...
        ));
    }

    /**
     * @Route("/displayAuthor")
     */
    public function displayAuthorAction() {
        
        return $this->render('CodersLabBundle:Author:display_author.html.twig', array(
            // ...
        ));
    }

    /**
     * @Route("/showAllAuthors")
     */
    public function showAllAuthorsAction() {
        
        return $this->render('CodersLabBundle:Author:show_all_authors.html.twig', array(
            // ...
        ));
    }

}
