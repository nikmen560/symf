<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class HomeController extends AbstractController
{
    /**
     * @Route("/", name="home")
     */
    public function index(): Response
    {
        return $this->render('home/index.html.twig', [
            'controller_name' => 'HomeController',
        ]);
    }

    /**
     * @Route("/admin", name="admin")
     */
    public function admin(): Response
    {
        return $this->render('home/index.html.twig', [
            'controller_name' => 'admin',
        ]);
    }

    /**
     * @Route("/admin/home", name="admin_home")
     */
    public function admin_home(): Response
    {
        return $this->render('home/index.html.twig', [
            'controller_name' => 'admin_home',
        ]);
    }
}