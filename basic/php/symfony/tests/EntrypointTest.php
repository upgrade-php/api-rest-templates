<?php

namespace App\Tests;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class EntrypointTest extends WebTestCase
{
    public function testSomething(): void
    {
        $client = static::createClient();

        $response = $client->request('GET', '/');

        $this->assertResponseStatusCodeSame(200);
    }
}
