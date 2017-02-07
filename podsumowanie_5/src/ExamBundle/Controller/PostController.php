<?php

namespace ExamBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

use ExamBundle\Entity\Post;

class PostController extends Controller {
    
    /**
     * @Route("/changeTitlePost")
     */
    public function changeTitlePostAction() {
        $repo = $this->getDoctrine()->getRepository("ExamBundle:Post");
        $post = $repo->findOneById(3);

        if (!$post) {
            return new Response("Brak id w bazie");
        }
        $post->setTitle("Some other title");
        $em = $this->getDoctrine()->getManager();
        $em->flush();

        return new Response("zmiany zapisane w bazie, tytuł zmieniony");
    }

    /**
     * @Route("/showFooBarPosts")
     */
    public function showFooBarPostsAction() {
        $repo = $this->getDoctrine()->getRepository("ExamBundle:Post");
        $posts = $repo->findByTitle("fooBar"); //DQL nie uzwglednia wielkosci liter
        $postCounter = count($posts);

        return new Response("liczba postów to: " . $postCounter);
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