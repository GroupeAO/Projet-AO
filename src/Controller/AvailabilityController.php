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
    #[Route('/profile/availability', name: 'availability')]
    public function index(Request $request,
    EntityManagerInterface $entityManagerInterface,
    AvailabilityRepository $availabilityRepository,
    ): Response
    {
        /** @var \App\Entity\User $user */
        
        $user = $this->getUser();
        $id=$user->getId();
        
        $availability= new Availability;

        $form = $this->createForm(InsertAvailabilityType::class, $availability);
        $form->handleRequest($request);
        
        if($form->isSubmitted() && $form->isValid()){
            // testing if the nusre has already a registered availability for this timeframe
            $date=$availability->getStartDate();
            $date= $date->format('Y-m-d H:i:s');
            $availabilities=$availabilityRepository->checkAvailabilityQuery($date,$id, $entityManagerInterface);

            if ($availabilities) {
                $this->addFlash('addAvailabiltyError', "Vous êtes déja enrgistré comme disponible sur cette période ou une partie de cette période.");
                return $this->redirectToRoute('availability');

            }
            $availability->getUsers()->add($user);
            $user->getFkavailability()->add($availability);

            $entityManagerInterface->persist($availability);
            $entityManagerInterface->flush();
            $this->addFlash('addAvailabiltySuccess', "La periode de disponibilité a bien été ajoutée.");
            return $this->redirectToRoute('availability');
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
    public function editAvailability(
    Request $request,
    EntityManagerInterface $entityManagerInterface,
    AvailabilityRepository $availabilityRepository,
    int $id,
    ): Response
    {
         /** @var \App\Entity\User $user */
        $user = $this->getUser();
        $idUser=$user->getId();
        
        $availability= new Availability;

        $availability=$availabilityRepository->find($id);

        $form = $this->createForm(InsertAvailabilityType::class, $availability);
        $form->handleRequest($request);
        
        if($form->isSubmitted() && $form->isValid()){
            $date=$availability->getStartDate();
            $date= $date->format('Y-m-d H:i:s');
            $availabilities=$availabilityRepository->checkAvailabilityQuery($date,$id, $entityManagerInterface);

            if ($availabilities) {
                $this->addFlash('addAvailabiltyError', "Vous êtes déja enrgistré comme disponible sur cette période ou une partie de cette période.");
                return $this->redirectToRoute('availability');
            }
            $this->addFlash('addAvailabiltySuccess', "La periode de disponibilité a bien été modifié.");
            return $this->redirectToRoute('availability');

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
    int $id
    ): RedirectResponse    
        {
            /** @var \App\Entity\User $user */
            $user = $this->getUser();
            $idUser=$user->getId();

            $availabitlity=$availabilityRepository->find($id);
            $entityManagerInterface->remove($availabitlity);
            $entityManagerInterface->flush();
            
            usleep(2000000);

            return $this->redirectToRoute('display_availability', $user=['id' => $idUser ]);
            
        }
    }
