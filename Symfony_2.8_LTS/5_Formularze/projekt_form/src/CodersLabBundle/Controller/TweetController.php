<?php

namespace CodersLabBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

use CodersLabBundle\Entity\Tweet;

class TweetController extends Controller {
    
    /**
     * @Route("/")
     */
    public function indexAction() {
        return $this->render('CodersLabBundle:Default:index.html.twig');
    }

    /**
     * @Route("/create")
     */
    public function createAction(Request $req) {
        $tweet = new Tweet();
        $form = $this->createFormBuilder($tweet)
                ->setMethod("POST")
                ->add("name", "text", ["label" => "Podaj nazwę: "])
                ->add("text", "text", ["label" => "podaj tekst: "])
                ->add("save", "submit", ["label" => "Zapisz tweeta"])
                ->getForm();

        $form->handleRequest($req);
        if ($form->isSubmitted()) {
            $tweet = $form->getData();
            $em = $this->getDoctrine()->getManager();
            $em->persist($tweet);
            $em->flush();
            return new Response("klawo jak cholera Egon!");
        }

        return $this->render('CodersLabBundle:Tweet:create.html.twig', array(
                        //
        ));
    }

    /**
     * @Route("/new")
     */
    public function newAction() {
        $tweet = new Tweet();
        $form = $this->createFormBuilder($tweet)
                ->setAction($this->generateUrl("coderslab_tweet_create"))
                ->setMethod("POST")
                ->add("name", "text", ["label" => "Podaj nazwę: "])
                ->add("text", "text", ["label" => "podaj tekst: "])
                ->add("save", "submit", ["label" => "Zapisz tweeta"])
                ->getForm();

        return $this->render('CodersLabBundle:Tweet:new.html.twig', array(
                    "form" => $form->createView()
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
    


}
