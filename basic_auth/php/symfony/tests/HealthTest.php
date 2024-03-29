<?php

namespace App\Tests;

use ApiPlatform\Core\Bridge\Symfony\Bundle\Test\ApiTestCase;

class HealthTest extends ApiTestCase
{
    public function testHealth(): void
    {
        static::createClient()->request('GET', '/health');

        $this->assertResponseIsSuccessful();
    }
}