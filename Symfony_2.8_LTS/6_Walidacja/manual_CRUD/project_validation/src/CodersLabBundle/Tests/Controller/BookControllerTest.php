<?php

namespace CodersLabBundle\Tests\Controller;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class BookControllerTest extends WebTestCase
{
    public function testCreatebook()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/createBook');
    }

    public function testShowbook()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/showBook');
    }

    public function testShowallbooks()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/showAllBooks');
    }

    public function testEditbook()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/editBook');
    }

    public function testDeletebook()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/deleteBook');
    }

}
