<?php

namespace CodersLabBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Response;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Symfony\Component\HttpFoundation\Request;

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
    


}
