<?php

namespace App\Controller;
use App\Form\CpsType;
use App\Entity\CpsCardOwner;
use App\Repository\CpsCardOwnerRepository;
use Doctrine\ORM\EntityManagerInterface;
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
        EntityManagerInterface $entityManagerInterface,
        CpsCardOwnerRepository $cpsCardOwnerRepository
    ): Response  
    {
        // cps stands for 'carte professionnelle de santé'
        $session = $this->requestStack->getSession();
        $cpsOwner = new CpsCardOwner;
        $form = $this->createForm(CpsType::class, $cpsOwner);
        $form->handleRequest($request);        

        if($form->isSubmitted() && $form->isValid()){

            if($this->isCpsCardNumberExist($cpsOwner->getNumeroCarte(), $cpsCardOwnerRepository)===true 
            && ($this->isNameAndCardMatch($cpsOwner, $cpsCardOwnerRepository)===true)){

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
    $cpsCardNumberInDB=$cpsCardOwnerRepository->findOneBy(['numeroCarte' => $numeroCarte]);
    if (!empty($cpsCardNumberInDB)) {
        return true;
    }
    return false;
}

public function isNameAndCardMatch($cpsOwner, CpsCardOwnerRepository $cpsCardOwnerRepository)
{
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