<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class DefaultController extends AbstractController
{
    /**
     * @Route("/", name="home")
     */
    public function index(): Response
    {
        $list = ["a", "b", "Dexter"];
        $title = "liste des choses à faire";


        return $this->render('default/home.html.twig', [
            "l" => $list,
            "t" => $title,
        ]);
    }
}
