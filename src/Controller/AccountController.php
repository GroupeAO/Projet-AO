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

    #[Route('/account/surgeon', name: "account_surgeon")]
    public function renderAccountSurgeon(): Response
    {
        return $this->render('account/account_surgeon.html.twig', ['controller_name' => 'AccountController',
    ]);
    }
    #[Route('/account/display_availability/{id}', name: 'display_availability')]
    public function displayAvailability(
    EntityManagerInterface $entityManagerInterface,
    AvailabilityRepository $availabilityRepository,
    int $id,
    ): Response
    {
        /** @var \App\Entity\User $user */
        
        $user = $this->getUser();
        $id=$user->getId();
        $availabilities=$availabilityRepository->displayUserAvailabilityQuery($id, $entityManagerInterface);
    
        return $this->render('account/display_availability.html.twig', [
            'availabilities' => $availabilities
        ]);
    }

    #[Route('/account/user_edit_availability/{id}', name: 'user_edit_availability')]
    public function editAvailability(Availability $availability,
    Request $request,
    EntityManagerInterface $entityManagerInterface,
    AvailabilityRepository $availabilityRepository,
    int $id,
    ): Response
    {
         /** @var \App\Entity\User $user */
        $user = $this->getUser();
        $user->getId();
        $availability=$availabilityRepository->find($id);
        $availability= new Availability;

        $availability=$availabilityRepository->find($id);

        $form = $this->createForm(InsertAvailabilityType::class, $availability);
        $form->handleRequest($request);
        
        if($form->isSubmitted() && $form->isValid()){
            $entityManagerInterface->flush();
        }
    
        return $this->render('account/edit_availability.html.twig', [
            'form' => $form->createView()

        ]);
    }

    #[Route('/account/delete_user_availability/{id}', name: 'user_delete_availability')]
    public function deleteUserAvailability(
    EntityManagerInterface $entityManagerInterface,
    AvailabilityRepository $availabilityRepository,
    int $id
    ): RedirectResponse    
        {

            $availabitlity=$availabilityRepository->find($id);
            $entityManagerInterface->remove($availabitlity);
            $entityManagerInterface->flush();
            return $this->redirectToRoute('account');
        }
    }
