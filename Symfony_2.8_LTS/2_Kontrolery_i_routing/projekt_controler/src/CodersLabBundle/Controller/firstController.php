<?php

namespace CodersLabBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Response;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Cookie;
use Symfony\Component\Routing\Generator\UrlGeneratorInterface;

/**
 * @Route("/first")
 */
class firstController extends Controller {

    /**
     * @Route("/helloWorld/")
     */
    public function helloWorldAction() {
        return new Response("<h1>hello...</h1>");
    }
    
    /**
     * @Route("/goodbye/{username}")
     */
    public function goodbyeAction($username) {
        return new Response("Goodbye " . $username);
    }
    
    /**
     * @Route("/welcome/{name}/{surname}",defaults={"name"="Funky","surname"="Koval"})
     */
    public function welcomeAction($name, $surname) { 
        return new Response("Welcome " . $name . " " . $surname);
    }
    
    /**
     * @Route("/showPost/{id}", requirements={"id"="\d+"})
     */
    public function showPostAction($id) {
        return new Response("Showing post " . $id);
    }
    
    /**
     * @Route("/form")
     * @Method("GET")
     */
    public function getFormAction() {
        $html = "<form method='POST'><input action='' type='text' name='postem"
                . "'/><input type='submit'/></form>";
        return new Response($html);
    }
    
    /**
     * @Route("/form")
     * @Method("POST")
     */
    public function postFormAction(Request $req) { //request musi byc przekazywany przed 
        $text = $req->request->get("postem"); //innymi parametrami, musi byc pierwszy
        return new Response($text);
    }
    
    /**
     * @param Request $req
     * @Route("/setSession/{value}")
     */
    public function setSessionAction(Request $req, $value) { 
        $session = $req->getSession(); //param na gorze jako opcja, tu i bez tego dziala
        $session->set("usertext", $value);
        
        return new Response("sesja usertext ustawiona");
    }
    
    /**
     * @param Request $req
     * @Route("/getSession")
     */
    public function getSessionAction(Request $req) {
        $session = $req->getSession();
        $displaySession = $session->get("usertext", "sesja nie została ustawiona - skleroza");
        
        return new Response("dane sesji usertext: " . $displaySession);
    }
    
    /**
     * @Route("/setCookie/{value}")
     */
    public function setCookieAction(Request $req, $value) {
        $cookie = new Cookie("myCookie", $value, time() + 3600); //3600 - godzinka
        $res = new Response("nowe ciacho ustawione...");
        $res->headers->setCookie($cookie);
        return $res;
    }
    
    /**
     * @Route("/getCookie")
     */
    public function getCookieAction(Request $req) {
        $cookies = $req->cookies->all();
        if (isset($cookies["myCookie"])) {
            return new Response("ciacho: " . $cookies["myCookie"]);
        } else {
            return new Response("brak ciacha myCookie");
        }
        // isset($cookies['myCookie']) ? $cookies['myCookie'] : 'nie ma...'
    }
    
    /**
     * @Route("/deleteCookie")
     */
    public function deleteCookieAction(Request $req) {
        $cookies = $req->cookies->all();
        if (isset($cookies["myCookie"])) {
            $cookie = new Cookie("myCookie", "", time() - 3600);
            $res = new Response("ciacho skasowane");
            $res->headers->setCookie($cookie);
            return $res;
        } else {
            return new Response("ciacho myCookie nie było ustawione");
        }
        // $res = new Response('DELETED');
        // $res->headers->clearCookie('myCookie');
        // return $res;
    }
    
    /**
     * @Route("/redirectMe")
     */
    public function redirectMeAction(Request $req) {
        $url = $this->generateUrl("coderslab_first_setcookie", [
            "value" => "ciacho z przekierowania"
        ]);
        return $this->redirect($url);
        //  $url = $this->generateUrl(
        // 'show_post',
        // ['id' => random_int(1, 100)]
        //  );
    }
    
    /**
     * @Route("/showAllLinks")
     */
    public function showAlllinksAction() {
        $links = [
            $this->generateUrl("coderslab_first_helloworld",[],
                    UrlGeneratorInterface::ABSOLUTE_URL),
            $this->generateUrl("coderslab_first_goodbye", ["username" => "przekierowanie"], 
                    UrlGeneratorInterface::ABSOLUTE_URL),
            $this->generateUrl("coderslab_first_welcome", ["name" => "przekierowanie", 
                "surname" => "przekierowanie"], 
                    UrlGeneratorInterface::ABSOLUTE_URL),
            $this->generateUrl("coderslab_first_showpost", ["id" => mt_rand(1, 50)], 
                    UrlGeneratorInterface::ABSOLUTE_URL),
            $this->generateUrl("coderslab_first_getform", [], 
                    UrlGeneratorInterface::ABSOLUTE_URL),
            $this->generateUrl("coderslab_first_postform", [], 
                    UrlGeneratorInterface::ABSOLUTE_URL),
            $this->generateUrl("coderslab_first_setsession", ["value" => "przekierowanie"], 
                    UrlGeneratorInterface::ABSOLUTE_URL),
            $this->generateUrl("coderslab_first_getsession", [], 
                    UrlGeneratorInterface::ABSOLUTE_URL),
            $this->generateUrl("coderslab_first_setcookie", ["value" => "przekierowanie"], 
                    UrlGeneratorInterface::ABSOLUTE_URL),
            $this->generateUrl("coderslab_first_getcookie", [], 
                    UrlGeneratorInterface::ABSOLUTE_URL),
            $this->generateUrl("coderslab_first_deletecookie", [], 
                    UrlGeneratorInterface::ABSOLUTE_URL),
            $this->generateUrl("coderslab_first_redirectme", [], 
                    UrlGeneratorInterface::ABSOLUTE_URL),
            $this->generateUrl("coderslab_first_showalllinks", [], 
                    UrlGeneratorInterface::ABSOLUTE_URL),
            $this->generateUrl("coderslab_first_showalllinks", [], 
                    UrlGeneratorInterface::ABSOLUTE_URL)
        ];
        return new Response(implode("<br/>", $links));
    }

    
}
