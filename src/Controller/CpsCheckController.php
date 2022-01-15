<?php

namespace App\Controller;
use App\Form\CpsType;
use App\Entity\CpsCardOwner;
use App\Repository\CpsCardOwnerRepository;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\RequestStack;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class CpsCheckController extends AbstractController
{
    private $requestStack; 

    public function __construct(RequestStack $requestStack)
    {
        $this->requestStack =$requestStack;
    }


    #[Route('/cps_check', name: 'cps_check')]
    public function index(
        Request $request,
        CpsCardOwnerRepository $cpsCardOwnerRepository
    ): Response  
    {
        // cps stands for 'carte professionnelle de santé'
        //we created a session to transfert the data of the first part of registration to the second part
        $session = $this->requestStack->getSession();
        $cpsOwner = new CpsCardOwner;
        $form = $this->createForm(CpsType::class, $cpsOwner);
        $form->handleRequest($request);        

        if($form->isSubmitted() && $form->isValid()){

            if($this->isCpsCardNumberExist($cpsOwner->getNumeroCarte(), $cpsCardOwnerRepository)===true 
            && ($this->isNameAndCardMatch($cpsOwner, $cpsCardOwnerRepository)===true)){
            //we are getting getting infos in the national database of carte professionnelle de santé owner
                $prenomDexercice = $cpsCardOwnerRepository->findOneBy(['numeroCarte' => $cpsOwner->getNumeroCarte()]);
                $prenomDexercice = $prenomDexercice->getPrenomDexercice();
                $codeProfession = $cpsCardOwnerRepository->findOneBy(['numeroCarte' => $cpsOwner->getNumeroCarte()]);
                $codeProfession = $codeProfession->getCodeProfession();

                $this->addFlash('cpsSuccess', 'Carte CPS/CPF validée. Vous pouvez poursuivre votre inscription.');
                $session->set('numeroCarte', $cpsOwner->getNumeroCarte());
                $session->set('nomDexercice',$cpsOwner->getNomDexercice());
                $session->set('prenomDexercice', $prenomDexercice);
                $session->set('codeProfession', $codeProfession);
            
                return $this->redirectToRoute('registration');
                
            } else {
                $this->addFlash('cpsError', 'Le nom et le numéro de carte CPS/CPF ne correspondent pas.');
                
            } 
        }  
            return $this->render('registration/check_cps.html.twig', [
                'form' => $form->createView(),
            ]);
    }
public function isCpsCardNumberExist(string $numeroCarte, CpsCardOwnerRepository $cpsCardOwnerRepository )
{
    //checking if the card number entered by the user exist
    $cpsCardNumberInDB=$cpsCardOwnerRepository->findOneBy(['numeroCarte' => $numeroCarte]);
    if (!empty($cpsCardNumberInDB)) {
        return true;
    }
    return false;
}

public function isNameAndCardMatch($cpsOwner, CpsCardOwnerRepository $cpsCardOwnerRepository)
{
    //checking if the Name entered is the same as the one in the db associated with the card number
    $numeroCarte=$cpsOwner->getNumeroCarte();
    $nomDexercice=$cpsOwner->getNomDexercice();
    $verifiedUser = $cpsCardOwnerRepository->findOneBy(['numeroCarte' => $numeroCarte]);
    $verifiedUserName = $verifiedUser->getNomDexercice();
    if ($nomDexercice==$verifiedUserName){
        return true;
    }
    return false;
}
}