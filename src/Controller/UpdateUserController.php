<?php

namespace App\Controller;

use App\Entity\User;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class UpdateUserController extends AbstractController
{
    #[Route('/update/user/{id}', name: 'update_user')]
    public function index(User $user): Response
    {
        return $this->render('update_user/index.html.twig', [
            
        ]);
    }
}
