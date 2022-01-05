<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Security\Http\Authentication\AuthenticationUtils;


class AccountSurgeonController extends AbstractController
{
    #[Route('/account/surgeon', name: 'account_surgeon')]
    public function index(AuthenticationUtils $authenticationUtils): Response
    {
        $this->denyAccessUnlessGranted('IS_AUTHENTICATED_FULLY');
        

        return $this->render('account_surgeon/index.html.twig', [
            'controller_name' => 'AccountSurgeonController',
        ]);
    }
}
