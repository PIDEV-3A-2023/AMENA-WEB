<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ErrorController extends AbstractController
{
    #[Route('/error', name: 'app_error')]
<<<<<<< Updated upstream
    public function show(): Response
=======
    public function index(): Response
>>>>>>> Stashed changes
    {
        return $this->render('error/index.html.twig', [
            'controller_name' => 'ErrorController',
        ]);
    }
<<<<<<< Updated upstream
}
=======
}
>>>>>>> Stashed changes
