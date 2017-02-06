<?php

namespace ExamBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

class ccwrcController extends Controller
{
    /**
     * @Route("/setUsername")
     */
    public function setUsernameAction()
    {
        return $this->render('ExamBundle:ccwrc:set_username.html.twig', array(
            // ...
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
