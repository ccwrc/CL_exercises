<?php

namespace CodersLabBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

use CodersLabBundle\Entity\Author;

class AuthorController extends Controller {
    
    /**
     * @Route("/newAuthor")
     */
    public function newAuthorAction() {
        return $this->render("CodersLabBundle:Author:new_author.html.twig");
    }

    /**
     * @Route("/createAuthor")
     * @Method("POST")
     */
    public function createAuthorAction(Request $req) {
        $em = $this->getDoctrine()->getManager();

        $authorNameSurname = $req->request->get('nameSurname');
        $authorDescription = $req->request->get('description');

        $newAuthor = new Author();
        $newAuthor->setDescription($authorDescription);
        $newAuthor->setNameSurname($authorNameSurname);

        $em->persist($newAuthor);
        $em->flush();
 
        return $this->render("CodersLabBundle:Author:display_author.html.twig", [
                    "id" => $newAuthor->getId(),
                    "author" => $newAuthor
        ]);
    }

    /**
     * @Route("/displayAuthor/{id}")
     */
    public function displayAuthorAction($id) {
        $authorRepo = $this->getDoctrine()->getRepository("CodersLabBundle:Author");
        $author = $authorRepo->find($id);
        
        return $this->render('CodersLabBundle:Author:display_author.html.twig', array(
            "author" => $author
        ));
    }

    /**
     * @Route("/showAllAuthors")
     */
    public function showAllAuthorsAction() {
        $authorRepo = $this->getDoctrine()->getRepository("CodersLabBundle:Author");
        $authors = $authorRepo->findAll();
        
        return $this->render('CodersLabBundle:Author:show_all_authors.html.twig', array(
            "authors" => $authors
        ));
    }

}
