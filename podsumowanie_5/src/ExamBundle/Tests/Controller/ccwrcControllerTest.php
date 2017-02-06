<?php

namespace ExamBundle\Tests\Controller;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class ccwrcControllerTest extends WebTestCase
{
    public function testSetusername()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/setUsername');
    }

    public function testSayhello()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/sayHello');
    }

    public function testCreatecookie()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/createCookie');
    }

    public function testDeletecookie()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/deleteCookie');
    }

}
