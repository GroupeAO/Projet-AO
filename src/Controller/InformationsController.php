<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class InformationsController extends AbstractController
{
    #[Route('/about_us', name: 'about_us')]
    public function index(): Response
    {
        return $this->render('informations/aboutus.html.twig', [
            'controller_name' => 'InformationsController',
        ]);
    }
}
