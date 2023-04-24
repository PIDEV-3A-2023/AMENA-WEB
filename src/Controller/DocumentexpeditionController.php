<?php

namespace App\Controller;

use Knp\Snappy\Pdf;
use App\Entity\Colis;
use App\Entity\Documentexpedition;
use App\Repository\ColisRepository;
use App\Repository\DocumentexpeditionRepository;
use App\Form\DocumentexpeditionType;
use Knp\Bundle\SnappyBundle\Snappy\Response\PdfResponse;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

#[Route('/documentexpedition')]
class DocumentexpeditionController extends AbstractController
{
    private $pdfService;

    public function __construct(Pdf $pdfService)
    {
        $this->pdfService = $pdfService;
    }

    #[Route('/', name: 'app_documentexpedition_index', methods: ['GET'])]
    public function index(DocumentexpeditionRepository $documentexpeditionRepository, ColisRepository $colisRepository): Response
    {
        $shipments = $colisRepository->findShipmentsWithDates();
        $events = [];
        foreach ($shipments as $shipment) {
            // Ajouter le lien vers la page de détails du colis dans la description de l'événement de livraison
            $events[] = [
                'title' => 'livraison numéro #' . $shipment['id'],
                'start' => $shipment['dateExpedition']->format('Y-m-d'),
                'url' => $this->generateUrl('app_documentexpedition_colis_show', ['id' => $shipment['id']]) // Route vers la page de détails du colis
            ];
        }
        return $this->render('documentexpedition/index.html.twig', [
            'documentexpeditions' => $documentexpeditionRepository->findBy([], ['id' => 'DESC']),
            'events' => json_encode($events)
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
 /*   public function calendarEvents(Request $request, ColisRepository $colisRepository): JsonResponse
{
    $start = new \DateTime($request->get('start'));
    $end = new \DateTime($request->get('end'));
    $colis = $colisRepository->findShippedBetweenDates($start, $end); // Créez une méthode dans votre repository pour récupérer les colis expédiés entre deux dates.

    $events = [];

    foreach ($colis as $colis) {
        $events[] = [
            'title' => 'Colis expédié',
            'start' => $colis->getDateExpedition()->format('Y-m-d'), // Récupérez la date d'expédition de chaque colis.
            'url' => $this->generateUrl('colis_show', ['id' => $colis->getId()]), // Ajoutez un lien vers la page de détails du colis.
        ];
    }

    return new JsonResponse($events);
}*/

#[Route('/colis/{id}', name: 'app_documentexpedition_colis_show', methods: ['GET'])]
public function showcolis(Colis $coli): Response
{
    return $this->render('documentexpedition/showC.html.twig', [
        'coli' => $coli,
    ]);
}
#[Route('/print/{id}', name: 'app_documentexpedition_print', methods: ['GET'])]
public function printAction(Request $request, $id)
    {
        // Récupération du document d'expédition à imprimer
        $documentExp = $this->getDoctrine()->getRepository(Documentexpedition::class)->find($id);

        // Récupération des informations du colis lié au document d'expédition
        $colis = $documentExp->getColisId();

        // Récupération des informations à imprimer
        $nomExpediteur = $colis->getNomExpediteur();
        $adresseExpediteur = $colis->getAdresseExpediteur();
        $nomDestinataire = $colis->getNomDestinataire();
        $adresseDestinataire = $colis->getAdresseDestinataire();
        $dateexpedition = $colis->getDateExpedition();
        $poids = $colis->getPoids();
        $dateSignature = $documentExp->getDateSignature();
        $description = $documentExp->getDescription();

        // Utilisation de KnpSnappyBundle pour générer le PDF
        $html = $this->renderView('documentexpedition/print.html.twig', [
            'nomExpediteur' => $nomExpediteur,
            'adresseExpediteur' => $adresseExpediteur,
            'nomDestinataire' => $nomDestinataire,
            'adresseDestinataire' => $adresseDestinataire,
            'poids' => $poids,
            'dateSignature' => $dateSignature,
            'dateexpedition'=>$dateexpedition,
            'description' => $description,
        ]);

        $snappy = $this->pdfService;
        $snappy->setOption('enable-local-file-access', true); // Ajout de l'option 'enable-local-file-access'
        $filename = 'document_exp_'.$id.'.pdf';
        
        return new PdfResponse(
            $snappy->getOutputFromHtml($html),
            $filename
        );
    } 

}


