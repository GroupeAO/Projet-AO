<?php

namespace App\Controller;

use App\Entity\User;
use App\Form\UpdateUserType;
use App\Repository\UserRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\PasswordHasher\Hasher\UserPasswordHasherInterface;
use Symfony\Component\Routing\Annotation\Route;

class UpdateUserController extends AbstractController
{
    #[Route('/update_user/{id}', name: 'update_user')]
    public function index(
        Request $request,
        EntityManagerInterface $entityManagerInterface,
        UserPasswordHasherInterface $userPasswordHasherInterface,
        UserRepository $userRepository, int $id
    ): Response    
    {
    // User from creation
        $user = new User;
        /** @var \App\Entity\User $user */
        $user = $this->getUser();
        $id=$user->getId();
        $form = $this->createForm(UpdateUserType::class, $user);
        $form->handleRequest($request);


        //check submit  and valid from
            
        if($form->isSubmitted() && $form->isValid()){
            $this->checkUser($entityManagerInterface, $userPasswordHasherInterface, $user, $userRepository);
            echo 'cool';
           // return $this->redirectToRoute('account');
        }
        return $this->render('update_user/index.html.twig', [
            'form' => $form->createView(),
            'id'=>$id
        ]);
    }

    public function checkUser(
        EntityManagerInterface $entityManagerInterface,
        UserPasswordHasherInterface $userPasswordHasherInterface,
        User $user,
    ): RedirectResponse
    {
        $unsecurePassword= $user->getPassword();
        $hashedPassword = $userPasswordHasherInterface->hashPassword(
            $user,
            $unsecurePassword
        );
        $this->addUser($entityManagerInterface, $user, $hashedPassword);
        return $this->redirectToRoute('home');
    }

    public function addUser( EntityManagerInterface $entityManagerInterface,
        User $user,
        $hashedPassword)
        {
            $user->setPassword($hashedPassword);

            // if ($_POST['role'] == 'ROLE_SURGEON'){
            // $user->setRoles(['ROLE_SURGEON']);
            // }else{
            //     $user->setRoles(['ROLE_NURSE']);
            // }
            $entityManagerInterface->flush();
        }
    
}
