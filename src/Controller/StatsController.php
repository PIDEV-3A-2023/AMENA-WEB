<?php

namespace App\Controller;

use App\Repository\ColisRepository;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;


class StatsController extends AbstractController
{
    #[Route('/stats', name: 'app_stats_index')]
    public function index(ColisRepository $colisRepository): Response
    {
        $totalColis = $colisRepository->createQueryBuilder('c')
            ->select('COUNT(c.id)')
            ->getQuery()
            ->getSingleScalarResult();

        $livres = $colisRepository->countByStatut('livré');
        $attentes = $colisRepository->countByStatut('en attente');

        
        $data = [
            'labels' => ['Livré', 'En attente','Total'],
            'datasets' => [
                [
                    'label' => 'Nombre de colis',
                    'backgroundColor' => ['#36a2eb', '#ffcd56', '#546e7a'],
                    'data' => [$livres, $attentes,$totalColis],
                ],
            ],
        ];
        

        return $this->render('stats/index.html.twig', [
            'data' => $data,
        ]);
    }
}