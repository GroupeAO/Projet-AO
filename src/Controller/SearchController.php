<?php

namespace App\Controller;

use App\Entity\SurgeryNotification;
use App\Repository\AvailabilityRepository;
use App\Repository\SurgeryNotificationRepository;
use App\Repository\UserRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;


class SearchController extends AbstractController
{
    #[Route('/search', name: 'search')]
    public function index(UserRepository $userRepository): Response
    {
        $name = $_POST['search'] . '%';
        $results=$userRepository->searchUsers($name);

        return $this->render('search/index.html.twig', [
            'name'=>$name,
            'results'=> $results
        ]);
    }
    #[Route('/search/availability', name: 'search_availability')]
    public function searchAvailability(AvailabilityRepository $availabilityRepository, EntityManagerInterface $entityManagerInterface): Response
    {
        $date = $_POST['date'];
        $zipCode=$_POST['zipCode'] . '%';   
        $results=$availabilityRepository->searchAvailabilityQuery($date, $zipCode,  $entityManagerInterface);

        return $this->render('search/searchAvailability.html.twig', [
            'date'=>$date,
            'results'=> $results
        ]);
    }
    #[Route('/search/surgery', name: 'search_surgery')]
    public function searchSurgery(SurgeryNotificationRepository $surgeryNotificationRepository, EntityManagerInterface $entityManagerInterface): Response
    {
        $zipCode=$_POST['zipCode'] . '%';   
        $results=$surgeryNotificationRepository->searchSurgeryQuery($zipCode,$entityManagerInterface);

        return $this->render('search/search_surgery.html.twig', [
            'results'=> $results
        ]);
    }
}
