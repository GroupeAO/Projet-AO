<?php

namespace App\Controller;

use App\Entity\User;
use App\Form\UserType;
use App\Repository\CpsCardOwnerRepository;
use App\Repository\UserRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\RequestStack;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\PasswordHasher\Hasher\UserPasswordHasherInterface;
use Symfony\Component\Routing\Annotation\Route;

class RegistrationController extends AbstractController
{
    private $requestStack;

    public function __construct(RequestStack $requestStack)
    {
        $this->requestStack = $requestStack;
    }

    #[Route('/registration', name: 'registration')]
    public function index(
        Request $request,
        EntityManagerInterface $entityManagerInterface,
        UserPasswordHasherInterface $userPasswordHasherInterface,
        UserRepository $userRepository,
    ): Response 
    {
 // User form creation
        $session = $this->requestStack->getSession();
        
        $user = new User;
        $form = $this->createForm(UserType::class, $user);
        $form->handleRequest($request);
// Check if CPS check is filled out (and role is set), if not redirect to CPS check        
        if ($session->get('codeProfession')==!10 || $session->get('codeProfession')==!60){
            return $this->redirectToRoute('cps_check');
        }

        if($form->isSubmitted() && $form->isValid()){

            if ($this->isEmailExist($user->getEmail(), $userRepository)===false)  {

                $this->addUser($entityManagerInterface,$user, $userPasswordHasherInterface);
                $this->addFlash('registrationSuccess', 'Votre inscription est bien terminée');
                return $this->redirectToRoute('home');
                
                    //  $userEmail=$user->getEmail();
                    //    echo "L'email $userEmail existe déja en base de données";
            } else {
                $this->addFlash('registrationError', 'Un compte existe déjà pour cette adresse mail');
                return $this->redirectToRoute('registration');
            }
                
                
                // echo 'Numéro de carte CPS/CPF invalide. Veuillez re-essayer';
            }
            // return $this->redirectToRoute('home');
        return $this->render('registration/registration.html.twig', [
            'form' => $form->createView(),
            'numeroCarte' => $session->get('numeroCarte'),
            'nomDexercice' => $session->get('nomDexercice'),
            'prenomDexercice' => $session->get('prenomDexercice'),
            'codeProfession' => $session->get('codeProfession')
            // 'formCps' => $formCps->createView(),
        ]);
        
    }

public function addUser( EntityManagerInterface $entityManagerInterface,
User $user,
UserPasswordHasherInterface $userPasswordHasherInterface)
{
    $session=$this->requestStack->getSession();
    if ($session->get('codeProfession') == 10){
        $user->setRoles(['ROLE_SURGEON']);
        } else {
            $user->setRoles(['ROLE_NURSE']);
        }

        $unsecurePassword= $user->getPassword();
        $hashedPassword = $userPasswordHasherInterface->hashPassword(
            $user,
            $unsecurePassword
        );
    $user->setPassword($hashedPassword);
    $entityManagerInterface->persist($user);
    $entityManagerInterface->flush();
}


public function isCpsCardNumberExist(string $numeroCarte, CpsCardOwnerRepository $cpsCardOwnerRepository ):bool
{
    $cpsCardNumberInDB=$cpsCardOwnerRepository->findOneBy(['numeroCarte' => $numeroCarte]);
    if (!empty($cpsCardNumberInDB)) {
        return true;
    }
    return false;
}

public function isEmailExist(string $emailUser,
UserRepository $userRepository) :bool
{
    // search for an existing email in db
    $emailInDB= $userRepository->findOneBy(['email' => $emailUser]);

    if (!empty($emailInDB)) {
        return true;
    }
    return false;
}

}
