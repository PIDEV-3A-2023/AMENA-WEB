<?php

namespace App\Controller;
use App\Entity\User;
use App\Form\UserType;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Doctrine\ORM\EntityManagerInterface;
use App\Entity\Vehicule;
use App\Repository\ReservationRepository;
use Symfony\Component\HttpFoundation\Request;
use App\Entity\Reservation;
use App\Form\ReservationType;
use App\Form\FrontReservationType;
use Dompdf\Dompdf;
use Dompdf\Options; 


class FrontReservationController extends AbstractController
{
    #[Route('/front/reservation', name: 'app_front_reservation')]
    public function index(EntityManagerInterface $entityManager): Response
    {
        $vehicules = $entityManager
        ->getRepository(Vehicule::class)
        ->findAll();
    return $this->render('front_reservation/index.html.twig', [
        'vehicules' => $vehicules,
    ]);
    }

    #[Route('/front/reservation/{idV}', name: 'app_interface_reservation')]
    public function detaille(Request $request,ReservationRepository $reservationRepository,Vehicule $vehicule): Response
    {
        $reservation = new Reservation();
        $form = $this->createForm(FrontReservationType::class, $reservation);
        $form->handleRequest($request);
       
        if ($form->isSubmitted() && $form->isValid()) {
            $reservation->setIdVeh($vehicule) ; 
            $this->denyAccessUnlessGranted('IS_AUTHENTICATED_FULLY');
            $user = $this->getUser();
            $reservation->setIdTrans($user); 
            
         
            $data = $form->getData();
            $valeur1 = $data->getDateDeb(); 
            $valeur2 = $data->getDateFin(); 
            if ($valeur1 > $valeur2) {
                $this->addFlash('Succes', 'The start date cannot be greater than the end date.');
                return $this->redirectToRoute('app_interface_reservation', [
                    'idV' => $vehicule->getIdV(),]);
            } 
            
    
            $interval = $valeur1->diff($valeur2);
            $days = $interval->days;
            $reservation->setSomme($days*$vehicule->getPrix()) ; 
            $reservationRepository->save($reservation, true);
            $this->addFlash('success', 'Reservation ajouté avec succes');
            return $this->redirectToRoute('app_front_reservation', [], Response::HTTP_SEE_OTHER);
        }
       

        return $this->renderForm('front_reservation/showveh.html.twig', [
            'vehicule' => $vehicule,
            'reservation' => $reservation,
            'form' => $form,
        ]);
    }

  
    

}
