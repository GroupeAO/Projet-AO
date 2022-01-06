<?php

namespace App\Controller;

use App\Entity\CpsCardOwner;
use App\Entity\User;
use App\Form\UserType;
use App\Repository\CpsCardOwnerRepository;
use App\Repository\UserRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\PasswordHasher\Hasher\UserPasswordHasherInterface;
use Symfony\Component\Routing\Annotation\Route;

class RegistrationController extends AbstractController
{
    #[Route('/registration', name: 'registration')]
    public function index(
        Request $request,
        EntityManagerInterface $entityManagerInterface,
        UserPasswordHasherInterface $userPasswordHasherInterface,
        UserRepository $userRepository,
        CpsCardOwner $cpsCardOwner,
        CpsCardOwnerRepository $cpsCardOwnerRepository,
    ): Response
    {
        // User from creation
        echo'coucou';
        $user = new User;
        $form = $this->createForm(UserType::class, $user);
        $form->handleRequest($request);
        //check submit  and valid from
        if($form->isSubmitted() && $form->isValid()){
            var_dump($cpsCardOwner);
            $this->checkUser($entityManagerInterface, $userPasswordHasherInterface, $user, $userRepository,$cpsCardOwner,$cpsCardOwnerRepository);
            return $this->redirectToRoute('home');

        }


        return $this->render('registration/index.html.twig', [
            'form' => $form->createView(),
        ]);
    }

public function checkUser(
    EntityManagerInterface $entityManagerInterface,
    UserPasswordHasherInterface $userPasswordHasherInterface,
    User $user,
    UserRepository $userRepository,
    CpsCardOwner $cpsCardOwner,
    CpsCardOwnerRepository $cpsCardOwnerRepository
): RedirectResponse
{
    echo 'in check user';

    //check if email exist in bdd
    if ($this->isEmailExist($user->getEmail(), $userRepository)===false && $this->isCpsCardNumberExist($cpsCardOwner->getNumeroCarte(), $cpsCardOwnerRepository))  {
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

public function isCpsCardNumberExist(string $numeroCarte, CpsCardOwnerRepository $cpsCardOwnerRepository )
{
    echo 'dans la fonction';
    $cpsCardNumberInDB=$cpsCardOwnerRepository->findOneBy(['numero_carte' => $numeroCarte]);
    if (!empty($cpsCardNumberInDB)) {
        return true;
    }
    return false;
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
