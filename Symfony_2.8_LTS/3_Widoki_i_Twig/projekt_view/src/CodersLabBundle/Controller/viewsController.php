<?php

namespace CodersLabBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Symfony\Component\HttpFoundation\Response;

use CodersLabBundle\Entity\Article;

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
    
    /**
     * @Route("/showArticle/{n}")
     */
    public function showArticleAction($n) {
        $article = Article::GetArticleById($n);

        return $this->render("CodersLabBundle:view:showArticle.html.twig", [
        // zbędne            'n' => $n,
                    'article' => $article
        ]);
    }
    
    /**
     * @Route("/showAllArticles")
     */
    public function showAllArticlesAction() {
        $articles = Article::GetAllArticles();
        
        return $this->render("CodersLabBundle:view:showAllArticles.html.twig", [
            "articles" => $articles
        ]);
    }




    /* Stwórz akcję /showAllArticles, która wyświetli wszystkie artykuły. 
     * Do wyświetlenia artykułu użyj szablonu z zadania B5 Nie pisz wyświetlania od nowa, 
     * w pętli użyj zrobionego już szablonu. */

}
