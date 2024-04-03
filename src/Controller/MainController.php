<?php
namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class MainController extends AbstractController{
    #[Route('/', name:'mainApp')]
    public function main() : Response
    {
        return $this->render('Main/main.html.twig');
    }
}