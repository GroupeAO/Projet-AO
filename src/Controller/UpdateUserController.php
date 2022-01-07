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
    #[Route('/update_user', name: 'update_user')]
    public function index(
        Request $request,
        EntityManagerInterface $entityManagerInterface,
        UserPasswordHasherInterface $userPasswordHasherInterface,
        UserRepository $userRepository,
    ): Response    
    {
    // User from creation
        $user = new User;
        $form = $this->createForm(UpdateUserType::class, $user);
        $form->handleRequest($request);


        //check submit  and valid from
            
        if($form->isSubmitted() && $form->isValid()){
            $this->checkUser($entityManagerInterface, $userPasswordHasherInterface, $user, $userRepository);
            return $this->redirectToRoute('home');
        }
        return $this->render('update_user/index.html.twig', [
            'form' => $form->createView(),
        ]);
    }

    public function checkUser(
        EntityManagerInterface $entityManagerInterface,
        UserPasswordHasherInterface $userPasswordHasherInterface,
        User $user,
        UserRepository $userRepository,
    ): RedirectResponse
    {
    //check if email exist in bdd
    if ($this->isEmailExist($user->getEmail(), $userRepository)===false)  {
        $unsecurePassword= $user->getPassword();
        $hashedPassword = $userPasswordHasherInterface->hashPassword(
            $user,
            $unsecurePassword
        );
        $this->addUser($entityManagerInterface, $user, $hashedPassword);
        return $this->redirectToRoute('home');
    }else{
        $userEmail=$user->getEmail();
                echo "L'email $userEmail existe déja en base de données";
                return $this->redirectToRoute('registration');
        }
    }

    public function addUser( EntityManagerInterface $entityManagerInterface,
        User $user,
        $hashedPassword)
        {
            $user->setPassword($hashedPassword);

            if ($_POST['role'] == 'ROLE_SURGEON'){
            $user->setRoles(['ROLE_SURGEON']);
            }else{
                $user->setRoles(['ROLE_NURSE']);
            }

            
            $entityManagerInterface->persist($user);
            $entityManagerInterface->flush();
        }

        public function isEmailExist(string $emailUser,
        UserRepository $userRepository): bool
        {
            // search for an existing email in db
            $emailInDB= $userRepository->findOneBy(['email' => $emailUser]);

            if (!empty($emailInDB)) {
                return true;
            }
            return false;
    }
}
