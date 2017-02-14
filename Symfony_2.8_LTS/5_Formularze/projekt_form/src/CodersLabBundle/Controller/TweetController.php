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
        $form = $this->generateForm($tweet, null);
//        $form = $this->createFormBuilder($tweet)
//                ->setMethod("POST")
//                ->add("name", "text", ["label" => "Podaj nazwę: "])
//                ->add("text", "text", ["label" => "podaj tekst: "])
//                ->add("save", "submit", ["label" => "Zapisz tweeta"])
//                ->getForm();

        $form->handleRequest($req);
        if ($form->isSubmitted() && $form->isValid()) {
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
        $action = $this->generateUrl("coderslab_tweet_create");
        $form = $this->generateForm($tweet, $action);
//        $form = $this->createFormBuilder($tweet)
//                ->setAction($this->generateUrl("coderslab_tweet_create"))
//                ->setMethod("POST")
//                ->add("name", "text", ["label" => "Podaj nazwę: "])
//                ->add("text", "text", ["label" => "podaj tekst: "])
//                ->add("save", "submit", ["label" => "Zapisz tweeta"])
//                ->getForm();

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

    private function generateForm($tweet, $action) {
        $form = $this->createFormBuilder($tweet)
                ->setAction($action)
                ->add("name", "text")
                ->add("text", "text")
                ->add("save", "submit")
                ->getForm();
        return $form;
    }

    /**
     * @Route("/update/{id}")
     */
    public function updateAction(Request $req, $id) {
        $tweet = $this->getDoctrine()->getRepository("CodersLabBundle:Tweet")->find($id);
        $form = $this->generateForm($tweet, null);

        $form->handleRequest($req);
        if ($form->isSubmitted() && $req->getMethod() == "POST" && $form->isValid()) {
            $tweet = $form->getData();
            $em = $this->getDoctrine()->getManager();
            $em->persist($tweet);
            $em->flush();
            return $this->redirectToRoute("coderslab_tweet_showall");
        }
        return $this->render('CodersLabBundle:Tweet:new.html.twig', array(
                    "form" => $form->createView()
        ));
    }

}
