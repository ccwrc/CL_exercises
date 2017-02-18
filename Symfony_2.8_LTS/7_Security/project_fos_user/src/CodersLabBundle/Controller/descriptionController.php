<?php

namespace CodersLabBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

class descriptionController extends Controller
{
    /**
     * @Route("/addDescription")
     */
    public function addDescriptionAction()
    {
        return $this->render('CodersLabBundle:description:add_description.html.twig', array(
            // ...
        ));
    }

    /**
     * @Route("/showDescription")
     */
    public function showDescriptionAction()
    {
        return $this->render('CodersLabBundle:description:show_description.html.twig', array(
            // ...
        ));
    }

}
