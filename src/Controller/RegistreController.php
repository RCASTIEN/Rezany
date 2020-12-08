<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class RegistreController extends AbstractController
{
    /**
     * @Route("/registre", name="registre_index")
     */
    public function index(): Response
    {
        return $this->render('registre/index.html.twig', [

        ]);
    }

    /**
     * @Route("/login", name="registre_login")
     */
    public function login(): Response
    {
        return $this->render('registre/login.html.twig', [

        ]);
    }

    /**
     * @Route("/logout", name="registre_logout")
     */
    public function logout(): Response
    {
        throw new \LogicException('O revoir');
    }
}
