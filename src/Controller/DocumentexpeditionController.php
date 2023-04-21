<?php

namespace App\Controller;


use App\Entity\Documentexpedition;
use App\Repository\DocumentexpeditionRepository;
use App\Form\DocumentexpeditionType;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

#[Route('/documentexpedition')]
class DocumentexpeditionController extends AbstractController
{
    #[Route('/', name: 'app_documentexpedition_index', methods: ['GET'])]
    public function index(DocumentexpeditionRepository $colisRepository): Response
    {
        return $this->render('documentexpedition/index.html.twig', [
            'documentexpeditions' => $colisRepository->findAll(),
        ]);
    }

#[Route('/new', name: 'app_documentexpedition_new', methods: ['GET', 'POST'])]
public function new(Request $request, DocumentexpeditionRepository $colisRepository): Response
{
$documentexpedition = new Documentexpedition();
$form = $this->createForm(DocumentexpeditionType::class, $documentexpedition);
$form->handleRequest($request);

if ($form->isSubmitted() && $form->isValid()) {
    $colis = $documentexpedition->getColisId();
    $existingDocument = $colisRepository->findOneBy(['colis_id' => $colis->getId()]);
    if ($existingDocument) {
        $this->addFlash('error', 'Un document d\'expédition existe déjà pour ce colis.');
        return $this->redirectToRoute('app_documentexpedition_new');
    }
    $colisRepository->save($documentexpedition, true);
    $this->addFlash('success', 'Le document d\'expédition a été créé avec succès.');

    return $this->redirectToRoute('app_documentexpedition_index', [], Response::HTTP_SEE_OTHER);
}

return $this->renderForm('documentexpedition/new.html.twig', [
    'documentexpedition' => $documentexpedition,
    'form' => $form,
]);
}

    #[Route('/{id}', name: 'app_documentexpedition_show', methods: ['GET'])]
    public function show(Documentexpedition $documentexpedition): Response
    {
        return $this->render('documentexpedition/show.html.twig', [
            'documentexpedition' => $documentexpedition,
        ]);
    }

    #[Route('/{id}/edit', name: 'app_documentexpedition_edit', methods: ['GET', 'POST'])]
    public function edit(Request $request, Documentexpedition $documentexpedition, DocumentexpeditionRepository $colisRepository): Response
    {
        $form = $this->createForm(DocumentexpeditionType::class, $documentexpedition);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $colisRepository->save($documentexpedition, true);
            $this->addFlash('success', 'Le document d`expedition a été modifier avec succès.');
            return $this->redirectToRoute('app_documentexpedition_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('documentexpedition/edit.html.twig', [
            'documentexpedition' => $documentexpedition,
            'form' => $form,
        ]);
    }

    #[Route('/{id}', name: 'app_documentexpedition_delete', methods: ['POST'])]
    public function delete(Request $request, Documentexpedition $documentexpedition, DocumentexpeditionRepository $colisRepository): Response
    {
        if ($this->isCsrfTokenValid('delete'.$documentexpedition->getId(), $request->request->get('_token'))) {
            $colisRepository->remove($documentexpedition, true);
            $this->addFlash('success', 'Le document d`expedition a été supprimé avec succès.');
        }

        return $this->redirectToRoute('app_documentexpedition_index', [], Response::HTTP_SEE_OTHER);
    }
}


