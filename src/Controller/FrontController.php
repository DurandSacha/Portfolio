<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class FrontController extends AbstractController
{
    /**
     * @Route("/", name="home")
     */
    public function home()
    {
        return $this->render('home.html.twig', [
        ]);
    }

    /**
     * @Route("/contact", name="contact")
     */
    public function contact()
    {
        return $this->render('contact.html.twig', [
        ]);
    }

    /**
     * @Route("/laboratory", name="laboratory")
     */
    public function laboratory()
    {
        return $this->render('laboratory.html.twig', [
        ]);
    }

    /**
     * @Route("/moreProject", name="moreProject")
     */
    public function moreProject()
    {
        return $this->render('moreProject.html.twig', [
        ]);
    }
}
