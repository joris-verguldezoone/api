<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Mercure\HubInterface;
use Symfony\Component\Mercure\Publisher;
use Symfony\Component\Mercure\Update;
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
    /**
     * @Route("/ping", name="ping", methods="POST")
     */
    public function ping( HubInterface $hubInterface):Response
    {
        $update= new Update("http://localhost/.well-known/mercure/ui/",
            json_encode(['status' => 'OutOfStock']));
        $hubInterface->publish($update);
        return $this->redirectToRoute('home');
    }
}
