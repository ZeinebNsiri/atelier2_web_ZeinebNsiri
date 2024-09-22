<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class ServiceController extends AbstractController
{
    #[Route('/service', name: 'app_service')]
    public function index(): Response
    {
        return $this->render('service/index.html.twig', [
            'controller_name' => 'ServiceController',
        ]);
    }

    #[Route(path:"/atelier2/{name}", name:"services" )]
    public function showService($name):Response{
        #return new Response(content: "Service ".$name);

        return $this->render('service/showService.html.twig', [
            'name' => $name
        ]);
    }

    #[Route(path:"/index",name :"index")]
    public function goToIndex(): Response
    {
        // Redirige vers la fonction bonjour du controlleur HomeController
        return $this->redirectToRoute('fonction_bonjour');
    }
}
