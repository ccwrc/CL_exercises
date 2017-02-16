<?php

namespace CodersLabBundle\Tests\Controller;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class AuthorControllerTest extends WebTestCase
{
    public function testCreateauthor()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/createAuthor');
    }

    public function testShowauthor()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/showAuthor');
    }

    public function testEditauthor()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/editAuthor');
    }

    public function testDeleteauthor()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/deleteAuthor');
    }

}
