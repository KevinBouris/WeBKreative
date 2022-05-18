<?php

namespace App\Controller;

use App\Repository\UserRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class HomepageController extends AbstractController
{
    #[Route('/accueil', name: 'homepage')]
    public function index(UserRepository $user): Response
    {
        $kebou = $user->findOneByEmail('web.kreative.34@gmail.com');

        return $this->render('homepage/index.html.twig', [
            'kebouInfo' => $kebou,
        ]);
    }
}
