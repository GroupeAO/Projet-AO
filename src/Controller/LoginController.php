<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Security\Http\Authentication\AuthenticationUtils;

class LoginController extends AbstractController
{
    #[Route('/login', name: 'login')]
    public function index(AuthenticationUtils $authenticationUtils, ): Response
    {
          //getting the errors during connexion
        $error= $authenticationUtils->getLastAuthenticationError();
        
          //  we get the last_username entered by the user 
        $lastUsername = $authenticationUtils->getLastUsername();

        return $this->render('login/index.html.twig', [
            'last_username' => $lastUsername,
            'error' => $error
        ]);
    }

    #[Route('/login_registartion', name: 'login_registration')]
    public function loginRegistration(AuthenticationUtils $authenticationUtils, ): Response
    {
          //getting the errors during connexion
        $error= $authenticationUtils->getLastAuthenticationError();
        
          //  we get the last_username entered by the user 
        $lastUsername = $authenticationUtils->getLastUsername();

        return $this->render('login/index.html.twig', [
            'last_username' => $lastUsername,
            'error' => $error
        ]);
    }
}
