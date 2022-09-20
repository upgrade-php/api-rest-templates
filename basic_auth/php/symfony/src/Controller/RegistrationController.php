<?php

namespace App\Controller;

use App\Entity\User;
use App\Repository\UserRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

/**
 * @Route("/api", name="api_")
 */

class RegistrationController extends AbstractController
{
    /**
     * @Route("/register", name="register", methods={"POST"})
     */
    public function index(Request $request, UserRepository $userRepository): Response
    {
        $decoded = json_decode($request->getContent());
        $userRepository->create($decoded->email, $decoded->password);

        return $this->json(['message' => 'Registered Successfully']);
    }
}
