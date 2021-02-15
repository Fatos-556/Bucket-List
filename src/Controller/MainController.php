<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class MainController extends AbstractController
{
    /**
     * @Route("/aboutUs", name="main_aboutUs")
     */
    public function aboutUs(): Response
    {
        return $this->render('main/aboutUs.html.twig', [
            'controller_name' => 'MainController',
        ]);
    }
}
