<?php

namespace CodersLabBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

use CodersLabBundle\Entity\Tweet;

class TweetController extends Controller
{
    /**
     * @Route("/create")
     */
    public function createAction()
    {
        return $this->render('CodersLabBundle:Tweet:create.html.twig', array(
            // ...
        ));
    }

    /**
     * @Route("/new")
     */
    public function newAction()
    {
        return $this->render('CodersLabBundle:Tweet:new.html.twig', array(
            // ...
        ));
    }

    /**
     * @Route("/showAll")
     */
    public function showAllAction() {
        $tweets = $this->getDoctrine()->getRepository("CodersLabBundle:Tweet")->findAll();
        
        return $this->render('CodersLabBundle:Tweet:show_all.html.twig', array(
            "tweets" => $tweets
        ));
    }
    
    /**
     * @Route("/")
     */
    public function indexAction() {
        return $this->render('CodersLabBundle:Default:index.html.twig');
    }

}
