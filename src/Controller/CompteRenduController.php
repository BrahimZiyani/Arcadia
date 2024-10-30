<?php

namespace App\Controller;

use App\Entity\CompteRendu;
use App\Form\CompteRenduType;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

#[Route('/compterendu')]
class CompteRenduController extends AbstractController
{
    // Nouvelle méthode index pour lister les comptes rendus
    #[Route('/', name: 'compterendu_index', methods: ['GET'])]
    public function index(EntityManagerInterface $entityManager): Response
    {
        $compteRendus = $entityManager->getRepository(CompteRendu::class)->findAll();

        return $this->render('compterendu/index.html.twig', [
            'compteRendus' => $compteRendus,
        ]);
    }

    #[Route('/new', name: 'compterendu_new', methods: ['GET', 'POST'])]
    public function new(Request $request, EntityManagerInterface $entityManager): Response
    {
        $compteRendu = new CompteRendu();
        $form = $this->createForm(CompteRenduType::class, $compteRendu);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            // Associer l'utilisateur connecté
            $compteRendu->setUtilisateur($this->getUser());
            
            $entityManager->persist($compteRendu);
            $entityManager->flush();

            return $this->redirectToRoute('compterendu_index');
        }

        return $this->render('compterendu/new.html.twig', [
            'form' => $form->createView(),
        ]);
    }
}
