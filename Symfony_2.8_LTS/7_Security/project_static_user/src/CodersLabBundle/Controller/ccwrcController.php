<?php

namespace CodersLabBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

class ccwrcController extends Controller
{
    /**
     * @Route("/all")
     */
    public function allAction()
    {
        return $this->render('CodersLabBundle:ccwrc:all.html.twig', array(
            // ...
        ));
    }

    /**
     * @Route("/restricted")
     */
    public function restrictedAction()
    {
        return $this->render('CodersLabBundle:ccwrc:restricted.html.twig', array(
            // ...
        ));
    }

}
