<?php

namespace App\Controller;

use App\Entity\User;
use App\Form\UserType;
use App\Repository\UserRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Form\FormError;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\PasswordHasher\Hasher\UserPasswordHasherInterface;
use Symfony\Component\Routing\Annotation\Route;
use Doctrine\Persistence\ManagerRegistry;
#[Route('/user')]
class UserController extends AbstractController
{
    #[Route('/', name: 'app_user_index', methods: ['GET'])]
    public function index(Request $request,ManagerRegistry $registry,UserRepository $userRepository): Response
    {$query = $request->query->get('q');

        $users = $registry->getRepository(User::class)
            ->findBySearchQuery($query);
        return $this->render('user/index.html.twig', [
            'users' => $users,
            //'users' => $userRepository->findBy([], ['id' => 'DESC']),
        ]);
    }

    #[Route('/new', name: 'app_user_new', methods: ['GET', 'POST'])]
    public function new(Request $request, UserRepository $userRepository, UserPasswordHasherInterface $userPasswordHasher): Response
    {
        function generateToken($length = 32)
        {
            return base64_encode(random_bytes($length));
        }

        $user = new User();
        $form = $this->createForm(UserType::class, $user);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            if (empty($password)) {
                $form->get('password')->addError(new FormError('Veuillez entrer un mot de passe.'));
                return $this->renderForm('user/new.html.twig', [
                    'user' => $user,
                    'form' => $form,
                ]);
            }
            $user->setImage("http://localhost/img/useravatar.jpg");
            $token = generateToken();
            $user->setToken($token);
            $user->setScore("00");
            $user->setCompteEx(new \DateTime());
            $user->setDatecreationc(new \DateTime());
            $user->setTokenEx(new \DateTime());
            $user->setPassword(
                $userPasswordHasher->hashPassword(
                    $user,
                    $form->get('password')->getData()
                )
            );


            $image = $form->get('image')->getData();


            $userRepository->save($user, true);

            return $this->redirectToRoute('app_user_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('user/new.html.twig', [
            'user' => $user,
            'form' => $form,
        ]);
    }

    #[Route('/{id}', name: 'app_user_show', methods: ['GET'])]
    public function show(User $user): Response
    {
        return $this->render('user/show.html.twig', [
            'user' => $user,
        ]);
    }

    #[Route('/{id}/edit', name: 'app_user_edit', methods: ['GET', 'POST'])]
    public function edit(Request $request, User $user, UserRepository $userRepository,UserPasswordHasherInterface $userPasswordHasher): Response
    {
        $form = $this->createForm(UserType::class, $user);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            // Get the submitted password value
            $newPassword = $form->get('password')->getData();

            // Check if the password field is not empty


            if (!empty($newPassword)) {
                $user->setPassword(
                    $userPasswordHasher->hashPassword(
                        $user,
                        $form->get('password')->getData()
                    )
                );
            }
            $image = $form->get('image')->getData();


            if ($image) {
                $fichier = md5(uniqid()) . '.' . $image->guessExtension();

                $image->move(
                    $this->getParameter('images_directory'),
                    $fichier
                );
                dump($image);

                $user->setImage('http://localhost/img/' . $fichier);
            }

            



            $userRepository->save($user, true);

            return $this->redirectToRoute('app_user_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('user/edit.html.twig', [
            'user' => $user,
            'form' => $form,
        ]);
    }

    #[Route('/{id}', name: 'app_user_delete', methods: ['POST'])]
    public function delete(Request $request, User $user, UserRepository $userRepository): Response
    {
        if ($this->isCsrfTokenValid('delete' . $user->getId(), $request->request->get('_token'))) {
            $userRepository->remove($user, true);
        }

        return $this->redirectToRoute('app_user_index', [], Response::HTTP_SEE_OTHER);
    }
}
