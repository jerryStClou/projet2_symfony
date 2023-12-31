<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class HomeController extends AbstractController
{
    #[Route('/home', name: 'app_home')]
    public function index(): Response
    {
        $message = "bienvenue";
        return $this->render('home/index.html.twig', [
            'controller_name' => 'HomeController',
            'message' => $message
        ]);
    }

    #[Route('/condition-general', name: 'app_condition_general')]
    public function condition_general(): Response
    {
        return $this->render('home/condition_general.html.twig');
    }
}
