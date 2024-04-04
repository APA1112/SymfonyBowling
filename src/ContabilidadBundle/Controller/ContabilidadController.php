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

    #[Route('/contabilidad/section1', name:'section1')]
    public function section1() : Response{
        return $this->render('@Contabilidad/section1.html.twig');
    }
    
    #[Route('/contabilidad/section2', name:'section2')]
    public function section2() : Response{
        return $this->render('@Contabilidad/section2.html.twig');
    }

    #[Route('/contabilidad/section3', name:'section3')]
    public function section3() : Response{
        return $this->render('@Contabilidad/section3.html.twig');
    }
}