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
        $name ='%' . strtoupper($_POST['search']) . '%';
        $name = str_replace(" ","", $name );
        
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
        
        /* cheking if the search result is empty */ 
        $empty=false;
        if (!$results) {
            $empty = true;
        }

        return $this->render('search/searchAvailability.html.twig', [
            'date'=>$date,
            'results'=> $results,
            'empty' => $empty
        ]);
    }
    #[Route('/search/surgery', name: 'search_surgery')]
    public function searchSurgery(SurgeryNotificationRepository $surgeryNotificationRepository, EntityManagerInterface $entityManagerInterface): Response
    {
        $zipCode=$_POST['zipCode'] . '%';   
        $results=$surgeryNotificationRepository->searchSurgeryQuery($zipCode,$entityManagerInterface);
        $empty= false;
        if (!$results) {
            $empty = true;
        }

        return $this->render('search/search_surgery.html.twig', [
            'results'=> $results,
            'empty' => $empty
        ]);
    }
}
