<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class sellController extends AbstractController
{
    /**
     * @Route("/sell/culture-immergee", name="culture-immergee")
     */
    public function sellCultureImmergee()
    {
        return $this->render('sell/culture-immergee.html.twig', [
        ]);
    }
}
