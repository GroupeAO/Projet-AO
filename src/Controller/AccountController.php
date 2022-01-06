<?php

namespace App\Controller;

use App\Entity\User;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Component\HttpFoundation\Response;

use Symfony\Component\Routing\Annotation\Route;

class AccountController extends AbstractController
{
    #[Route('/account', name: 'account')]
    public function index(): RedirectResponse
    {
        if ($this->denyAccessUnlessGranted('IS_AUTHENTICATED_FULLY')) {
            return $this->redirectToRoute('home');
            exit();
        }
        $hasAccess = $this->isGranted('ROLE_SURGEON');
        if ($hasAccess != true) {
            return $this->redirectToRoute('account_nurse');
        }else{
            return $this->redirectToRoute('account_surgeon');
        }
        return $this->render('account/index.html.twig', [
            'controller_name' => 'AccountController',
        ]);
    }
    
    #[Route('/account/nurse', name: "account_nurse")]
    public function renderAccountNurse(): Response
    {
        return $this->render('account/account_nurse.html.twig', ['controller_name' => 'AccountController',
    ]);
    }
}
