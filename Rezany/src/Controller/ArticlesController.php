<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ArticlesController extends AbstractController
{
    /**
     * @Route("/articles", name="articles_index")
     */
    public function index(): Response
    {
        return $this->render('articles/index.html.twig', [

        ]);
    }

    /**
     * @Route("/articles/description/id", name="articles_description")
     */
    public function description(): Response
    {
        return $this->render('articles/description.html.twig', [

        ]);
    }
}
