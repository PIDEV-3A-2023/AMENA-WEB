<?php

namespace App\Controller;

use App\Entity\User;
use App\Form\User1Type;
use App\Repository\UserRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;

#[Route('/admin')]
class AdminController extends AbstractController
{
    #[Route('/search', name: 'app_admin_search', methods: ['GET'])]
    public function searchStudentx(Request $request, NormalizerInterface $Normalizer)
    {
        //die("test");
        $repository = $this->getDoctrine()->getRepository(User::class);
        $requestString = $request->get('searchValue');
        $users = $repository->findBySearchQuerya($requestString);
        $jsonContent = $Normalizer->normalize($users, 'json', ['groups' => 'user']);
        $retour = json_encode($jsonContent);
        return new Response($retour);
    }


    #[Route('/', name: 'app_admin_index', methods: ['GET'])]
    public function index(UserRepository $userRepository): Response
    {
        $user = $this->getUser();
        if ($user && $user->getRoles()[0] == "ROLE_ADMIN") {


            return $this->render('admin/index.html.twig', [
                'users' => $userRepository->findAll(),
            ]);
        }
    }

    #[Route('/new', name: 'app_admin_new', methods: ['GET', 'POST'])]
    public function new(Request $request, UserRepository $userRepository): Response
    { {
            $user = new User();
            $form = $this->createForm(User1Type::class, $user);
            $form->handleRequest($request);

            if ($form->isSubmitted() && $form->isValid()) {
                $userRepository->save($user, true);

                return $this->redirectToRoute('app_admin_index', [], Response::HTTP_SEE_OTHER);
            }

            return $this->renderForm('admin/new.html.twig', [
                'user' => $user,
                'form' => $form,
            ]);
        }
    }
    #[Route('/{id}', name: 'app_admin_show', methods: ['GET'])]

    public function show(User $user): Response
    {
        return $this->render('admin/show.html.twig', [
            'user' => $user,
        ]);
    }

    #[Route('/edit/{id}', name: 'app_admin_edit', methods: ['GET', 'POST'])]
    public function edit(Request $request, User $user, UserRepository $userRepository): Response
    {
        $form = $this->createForm(User1Type::class, $user);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $userRepository->save($user, true);

            return $this->redirectToRoute('app_admin_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('admin/edit.html.twig', [
            'user' => $user,
            'form' => $form,
        ]);
    }

    #[Route('/{id}', name: 'app_admin_delete', methods: ['POST'])]
    public function delete(Request $request, User $user, UserRepository $userRepository): Response
    {
        if ($this->isCsrfTokenValid('delete' . $user->getId(), $request->request->get('_token'))) {
            $userRepository->remove($user, true);
        }

        return $this->redirectToRoute('app_admin_index', [], Response::HTTP_SEE_OTHER);
    }
}
