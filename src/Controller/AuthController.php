<?php
namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class AuthController extends AbstractController{
    #[Route(path:"/homePage", name:"home")]
    public function loginAction():Response{
        return new Response(content: "hello 3A36",);
    }
  
    #[Route(path:"/homePage/{id}", name:"home2" )]
    public function loginActionPara($id):Response{
        return new Response(content: "hello 3A36, c'est ".$id);
    }

    #[Route(path:"/homePage/zeineb", name:"home1", priority: 1)]   
    public function loginActionPara2():Response{
        return new Response(content: "does it work ?");
    }

    
}

