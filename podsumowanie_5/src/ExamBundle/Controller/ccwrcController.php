<?php

namespace ExamBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Request;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Symfony\Component\HttpFoundation\Cookie;
use Symfony\Component\HttpFoundation\Response;

class ccwrcController extends Controller {
    
    /**
     * @Route("/")
     */
    public function indexAction() {
        return $this->render('ExamBundle:Default:index.html.twig');
    }
    
    /**
     * @Route("/setUsername/{userName}")
     * @Method("GET")
     */
    public function setUsernameAction(Request $req, $userName) {
        $session = $req->getSession();
        $session->set("userName", $userName);
        
        return $this->render('ExamBundle:ccwrc:set_username.html.twig', array(
            "userName" => $userName
        ));
    }

    /**
     * @Route("/sayHello/{n}", defaults={"n" = "10"}, requirements={"n"="\d+"})
     * @Method("GET")
     */
    public function sayHelloAction(Request $req, $n) {
        $session = $req->getSession();
        $userName = $session->get("userName");
        
        if (!$userName) {
            $userName = "Witaj nieznajomy";
        }
        
        return $this->render('ExamBundle:ccwrc:say_hello.html.twig', array(
            "n" => $n,
            "userName" => $userName
        ));
    }

    /**
     * @Route("/createCookie/{cookieName}/{cookieValue}/{cookieTime}", requirements={"cookieTime"="\d+"})
     * @Method("GET")
     */
    public function createCookieAction(Request $req, $cookieName, $cookieValue, $cookieTime) {
        $cookie = new Cookie($cookieName, $cookieValue, time() + ($cookieTime * 60));

        $resp = $this->render('ExamBundle:ccwrc:create_cookie.html.twig', array(
            "cookieName" => $cookieName
        ));
        $resp->headers->setCookie($cookie);

        return $resp;
//        $resp = new Response(); - alternatywa
//        $resp->headers->setCookie($cookie);
//        $resp->send();
    }

    /**
     * @Route("/deleteCookie/{cookieName}")
     * @Method("GET")
     */
    public function deleteCookieAction(Request $req, $cookieName) {
        $cookies = $req->cookies->all();

        if (isset($cookies[$cookieName])) {
            $cookieValue = $cookies[$cookieName];
        } else {
            $cookieValue = false;
        }

        if ($cookieValue) {
            $cookie = new Cookie($cookieName, "", time() - 200);
            $resp = new Response();
            $resp->headers->setCookie($cookie);
            $resp->send();

            $message = "Zawartość ciasteczka o nazwie " . $cookieName . " to " . $cookieValue;
            $message .= " ciasteczko o zawartości " . $cookieValue . " usunięte";
        } else {
            $message = "Brak ciasteczka";
        }

        return $this->render('ExamBundle:ccwrc:delete_cookie.html.twig', array(
                    "message" => $message
        ));
        //też działa:  $res->headers->clearCookie($cookieName);
    }      

}


