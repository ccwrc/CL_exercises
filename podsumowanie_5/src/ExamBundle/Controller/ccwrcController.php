<?php

namespace ExamBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Request;

class ccwrcController extends Controller {
    
    /**
     * @Route("/")
     */
    public function indexAction() {
        return $this->render('ExamBundle:Default:index.html.twig');
    }
    
    /**
     * @Route("/setUsername/{userName}")
     */
    public function setUsernameAction(Request $req, $userName) {
        $session = $req->getSession();
        $session->set("userName", $userName);
        
        return $this->render('ExamBundle:ccwrc:set_username.html.twig', array(
            "userName" => $userName
        ));
    }

    /**
     * @Route("/sayHello")
     */
    public function sayHelloAction()
    {
        return $this->render('ExamBundle:ccwrc:say_hello.html.twig', array(
            // ...
        ));
    }

    /**
     * @Route("/createCookie")
     */
    public function createCookieAction()
    {
        return $this->render('ExamBundle:ccwrc:create_cookie.html.twig', array(
            // ...
        ));
    }

    /**
     * @Route("/deleteCookie")
     */
    public function deleteCookieAction()
    {
        return $this->render('ExamBundle:ccwrc:delete_cookie.html.twig', array(
            // ...
        ));
    }

}
