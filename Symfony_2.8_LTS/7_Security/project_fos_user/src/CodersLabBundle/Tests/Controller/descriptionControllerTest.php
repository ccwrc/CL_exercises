<?php

namespace CodersLabBundle\Tests\Controller;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class descriptionControllerTest extends WebTestCase
{
    public function testAdddescription()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/addDescription');
    }

    public function testShowdescription()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/showDescription');
    }

}
