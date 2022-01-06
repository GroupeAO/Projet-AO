<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class InformationsController extends AbstractController
{
    #[Route('/about_us', name: 'about_us')]
    public function aboutUs(): Response
    {
        return $this->render('informations/aboutus.html.twig', [
        ]);
    }

    #[Route('/informations', name: 'informations')]
    public function informations(): Response
    {
        return $this->render('informations/informations.html.twig', [
        ]);
    }

    #[Route('/credits', name: 'credits')]
    public function credits(): Response
    {
        return $this->render('informations/credits.html.twig', [
        ]);
    }
    #[Route('/contact_us', name: 'contact_us')]
    public function contactUs(): Response
    {
        return $this->render('informations/contactus.html.twig', [
        ]);
    }
    #[Route('/donate', name: 'donate')]
    public function donate(): Response
    {
        return $this->render('informations/donate.html.twig', [
        ]);
    }
}
