<?php

namespace App\Controller;

use App\Entity\Availability;
use App\Entity\User;
use App\Form\InsertAvailabilityType;
use App\Repository\AvailabilityRepository;
use App\Repository\UserRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

use Symfony\Component\Routing\Annotation\Route;


class AccountController extends AbstractController
{
    #[Route('/profile', name: 'account')]
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
            
        ]);
    }
    
    #[Route('/profile/nurse', name: "account_nurse")]
    public function renderAccountNurse(): Response
    {
        return $this->render('account/account_nurse.html.twig', ['controller_name' => 'AccountController',
    ]);
    }

    #[Route('/profile/surgeon', name: "account_surgeon")]
    public function renderAccountSurgeon(): Response
    {
        return $this->render('account/account_surgeon.html.twig', ['controller_name' => 'AccountController',
    ]);
    }
}


