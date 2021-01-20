<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;



class DefaultController extends AbstractController
{
    public function index()
    {
        return new Response("<h1 style='padding: 20px; background-color: steelblue; color: white; border-radius: 10px; text-align: center; box-shadow: 5px 5px 5px grey;'>Hello World</h1>");
    }

    public function hello($name)
    {
        return new Response("<h1 style='padding: 20px; background-color: grey; color: white; border-radius: 10px; text-align: center; box-shadow: 5px 5px 5px grey;'>Hello $name</h1>");
    }
    /**
     * @Route("/hello/{nom?}", name="exit")
     */
    public function deconnexion($nom)
    {
        return new Response("<h1 style='padding: 20px; background-color: steelblue; color: white; border-radius: 10px; text-align: center; box-shadow: 5px 5px 5px grey; width: 30%; margin: auto; margin-top: 10rem; font-family: sans-serif;'>Hello $nom!</1>");
    }

    public function redirection($nimportequoi)
    {
        return new Response("<h1 style='padding: 20px; background-color: steelblue; color: white; border-radius: 10px; text-align: center; box-shadow: 5px 5px 5px grey;'>$nimportequoi</h1>");
    }
}
