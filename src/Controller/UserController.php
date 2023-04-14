<?php

namespace App\Controller;

use App\Entity\User;
use App\Form\UserType;
use App\Repository\UserRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Form\FormError;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

use Doctrine\Persistence\ManagerRegistry;


#[Route('/user')]
class UserController extends AbstractController
{
    #[Route('/', name: 'app_user_index', methods: ['GET'])]
    public function index(Request $request, ManagerRegistry $registry,UserRepository $userRepository): Response
    {
        
        $users = $userRepository->findBy([], ['id' => 'DESC']);

        $query = $request->query->get('q');

        $users = $registry->getRepository(User::class)
            ->findBySearchQuery($query);
        return $this->render('user/index.html.twig', [
            'users' => $users,
        ]);
    }
    #[Route('/new', name: 'app_user_new', methods: ['GET', 'POST'])]
    public function new(Request $request, EntityManagerInterface $entityManager): Response
    {
        $user = new User();

        function generateToken($length = 32)
        {
            return base64_encode(random_bytes($length));
        }


        function hashPassword($password)
        {
            $encodedhash = hash("sha256", $password, true);
            return base64_encode($encodedhash);
        }




        $form = $this->createForm(UserType::class, $user);

        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {




            $password = $form->get('motpass')->getData();
            if (empty($password)) {
                $form->get('motpass')->addError(new FormError('Veuillez entrer un mot de passe.'));
                return $this->renderForm('user/new.html.twig', [
                    'user' => $user,
                    'form' => $form,
                ]);
            }
            if ($password !== null) {
                $hash = hashPassword($password);
                $user->setMotPass($hash);
                $token = generateToken();
                $user->setStatus(false);
                //$user->setScore("0000000"); // Initialisation du score à 0
                $user->setDatecreationc(new \DateTime());
                $user->setTokenEx(new \DateTime());
                $user->setCompteEx(new \DateTime());
                $user->setToken($token);
            }

            $entityManager->persist($user);
            $entityManager->flush();
            // dd($user)
            return $this->redirectToRoute('app_user_index', [], Response::HTTP_SEE_OTHER);
        } else {
            dump($form->getErrors(true, true));
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
    public function edit(Request $request, User $user, EntityManagerInterface $entityManager): Response
    {

        function phashPassword($password)
        {
            $encodedhash = hash("sha256", $password, true);
            return base64_encode($encodedhash);
        }
        $form = $this->createForm(UserType::class, $user);

        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            // Get the submitted password value
            $newPassword = $form->get('motpass')->getData();

            // Check if the password field is not empty


            if (!empty($newPassword)) {
                // If the password field is not empty, update the user's password

                $hash = phashPassword($newPassword);
                $user->setMotpass($hash);
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

            $entityManager->flush();

            return $this->redirectToRoute('app_user_Profile', ['id' => $user->getId()]);
        }

        return $this->renderForm('user/edit.html.twig', [
            'user' => $user,
            'form' => $form,
        ]);
    }


    #[Route('/{id}', name: 'app_user_delete', methods: ['POST'])]
    public function delete(Request $request, User $user, EntityManagerInterface $entityManager): Response
    {
        if ($this->isCsrfTokenValid('delete' . $user->getId(), $request->request->get('_token'))) {
            $entityManager->remove($user);
            $entityManager->flush();
        }

        return $this->redirectToRoute('app_user_index', [], Response::HTTP_SEE_OTHER);
    }




    #[Route('/profile/{id}', name: 'app_user_Profile', methods: ['GET'])]

    public function showUser($id): Response
    {
        $user = $this->getDoctrine()->getRepository(User::class)->find($id);
        return $this->render('user/profile.html.twig', [
            'user' => $user,
            'form'
        ]);
    }
}
