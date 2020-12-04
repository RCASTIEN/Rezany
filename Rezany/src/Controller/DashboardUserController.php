<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class DashboardUserController extends AbstractController
{
    /**
     * @Route("/dashboard/user", name="dashboard_user_index")
     */
    public function index(): Response
    {
        return $this->render('dashboard_user/index.html.twig', [

        ]);
    }

    /**
     * @Route("/dashboard/notification", name="dashboard_notification_index")
     */
    public function notification(): Response
    {
        return $this->render('dashboard_user/notification.html.twig', [

        ]);
    }

    /**
     * @Route("/dashboard/history", name="dashboard_history_index")
     */
    public function history(): Response
    {
        return $this->render('dashboard_user/history.html.twig', [

        ]);
    }

    /**
     * @Route("/dashboard/securiter", name="dashboard_securiter_index")
     */
    public function securiter(): Response
    {
        return $this->render('dashboard_user/securiter.html.twig', [

        ]);
    }
}
