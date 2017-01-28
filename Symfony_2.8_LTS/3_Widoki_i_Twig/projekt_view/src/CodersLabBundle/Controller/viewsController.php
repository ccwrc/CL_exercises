<?php

namespace CodersLabBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;

class viewsController extends Controller {
    
    /**
     * @Template("CodersLabBundle:view:view_ex_a3.html.twig")
     * @Route("/render")
     */
    public function renderAction() {
        // return $this->render("CodersLabBundle:view:view_ex_a3.html.twig");
        return [];
    }
    
    /**
     * @Template("CodersLabBundle:view:view_ex_b1.html.twig")
     * @Route("/render/{username}")
     */
    public function renderUsernameAction($username) {
//        return $this->render("CodersLabBundle:view:view_ex_b1.html.twig", [
//            "username" => $username
//        ]);
        return ["username" => $username];
    }
    
    /**
     * @Route("/repeatSentence/{n}")
     */
    public function repeatSentenceAction($n) {
        return $this->render("CodersLabBundle:view:repeat.html.twig", [
            "n" => $n, "sentence" => "zdanie przekazane z kontrolera jeden raz"]);
    }
    
    /**
     * @Route("/createRandoms/{start}/{end}/{n}")
     */
    public function createRandomsAction($start, $end, $n) {
        $randomArray = [];
        for ($i = 1; $i <= $n; $i++) {
            $randomArray[] = mt_rand($start, $end); //random_int($start, $end);
        }
        return $this->render("CodersLabBundle:view:create_randoms.html.twig", [
            "randomArray" => $randomArray
        ]);
    }


    /* Stwórz akcję podpiętą do adresu /createRandoms/{start}/{end}/{n}. Akcja ma generować 
     * tablicę z n losowymi liczbami z zakresu start do end którą prześlesz do swojego widoku. 
     * Nastepnie w Twigu użyj pętli for żeby wyświetlić wszystkie przesłane liczby. 
     * Jeżeli tablica jest pusta (czyli podane n jest mniejsze lub równe 0) powinieneś 
     * wyświetlić odpowiednią informacje. */
}
