<?php

namespace App\Controller;
use App\Entity\User;
use App\Form\UserType;
use App\Repository\CpsCardOwnerRepository;
use App\Repository\UserRepository;
use Doctrine\ORM\EntityManagerInterface;
use App\Security\SecurityAuthenticator;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\RequestStack;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\PasswordHasher\Hasher\UserPasswordHasherInterface;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Security\Http\Authentication\UserAuthenticatorInterface;

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
        UserAuthenticatorInterface $userAuthenticatorInterface,
        SecurityAuthenticator $securityAuthenticator,
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
                return $userAuthenticatorInterface->authenticateUser($user,$securityAuthenticator,$request);
            } else {
                $this->addFlash('registrationError', 'Un compte existe déjà pour cette adresse mail');
                return $this->redirectToRoute('registration');
            }
        }
        return $this->render('registration/registration.html.twig', [
            'form' => $form->createView(),
            'numeroCarte' => $session->get('numeroCarte'),
            'nomDexercice' => $session->get('nomDexercice'),
            'prenomDexercice' => $session->get('prenomDexercice'),
            'codeProfession' => $session->get('codeProfession')
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
    #[Route('/profile/nusre/active', name: "account_nurse_active")]
    public function addNurseActive( EntityManagerInterface $entityManagerInterface):RedirectResponse
    {
        /** @var \App\Entity\User $user */
        $user = $this->getUser();

        if ($_POST['nurseActive'] = 'nurseActive') {
            $user->setInstantAvailability('Active');
            $entityManagerInterface->flush();
        }
        return $this->redirectToRoute('account');;
        
    }


    #[Route('/profile/nusre/inactive', name: "account_nurse_inactive")]
    public function addNurseInactive( EntityManagerInterface $entityManagerInterface):RedirectResponse
    {
        /** @var \App\Entity\User $user */
        $user = $this->getUser();

        if ($_POST['nurseInactive'] = 'nurseInactive') {
            $user->setInstantAvailability('Inactive');
            $entityManagerInterface->flush();
        }
        return $this->redirectToRoute('account');;
    }

}
