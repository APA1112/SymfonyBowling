<?php

namespace App\Bundles\PizzonBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class PizzonController extends AbstractController{
    #[Route('/pizzon', name:'pizzon')]
    public function pizzonIndex():Response{
        return $this->render('@Pizzon/pizzon.html.twig');
    }

    #[Route('/pizzon/section1', name:'pizzon_section1')]
    public function pizzonSection1() : Response{
        return $this->render('@Pizzon/section1.html.twig');
    }
    
    #[Route('/pizzon/section2', name:'pizzon_section2')]
    public function pizzonSection2() : Response{
        return $this->render('@Pizzon/section2.html.twig');
    }

    #[Route('/pizzon/section3', name:'pizzon_section3')]
    public function pizzonSection3() : Response{
        return $this->render('@Pizzon/section3.html.twig');
    }
}