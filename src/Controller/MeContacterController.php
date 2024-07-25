<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class MeContacterController extends AbstractController
{
    #[Route('/me-contacter', name: 'app_me_contacter')]
    public function index(): Response
    {
        return $this->render('me_contacter/index.html.twig');
    }
}
