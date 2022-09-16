<?php

namespace App\Tests;

use App\Repository\UserRepository;
use App\Tests\Base\ReflashDatabaseTrait;
use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class AuthTest extends WebTestCase
{
    use ReflashDatabaseTrait;
    private $container;

    protected function setUp(): void
    {
        $kernel = self::bootKernel();
        $this->reflash($kernel);
        $this->container = self::getContainer();
    }

    public function testGetPages()
    {
        $userRepository = $this->container->get(UserRepository::class);
        $email = 'vpp.filho2@gmail.com';
        $senha = 'vpp.filho@2';
        $userRepository->create($email, $senha);

        $client = static::createClient();
        $response = $client->request(
            'POST',
            '/api/login_check',
            [

                'json' => [
                    'username' => $email,
                    'password' => $senha,
                ]
            ]
        );

        $data = json_decode($response->getContent());
        dump($data);
    }
}
