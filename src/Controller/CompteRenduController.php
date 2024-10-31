<?php

namespace App\Controller;

use App\Entity\CompteRendu;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Security\Core\Exception\AccessDeniedException;

#[Route('/compterendu')]
class CompteRenduController extends AbstractController
{
    #[Route('/{id}/delete', name: 'compterendu_delete', methods: ['POST'])]
    public function delete(Request $request, CompteRendu $compteRendu, EntityManagerInterface $entityManager): RedirectResponse
    {
        if ($this->isCsrfTokenValid('delete' . $compteRendu->getId(), $request->request->get('_token'))) {
            // Suppression du compte rendu
            $entityManager->remove($compteRendu);
            $entityManager->flush();
        } else {
            throw new AccessDeniedException('Token CSRF invalide');
        }

        return $this->redirectToRoute('app_profile');
    }
}
