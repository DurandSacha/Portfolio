<?php

namespace App\Controller;

use App\Form\contactForm;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;

class FrontController extends AbstractController
{
    /**
     * @Route("/", name="home")
     */
    public function home(Request $request, \Swift_Mailer $mailer)
    {
        $form = $this->createForm(contactForm::class);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()  && $this->captchaverify($request->get('g-recaptcha-response'))) {
            $message = (new \Swift_Message('Portfolio'))
                ->setFrom($form->get('Email')->getData())
                ->setTo('sacha6623@gmail.com')
                ->setBody(
                    $this->renderView(
                        'Emails/contact.html.twig',
                        [
                            'name' => $form->get('Name')->getData(),
                            'message' => $form->get('Message')->getData(),
                            'subject' => $form->get('Subject')->getData(),
                            'mail' => $form->get('Email')->getData(),
                        ]), 'text/html');
            $mailer->send($message);

            $this->addFlash('info', "Email has been send");

            return $this->render('home.html.twig', [
                'contactForm' => $form->createView(),
            ]);
        }
        return $this->render('home.html.twig', [
            'contactForm' => $form->createView(),

            //$this->redirectToRoute('home#contact')
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
     * @Route("/sell", name="sell")
     */
    public function sell()
    {
        return $this->render('services.html.twig', [
        ]);
    }

}
