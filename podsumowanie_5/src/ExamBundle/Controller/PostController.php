<?php

namespace ExamBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

class PostController extends Controller
{
    /**
     * @Route("/changeTitlePost")
     */
    public function changeTitlePostAction()
    {
        return $this->render('ExamBundle:Post:change_title_post.html.twig', array(
            // ...
        ));
    }

    /**
     * @Route("/showFooBarPosts")
     */
    public function showFooBarPostsAction()
    {
        return $this->render('ExamBundle:Post:show_foo_bar_posts.html.twig', array(
            // ...
        ));
    }

    /**
     * @Route("/createPost")
     */
    public function createPostAction()
    {
        return $this->render('ExamBundle:Post:create_post.html.twig', array(
            // ...
        ));
    }

    /**
     * @Route("/deletePosts")
     */
    public function deletePostsAction()
    {
        return $this->render('ExamBundle:Post:delete_posts.html.twig', array(
            // ...
        ));
    }

}
