<?php

namespace App\Controller;

use App\Entity\Availability;
use App\Entity\User;
use App\Form\InsertAvailabilityType;
use App\Repository\AvailabilityRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class AvailabilityController extends AbstractController
{
    #[Route('/availability', name: 'availability')]
    public function index(Request $request,
    EntityManagerInterface $entityManagerInterface,
    ): Response
    {
        /** @var \App\Entity\User $user */
        
        $user = $this->getUser();
        $idUser=$user->getId();
        
        $availability= new Availability;

        $form = $this->createForm(InsertAvailabilityType::class, $availability);
        $form->handleRequest($request);
        
        if($form->isSubmitted() && $form->isValid()){

            $availability->getUsers()->add($user);
            $user->getFkavailability()->add($availability);

            $entityManagerInterface->persist($availability);
            $entityManagerInterface->flush();
    }
        return $this->render('availability/index.html.twig', [
            'form' => $form->createView(),
            

        ]);
    }
    #[Route('/profile/display_availability/{id}', name: 'display_availability')]
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
    
        return $this->render('availability/display_availability.html.twig', [
            'availabilities' => $availabilities
        ]);
    }

    #[Route('/profile/user_edit_availability/{id}', name: 'user_edit_availability')]
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
    
        return $this->render('availability/edit_availability.html.twig', [
            'form' => $form->createView()

        ]);
    }

    #[Route('/profile/delete_user_availability/{id}', name: 'user_delete_availability')]
    public function deleteUserAvailability(
    EntityManagerInterface $entityManagerInterface,
    AvailabilityRepository $availabilityRepository,
    Request $request,
    int $id
    ): RedirectResponse    
        {

            $availabitlity=$availabilityRepository->find($id);
            $entityManagerInterface->remove($availabitlity);
            $entityManagerInterface->flush();
            // return $this->redirectToRoute('display_availability');
            return $this->redirect('availability/display_availability.html.twig',302);
        }

}
