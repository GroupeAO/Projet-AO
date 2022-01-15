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
        if (isset($_POST['search'])) {
            echo 'in isset';
            $searchFieldContent=str_replace(" ","", $_POST['search'] );
            var_dump($searchFieldContent);
            if (empty($searchFieldContent) || strlen($searchFieldContent)<= 2) {
                $this->addFlash('searchUserError', 'Votre recherche doit contenir plus de 2 caractère');
                return $this->redirectToRoute('search');
            }
        
        $name ='%' . strtoupper($searchFieldContent) . '%';
        
        $results=$userRepository->searchUsers($name);

        return $this->render('search/index.html.twig', [
            'name'=>$name,
            'results'=> $results
        ]);
    }
    }
    #[Route('/search/availability', name: 'search_availability')]
    public function searchAvailability(AvailabilityRepository $availabilityRepository, EntityManagerInterface $entityManagerInterface): Response
    {   
        if (empty($_POST['date']) || empty($_POST['zipCode'])) {
            $this->addFlash('searchAOError', 'veuillez remplir les champs nécéssaire à la recherche');
                return $this->redirectToRoute('search_availabity');
        }
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
    { if (empty($_POST['zipCode'])) {
        $this->addFlash('searchSurgeryError', 'veuillez remplir les champs nécéssaire à la recherche');
            return $this->redirectToRoute('search_surgery');
    }
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
