<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use App\Entity\Client;

class HomeController extends AbstractController
{
    /**
     * @Route("/home", name="home")
     */
    public function index()
    {  $entityManager = $this->getDoctrine()->getManager();
        $client = new Client();
    
     return $this->render('home/index.html.twig', [
            'controller_name' => 'HomeController',
        ]);

    }
}
