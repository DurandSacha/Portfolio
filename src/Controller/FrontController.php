<?php

namespace App\Controller;

use App\Form\contactForm;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Routing\Generator\UrlGeneratorInterface;
use Symfony\Component\DependencyInjection\ParameterBag\ContainerBagInterface;
use Symfony\Component\HttpClient\HttpClient;
use Symfony\Component\HttpClient\ScopingHttpClient;

class FrontController extends AbstractController
{
    private $connection;
    /**
     * @var ContainerBagInterface
     */
    private $containerBag;

    public function __construct(ContainerBagInterface $containerBag)
    {
        $this->containerBag = $containerBag;
    }

    protected function checkConnection()
    {
        if($this->connection) {
            return $this->connection;
        }
        return $this->connect();
    }

    private function connect()
    {
        $this->connection = HttpClient::create();
        $this->connection = new ScopingHttpClient($this->connection, [
            'https://api\.github\.com/' => [
                'headers' => [
                    'Accept' => 'application/vnd.github.v3+json',
                    'Authorization' => 'token '.$this->containerBag->get('GITHUB_TOKEN'),
                ],
            ]
        ]);
        return $this->connection;
    }
    
    /**
     * @Route("/", name="home")
     */
    public function home(Request $request, \Swift_Mailer $mailer)
    {
        $form = $this->createForm(contactForm::class);
        $form->handleRequest($request);

        /**************** TEST SCRAPING GITHUB  ************/
        $client = HttpClient::create();
        $response = $client->request('GET', 'https://github.com/DurandSacha');
        $content = $response->getContent();
        $content = preg_match('#791 contributions\n#', $content,$line);   /// 791 contributions\n
        $commitsYears = trim(str_replace(' contributions','', $line[0]));

        if ($form->isSubmitted() && $form->isValid() && !$this->captchaverify($request->get('g-recaptcha-response'))){
            $this->addFlash('warning', "Captcha is required");
        }
        elseif ($form->isSubmitted() && $form->isValid() && $this->captchaverify($request->get('g-recaptcha-response'))) {
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
                'commits_last_years' => $commitsYears
            ]);
        }
        return $this->render('home.html.twig', [
            'contactForm' => $form->createView(),
            'commits_last_years' => $commitsYears
            //$this->redirectToRoute('home#contact')
        ]);
    }

    # get success response from recaptcha and return it to controller
    function captchaverify($recaptcha){
        $url = "https://www.google.com/recaptcha/api/siteverify";
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_HEADER, 0);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE); 
        curl_setopt($ch, CURLOPT_POST, true);
        curl_setopt($ch, CURLOPT_POSTFIELDS, array(
            "secret"=>"6Lci7_0UAAAAAAp7yKiQ-yB8AwxQNJ4jQgBrAHDf","response"=>$recaptcha));
        $response = curl_exec($ch);
        curl_close($ch);
        $data = json_decode($response);     
    
        if($data != null){
            return true;
        }     
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
