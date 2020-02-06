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
     * @Route("/service", name="service")
     */
    public function service()
    {
        return $this->render('services.html.twig', [
        ]);
    }

    /**
     * @Route("/about", name="about")
     */
    public function about()
    {
        return $this->render('about.html.twig', [
        ]);
    }

    /**
     * @Route("/blog", name="blog")
     */
    public function blog()
    {
        return $this->render('blog.html.twig', [
        ]);
    }

    /**
     * @Route("/portfolio", name="portfolio")
     */
    public function portfolio()
    {
        return $this->render('portfolio.html.twig', [
        ]);
    }

    /**
     * @Route("/blogID", name="blog-single")
     */
    public function blogSingle()
    {
        return $this->render('single-blog.html.twig', [
        ]);
    }

    /**
     * @Route("/portfolioID}", name="portfolio-single")
     */
    public function portfolioSingle()
    {
        return $this->render('portfolio-details.html.twig', [
        ]);
    }
}
