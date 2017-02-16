<?php

namespace CodersLabBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

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
     * @Route("/showAuthor")
     */
    public function showAuthorAction()
    {
        return $this->render('CodersLabBundle:Author:show_author.html.twig', array(
            // ...
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
