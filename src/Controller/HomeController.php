<?php
namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class HomeController extends AbstractController{
    #[Route(path:"/atelier2", name:"fonction_bonjour")]
    public function BonjourAction():Response{
        return new Response(content: "Bonjour mes étudiants",);
    }

}