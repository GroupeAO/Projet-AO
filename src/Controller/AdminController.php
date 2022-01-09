<?php

namespace App\Controller;

use App\Entity\Availability;
use App\Entity\User;
use App\Form\UserType;
use App\Repository\AvailabilityRepository;
use App\Repository\CpsCardOwnerRepository;
use App\Repository\UserRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\PasswordHasher\Hasher\UserPasswordHasherInterface;
use Symfony\Component\Routing\Annotation\Route;

class AdminController extends AbstractController
{
    #[Route('/admin', name: 'admin')]
    public function index(UserRepository $userRepository, AvailabilityRepository $availabilityRepository): Response
    {   $hasAccess = $this->isGranted('ROLE_ADMIN');
        $this->denyAccessUnlessGranted('ROLE_ADMIN');

        $users = $userRepository->findAll();
        $availabilities=$availabilityRepository->findAll();

        return $this->render('admin/index.html.twig', [
            'users' => $users,
            'availabilities'=> $availabilities,
        ]);
    }
    #[Route('/admin/user/{id}', name: 'admin_edit_user')]
        public function editUser(     Request $request,
        EntityManagerInterface $entityManagerInterface,
        UserPasswordHasherInterface $userPasswordHasherInterface,
        UserRepository $userRepository,
        int $id
        ): Response    
    {
        // User from creation
        $user = new User;
        $user=$userRepository->find($id);
        $form = $this->createForm(UserType::class, $user);
        $form->handleRequest($request);
        
        if($form->isSubmitted() && $form->isValid()){

                $this->checkUser($entityManagerInterface, $userPasswordHasherInterface, $user, $userRepository);
            // return $this->redirectToRoute('home');
        }
        return $this->render('registration/index.html.twig', [
            'form' => $form->createView(),
            // 'formCps' => $formCps->createView(),
        ]);
    }
    #[Route('/admin/deleteUser/{id}', name: 'admin_delete_user')]
    public function deleteUser(
    EntityManagerInterface $entityManagerInterface,
    UserRepository $userRepository,
    int $id
    ): RedirectResponse    
        {
            $user=$userRepository->find($id);
            $entityManagerInterface->remove($user);
            $entityManagerInterface->flush();
            return $this->redirectToRoute('admin');
        }
        #[Route('/admin/deleteAvailability/{id}', name: 'admin_delete_availability')]
        public function deleteAvailability(
        EntityManagerInterface $entityManagerInterface,
        AvailabilityRepository $availabilityRepository,
        int $id
        ): RedirectResponse    
            {
                $availabitlity=$availabilityRepository->find($id);
                $entityManagerInterface->remove($availabitlity);
                $entityManagerInterface->flush();
                return $this->redirectToRoute('admin');
            }

    public function checkUser(
    EntityManagerInterface $entityManagerInterface,
    UserPasswordHasherInterface $userPasswordHasherInterface,
    User $user,
    UserRepository $userRepository,
    ): RedirectResponse
    {

        /** @var \App\Entity\User $user */
        $user = $this->getUser();
        $currentEmail=$user->getEmail();
    //check if email exist in bdd

        
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

        if ($_POST['role'] == 'ROLE_SURGEON'){
        $user->setRoles(['ROLE_SURGEON']);
        }else{
            $user->setRoles(['ROLE_NURSE']);
        }
        $entityManagerInterface->flush();
    }

    public function isCpsCardNumberExist(string $numeroCarte, CpsCardOwnerRepository $cpsCardOwnerRepository )
    {
        $cpsCardNumberInDB=$cpsCardOwnerRepository->findOneBy(['numeroCarte' => $numeroCarte]);
        if (!empty($cpsCardNumberInDB)) {
            return true;
        }
        return false;
    }
}
