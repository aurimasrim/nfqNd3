<?php

namespace AppBundle\Tests\Controller;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class ProductControllerTest extends WebTestCase
{
    public function testSaveproduct()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/save');
    }

    public function testDeleteproduct()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/deleteProduct');
    }

}
