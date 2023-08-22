<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class AboutController extends AbstractController
{
    #[Route('/about', name: 'app_about')]
    public function index(): Response
    {
        return $this->render('about/index.html.twig', [
            'controller_name' => 'AboutController',
        ]);
    }

    #[Route('/témoignages', name: 'commentaire')]
    public function commentaire(): Response
    {
        return $this->render('commentaire/commentaire.html.twig');
    }

    #[Route('/partenaires', name: 'partenaire')]
    public function partenaire(): Response
    {
        return $this->render('partenaire/partenaire.html.twig');
    }

    #[Route('/photos', name: 'photo')]
    public function photo(): Response
    {
        return $this->render('photo/photo.html.twig');
    }
}

