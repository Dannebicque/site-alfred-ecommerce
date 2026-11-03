<?php

namespace App\Controller;

use App\Service\ContactMailer;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

final class ContactController extends AbstractController
{
    #[Route('/contact', name: 'app_contact')]
    public function index(): Response
    {
        return $this->render('contact/index.html.twig', [
        ]);
    }

    #[Route('/contact/envoyer', name: 'app_contact_envoyer')]
    public function envoyer(
        ContactMailer $contactMailer, //le service qu'on vient de créer
        Request $request): Response
    {

        $contactMailer->send(
            $request->request->get('name'),
            $request->request->get('email'),
            $request->request->get('message')
        );

        return $this->render('contact/envoyer.html.twig', [
            'name' => $request->request->get('name'),
            'email' => $request->request->get('email'),
            'message' => $request->request->get('message'),
        ]);
    }
}
