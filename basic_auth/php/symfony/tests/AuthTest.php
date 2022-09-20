<?php

namespace App\Tests;

use ApiPlatform\Core\Bridge\Symfony\Bundle\Test\ApiTestCase;
use App\Repository\UserRepository;
use App\Tests\Base\FakerFactory;
use Hautelook\AliceBundle\PhpUnit\ReloadDatabaseTrait;

class AuthTest extends ApiTestCase
{   
    use ReloadDatabaseTrait;
    private $container;
    private $client;

    protected function setUp(): void
    {   
        self::bootKernel(['environment' => 'dev']);
        $this->client = self::createClient();
        $this->container = self::getContainer();
        $this->faker = FakerFactory::create();
   
    }

    public function testGetPages()
    {
        $userRepository = $this->container->get(UserRepository::class);
        $email = $this->faker->email();
        $senha = 'vpp.filho@';
        $userRepository->create($email, $senha);

        $this->client->request(
            'POST',
            '/api/login_check',
            [
                'headers' => ['Content-Type' => 'application/json'],
                'json' => [
                    'username' => $email,
                    'password' => $senha,
                ]
            ]
        );

        $this->assertResponseIsSuccessful();
        
    }

    public function testGetPagesError()
    {
        $userRepository = $this->container->get(UserRepository::class);
        $email = $this->faker->email();
        $senha = $this->faker->password();
        $userRepository->create($email, $senha);

        $this->client->request(
            'POST',
            '/api/login_check',
            [
                'headers' => ['Content-Type' => 'application/json'],
                'json' => [
                    'username' => $email,
                    'password' => '12345678',
                ]
            ]
        );

        $this->assertResponseStatusCodeSame(401);
     
    }
}
