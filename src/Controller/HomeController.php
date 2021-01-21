<?php

namespace App\Controller;

use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;


class HomeController extends AbstractController
{

    /**
     * @Route("/", name="home")
     */
    public function home()
    {
        $contacts = [
            [
                'id' => 1,
                'nom' => 'Durant',
                'prenom' => 'Maire',
                'telephone' => "0786495705"
            ],
            [
                'id' => 1,
                'nom' => 'Dubois',
                'prenom' => 'Jean',
                'telephone' => "0258484957"
            ],
            [
                'id' => 1,
                'nom' => 'Smith',
                'prenom' => 'Mike',
                'telephone' => "0781574865"
            ],
            [
                'id' => 1,
                'nom' => 'Lamar',
                'prenom' => 'Bob',
                'telephone' => "07654481547"
            ],
        ];

        return $this->render('home.html.twig', ["contacts" => $contacts]);
    }

    /**
     * @Route("/contact", name="contact")
     */
    public function contact()
    {
        return $this->render('contact.html.twig');
    }
}
