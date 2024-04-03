<?php
namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class MainController extends AbstractController{
    #[Route('/main')]
    public function test() : Response
    {
        return $this->render('Main/main.html.twig');
    }
}