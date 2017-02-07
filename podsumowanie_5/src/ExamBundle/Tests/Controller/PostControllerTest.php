<?php

namespace ExamBundle\Tests\Controller;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class PostControllerTest extends WebTestCase
{
    public function testChangetitlepost()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/changeTitlePost');
    }

    public function testShowfoobarposts()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/showFooBarPosts');
    }

    public function testCreatepost()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/createPost');
    }

    public function testDeleteposts()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/deletePosts');
    }

}
