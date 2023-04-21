<?php

namespace App\Controller;

use App\Entity\Competition;
use App\Entity\Gifts;
use App\Entity\User;
use App\Form\UserType;
use App\Form\CompetitionType;
use App\Repository\CompetitionRepository;
use App\Repository\GiftsRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class FrontCompetitionController extends AbstractController
{
    #[Route('/front/competition', name: 'app_front_competition')]
    public function index(CompetitionRepository $competitionRepository): Response
    {
        return $this->render('front_competition/index.html.twig', [
            'competitions' => $competitionRepository->findAll(),
        ]);
    }

    #[Route('/front/competition/cadeaux', name: 'app_front_cadeaucompetition')]
    public function afficherCadeaux(GiftsRepository $cadeauxRepository): Response
    {
        $this->denyAccessUnlessGranted('IS_AUTHENTICATED_FULLY');
        $user = $this->getUser();
        return $this->render('front_competition/cadeauxcompetition.html.twig', [
            'gifts' => $cadeauxRepository->findAll(),'user' => $user
        ]);
    }
    
}
