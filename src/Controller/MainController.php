<?php
namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Security\Core\Security;

class MainController extends AbstractController{
    #[Route('/', name:'mainApp')]
    public function main(Security $security): Response
    {
        // Verificar si hay un usuario autenticado
        if ($security->getUser()) {
            // Si hay un usuario autenticado, redirigir a la pantalla principal
            return $this->render('vue.html.twig');
        } else {
            // Si no hay un usuario autenticado, redirigir a la pantalla de inicio de sesión
            return $this->redirectToRoute('login_App');
        }
    }
}