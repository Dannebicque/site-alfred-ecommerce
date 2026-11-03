<?php

namespace App\Controller;

use App\Service\JsonToArray;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\DependencyInjection\Attribute\Autowire;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;


final class HomepageController extends AbstractController
{
    #[Route('/', name: 'app_homepage')]
    public function index(
        #[Autowire('%kernel.project_dir%')]
        string $projectDir,
    ): Response
    {
        $jsonToArray = new JsonToArray($projectDir, 'data/services.json');

        return $this->render('homepage/index.html.twig', [
            'missions' => $jsonToArray->getArray()

        ]);
    }

    #[Route('/a-propos', name: 'app_a_propos')]
    public function aPropos(): Response
    {
        return $this->render('homepage/apropos.html.twig', [
            'controller_name' => 'A propos',
        ]);
    }
}
