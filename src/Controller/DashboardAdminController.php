<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;


class DashboardAdminController extends AbstractController
{
    /**
     * @Route("/dashboard/admin", name="dashboard_admin")
     */
    public function index(): Response
    {
        return $this->render('dashboard_admin/index.html.twig', [
            'controller_name' => 'DashboardAdminController',
        ]);
    }

    /**
     * @Route("/dashboard/utilisateurs", name="utilisateurs")
     */
    public function usersList(Users $users)
    {
        return $this->render('admin/users.html.twig', [
            'users' => $users->findAll(),
        ]);
    }

}
