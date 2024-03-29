<?php

namespace App\Controller;

use App\Entity\Competition;
use App\Form\CompetitionType;
use App\Repository\CompetitionRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

#[Route('/competition')]
class CompetitionController extends AbstractController
{
    #[Route('/', name: 'app_competition_index', methods: ['GET'])]
    public function index(CompetitionRepository $competitionRepository): Response
    {
       $competition = $competitionRepository->findBy([],['id' =>'DESC']);
        return $this->render('competition/index.html.twig', [
            'competitions' => $competition,
        ]);
    }

    #[Route('/new', name: 'app_competition_new', methods: ['GET', 'POST'])]
    public function new(Request $request, CompetitionRepository $competitionRepository): Response
    {
        $competition = new Competition();
        $form = $this->createForm(CompetitionType::class, $competition);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $data = $form->getData();
            $valeur1 = $data->getDateDeb(); 
            $valeur2 = $data->getDateFin(); 
            if($valeur1 > $valeur2) {
                return $this->renderForm('competition/new.html.twig', [
                    'competition' => $competition,
                    'form' => $form,
                ]);
            } 
            $competitionRepository->save($competition, true);
            return $this->redirectToRoute('app_competition_index', [], Response::HTTP_SEE_OTHER);
            

        }

        return $this->renderForm('competition/new.html.twig', [
            'competition' => $competition,
            'form' => $form,
        ]);
    }

    #[Route('/{id}', name: 'app_competition_show', methods: ['GET'])]
    public function show(Competition $competition): Response
    {
        return $this->render('competition/show.html.twig', [
            'competition' => $competition,
        ]);
    }

    #[Route('/{id}/edit', name: 'app_competition_edit', methods: ['GET', 'POST'])]
    public function edit(Request $request, Competition $competition, CompetitionRepository $competitionRepository): Response
    {
        $form = $this->createForm(CompetitionType::class, $competition);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $competitionRepository->save($competition, true);

            return $this->redirectToRoute('app_competition_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('competition/edit.html.twig', [
            'competition' => $competition,
            'form' => $form,
        ]);
    }

    #[Route('/{id}', name: 'app_competition_delete', methods: ['POST'])]
    public function delete(Request $request, Competition $competition, CompetitionRepository $competitionRepository): Response
    {
        if ($this->isCsrfTokenValid('delete'.$competition->getId(), $request->request->get('_token'))) {
            $competitionRepository->remove($competition, true);
        }

        return $this->redirectToRoute('app_competition_index', [], Response::HTTP_SEE_OTHER);
    }
    
    
    /*soooort*/
    #[Route('/sort-by-nbp', name: 'app_competition_sort_by_nbp', methods: ['GET'])]
public function sortByNbp(CompetitionRepository $competitionRepository): Response
{
    $competitions = $competitionRepository->findAll();
    usort($competitions, function($a, $b) {
        return $a->getNbp() <=> $b->getNbp();
    });
    return $this->render('competition/sorted.html.twig', [
        'competitions' => $competitions,
    ]);
}

/*soort*/
/*#[Route('/sort', name: 'app_competition_sort')]
public function sort(CompetitionRepository $competitionRepository): Response
{
    $competitions = $competitionRepository->findAll();
    usort($competitions, function ($a, $b) {
        return count($a->getParticipants()) <=> count($b->getParticipants());
    });

    return $this->render('competition/sorted_list.html.twig', [
        'competitions' => $competitions,
    ]);
}*/
}
