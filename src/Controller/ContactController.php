<?php

namespace App\Controller;
use App\Form\ContactType;
use SebastianBergmann\Timer\Timer;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Mailer\MailerInterface;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Mime\Email;

class ContactController extends AbstractController
{
    #[Route('/contact', name: 'contact')]
    public function index(Request $request, MailerInterface $mailer)
    {
        $form = $this->createForm(ContactType::class);
        $form->handleRequest($request);
        if($form->isSubmitted() && $form->isValid()) {
            $contactFormData = $form->getData();
            
            $message = (new Email())
                ->from($contactFormData['email'])
                ->to('aideop.com@gmail.com')
                ->subject($contactFormData['subject'])
                ->text( 'Email envoyé via aideop.com/contact
                         Expéditeur : '.$contactFormData['name'].' 
                         Email de l\'expéditeur : '.$contactFormData['email'].'
                         Message : '. $contactFormData['message'],'text/plain');
            $mailer->send($message);
            $this->addFlash('contactSuccess', "Vore message a été envoyé. Merci! Cliquez ici pour revenir vers l'accueil.");
            return $this->redirectToRoute('contact');
        }
        return $this->render('contact/index.html.twig', [
            'form' => $form->createView()
        ]);
    }
    
}
