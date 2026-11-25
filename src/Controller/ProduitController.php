<?php

namespace App\Controller;

use App\Entity\Produit;
use App\Repository\ProduitRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

final class ProduitController extends AbstractController
{
    #[Route('/catalogue', name: 'app_produit')]
    public function index(
        ProduitRepository $produitRepository
    ): Response
    {
        $produits = $produitRepository->findAll();

        return $this->render('produit/index.html.twig', [
            'produits' => $produits,
        ]);
    }

    #[Route('/catalogue/{id}', name: 'app_produit_show', requirements: ['id' => '\d+'])]
    public function show(
        Produit $produit
    ): Response
    {
        return $this->render('produit/show.html.twig', [
            'produit' => $produit,
        ]);
    }

    #[Route('/catalogue/new', name: 'app_produit_new')]
    public function new(
        EntityManagerInterface $entityManager
    ): Response
    {
        $produit = new Produit();
        $produit->setNom('Nouveau produit');
        $produit->setPrix(10.00);
        $produit->setDescription('Description du produit');
        $produit->setImage('nouveau_produit.jpg');
        $produit->setQuantite(0);
        $produit->setCaracteristiques([]);

        $entityManager->persist($produit); //mémorise la modification
        $entityManager->flush(); // applique la modification en base de données

        return $this->redirectToRoute('app_produit');

    }
}
