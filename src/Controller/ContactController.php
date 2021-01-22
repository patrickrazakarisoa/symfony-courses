<?php

namespace App\Controller;

use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;

use App\Entity\Contact;

class ContactController extends AbstractController
{
    /**
     * @Route("/", name="home")
     */
    public function home()
    {
        $contacts = $this->getDoctrine()->getRepository(Contact::class)->findAll();
        return $this->render('home.html.twig', [
            'contacts' => $contacts
        ]);
    }

    /**
     * @Route("/add", name="add")
     */
    public function add(): Response
    {
        $entityManager = $this->getDoctrine()->getManager();

        $contact = new Contact();
        $contact->setNom('Lucie');
        $contact->setPrenom('Dupont');
        $contact->setTelephone('1814765480');
        $contact->setAdresse('14 rue de la Fontaine');
        $contact->setVille('Paris');
        $contact->setAge(15);


        // tell Doctrine you want to (eventually) save the Product (no queries yet)
        $entityManager->persist($contact);

        // actually executes the queries (i.e. the INSERT query)
        $entityManager->flush();

        return new Response('<h1 style= "padding: 20px; background-color: steelblue; color: white; border-radius: 10px; text-align: center; box-shadow: 5px 5px 5px grey; width: 30%; margin: auto; margin-top: 10rem; font-family: sans-serif;" >Le contact a été enregistré. Son id est ' . $contact->getId() . '</h1>');
    }

    /**
     * @Route("/update/{id}", name = "update" )
     */
    // public function update($id): Response
    // {
    //     $entityManager = $this->getDoctrine()->getManager();
    //     $contact = $this->getDoctrine()->getRepository(Contact::class)->find($id);

    //     $contact->set();

    //     $entityManager->flush();

    //     return new Response('<h2>Mise à jour effectuée</h2>');
    // }

    /**
     * @Route("/delete/{id}", name="delete")
     */
    public function delete($id): Response
    {
        $entityManager = $this->getDoctrine()->getManager();
        $contact = $this->getDoctrine()->getRepository(Contact::class)->find($id);


        $entityManager->remove($contact);
        $entityManager->flush();


        return new Response('<h2>Le contact a été supprimé</h2>');
    }
}
