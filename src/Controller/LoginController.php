<?php

namespace App\Controller;

use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use App\Entity\User;
use Symfony\Component\HttpFoundation\Request;

class LoginController extends AbstractController
{
    #[Route('/login', name: 'app_login')]

    public function login(Request $request, EntityManagerInterface $entityManager)
    {
        function hashPassword($password)
        {
            $encodedhash = hash("sha256", $password, true);
            return base64_encode($encodedhash);
        }

        $error = null;
        $email = $request->request->get('email');
        $password = $request->request->get('password');

        if ($email && $password) {
            $userRepository = $entityManager->getRepository(User::class);
            $user = $userRepository->findOneBy(['email' => $email]);

            if ($user) {
                $hashedPassword = hashPassword($password);
                if ($hashedPassword === $user->getMotPass()) {
                    // Authentification réussie, rediriger vers la page de profil de l'utilisateur
                    return $this->redirectToRoute('app_user_show', ['id' => $user->getId()]);
                } else {
                    $error = "Mot de passe incorrect";
                }
            } else {
                $error = "Aucun utilisateur trouvé avec cet email";
            }
        }

        return $this->render('login/login.html.twig', [
            'controller_name' => 'LoginController',
            'error' => $error

        ]);
    }
}
