<?php

namespace App\Controller;

use App\Entity\Availability;
use App\Entity\User;
use App\Form\InsertAvailabilityType;
use App\Repository\AvailabilityRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
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

}
