<?php

namespace App\ContabilidadBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ContabilidadController extends AbstractController{
    #[Route('/contabilidad', name:'contabilidad')]
    public function index():Response{
        return $this->render('@Contabilidad/contabilidad.html.twig');
    }
}