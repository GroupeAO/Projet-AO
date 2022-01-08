<?php

namespace App\Controller;

use App\Repository\AvailabilityRepository;
use App\Repository\UserRepository;
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
    public function searchAvailability(AvailabilityRepository $availabilityRepository): Response
    {
        $date = $_POST['date'];
        
        $results=$availabilityRepository->searchAvailabilityQuery($date);

        return $this->render('search/searchAvailability.html.twig', [
            'name'=>$date,
            'results'=> $results
        ]);
    }
}
