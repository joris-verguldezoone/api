<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ShunController extends AbstractController
{
    /**
     * @Route("/shun", name="shun")
     */
    public function index(): Response
    {
        return $this->render('shun/index.html.twig', [
            'controller_name' => 'ShunController',
        ]);
    }
}
