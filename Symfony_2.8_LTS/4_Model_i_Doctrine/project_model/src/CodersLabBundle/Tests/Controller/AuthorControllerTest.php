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

    public function testDisplayauthor()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/displayAuthor');
    }

    public function testShowallauthors()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/showAllAuthors');
    }

}
