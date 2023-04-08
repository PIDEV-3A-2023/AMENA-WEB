<?php

namespace App\Controller;

use App\Entity\User;
use App\Form\UserType;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Validator\Constraints\DateTime;
use Symfony\Component\Validator\Constraints\Uuid;
use Doctrine\Persistence\ManagerRegistry;

#[Route('/user')]
class UserController extends AbstractController
{
    #[Route('/', name: 'app_user_index', methods: ['GET'])]
    public function index(Request $request, ManagerRegistry $registry): Response
    {
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
            if ($password !== null) {
                $hash = hashPassword($password);
                $user->setMotPass($hash);
                $token = generateToken();
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
        return $this->render('user/profile.html.twig', [
            'user' => $user,
        ]);
    }

    #[Route('/{id}/edit', name: 'app_user_edit', methods: ['GET', 'POST'])]
    public function edit(Request $request, User $user, EntityManagerInterface $entityManager): Response
    {
        $form = $this->createForm(UserType::class, $user);

        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {


            
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

            return $this->redirectToRoute('app_user_index', [], Response::HTTP_SEE_OTHER);
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




    #[Route('/profile/{id}', name: 'app_user_profile', methods: ['GET'])]

    public function showUser($id): Response
    {
        $user = $this->getDoctrine()->getRepository(User::class)->find($id);
        return $this->render('user/profile.html.twig', [
            'user' => $user,
            'form'
        ]);
    }
}
