<?php

namespace App\Controller;

use App\Entity\User;
use App\Form\EditProfileType;
use App\Repository\UserRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
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
        /** @var UserRepository $userrepository */
        $userrepository = $this->getDoctrine()->getRepository(User::class);
        $users = $userrepository->findAll();
        return $this->render('dashboard_user/history.html.twig', [
            'users' => $users,
        ]);
    }

    /**
     *
     * @Route("/dashboard/securiter", name="dashboard_securiter_index")
     */
    public function editProfil(Request $request): Response
    {
        $profil = $this->getUser();
        $form = $this->createForm(EditProfileType::class, $profil );
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($profil);
            $entityManager->flush();
            $this->addFlash('message', 'Profil mise à jour');

            return $this->redirectToRoute('dashboard_securiter_index');
        }

        return $this->render('dashboard_user/securiter.html.twig', [
            'form' => $form->createView()

        ]);
    }

}
