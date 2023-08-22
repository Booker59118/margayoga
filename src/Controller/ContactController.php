<?php

namespace App\Controller;


use App\Form\ContactType;
use Symfony\Component\Mime\Email;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Mailer\MailerInterface;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class ContactController extends AbstractController
{
    #[Route('/contact', name: 'contact')]
    public function index(Request $request, MailerInterface $mailer): Response
    {

        // $contact = new Contact();
        $form=$this->createForm(ContactType::class);

        $form->handleRequest($request);

       if($form->isSubmitted() && $form->isValid()){
            $data = $form->getData();
            $email = $data['email'];
            $content = $data['content'];

            $email = (new Email())
            ->from($email)
            ->to('admina@Margayoga.com')
            ->subject('Demande de contact')
            ->text($content);
            


            
        $mailer->send($email);
            
        
         
            return $this->renderForm('contact/index.html.twig',[
                'controller_name' => 'ContactController',
                'form' => $form
            ]);

        }
        

           
   



        
       

    
        

        // return $this->redirectToRoute('contact');
       }





        



       
}
