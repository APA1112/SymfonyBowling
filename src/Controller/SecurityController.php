<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class SecurityController extends AbstractController
{
    #[Route(path: '/login', name: 'login_App')]
    public function login(): Response
    {
        return $this->render('Security/login.html.twig');
    }

    #[Route(path: '/logout', name: 'logout_App')]
    public function logout(): void
    {
        throw new \LogicException('Esto no debería ejecutarse nunca.');
    }
}