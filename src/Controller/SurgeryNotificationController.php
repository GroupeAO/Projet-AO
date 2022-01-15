<?php

namespace App\Controller;

use App\Entity\SurgeryNotification;
use App\Form\SurgeryNotificationType;
use App\Repository\SurgeryNotificationRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class SurgeryNotificationController extends AbstractController
{
    #[Route('/profile/surgery_notification', name: 'surgery_notification')]
    public function index(Request $request, EntityManagerInterface $entityManagerInterface,
    ): Response
    {
         /** @var \App\Entity\User $user */
        $user = $this->getUser();

        $surgeryNotification= new SurgeryNotification;
        $form = $this->createForm(SurgeryNotificationType::class, $surgeryNotification);
        $form->handleRequest($request);
        if($form->isSubmitted() && $form->isValid()){

            //we set the foreign key user id and then add the data in db
            $surgeryNotification->setFkIdUser($user);
            $entityManagerInterface->persist($surgeryNotification);
            $entityManagerInterface->flush();
            $this->addFlash('addSurgerySuccess', 'Votre annonce de chirugie a bien été ajoutée');
            return $this->redirectToRoute('account_surgeon');
        }
        return $this->render('surgery_notification/index.html.twig', [
            'form' => $form->createView(),
        ]);
    }

    #[Route('/profile/edit_user_notification/{id}', name: 'edit_surgery_notification')]
    public function editSurgeryNotification(Request $request, EntityManagerInterface $entityManagerInterface,
    SurgeryNotificationRepository $surgeryNotificationRepository,
    int $id
    ): Response
    {
         /** @var \App\Entity\User $user */
        $user = $this->getUser();
        $surgeryNotification= new SurgeryNotification;
        //we get the id link to the surgery notification to prefill the form
        $surgeryNotification=$surgeryNotificationRepository->find($id);
        $form = $this->createForm(SurgeryNotificationType::class, $surgeryNotification);
        $form->handleRequest($request);

        if($form->isSubmitted() && $form->isValid()){
            $entityManagerInterface->flush();
            $this->addFlash('editSurgerySuccess', 'Votre profile a bien été modifié');
                return $this->redirectToRoute('account_surgeon');
        }
        return $this->render('surgery_notification/edit_surgery.html.twig', [
            'form' => $form->createView(),
        ]);
    }


    #[Route('/profile/surgery_notification_display/{id}', name: 'display_user_surgery')]
    public function displaySurgeryNotification(
    EntityManagerInterface $entityManagerInterface,
    SurgeryNotificationRepository $surgeryNotificationRepository,
    int $id,
    ): Response
    {
             /** @var \App\Entity\User $user */
            $user = $this->getUser();
            $id=$user->getId();
        $surgeries=$surgeryNotificationRepository->displayUserSurgeryNotificationQuery($id, $entityManagerInterface);
    
        return $this->render('surgery_notification/display_surgery.html.twig', [
            'surgeries' => $surgeries
        ]);
    }
    #[Route('/profile/surgery_delete_user_surgery/{id}', name: 'delete_surgery_notification')]
    public function deleteUserAvailability(
    EntityManagerInterface $entityManagerInterface,
    SurgeryNotificationRepository $surgeryNotificationRepository,
    int $id
    ): RedirectResponse    
        {
             /** @var \App\Entity\User $user */
            $user = $this->getUser();
            $idUser=$user->getId();
            
            $surgery=$surgeryNotificationRepository->find($id);
            $entityManagerInterface->remove($surgery);
            $entityManagerInterface->flush();

            $this->addFlash('removeSurgerySuccess', "La disponibilité a bien été supprimé");
            return $this->redirectToRoute('account', $user=['id' => $idUser ]);
        } 
}
