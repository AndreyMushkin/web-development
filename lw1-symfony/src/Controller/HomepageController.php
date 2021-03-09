<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;

class HomepageController extends AbstractController
{      

    public function homepage(): Response
    {
        
	$name = 'Andrey Mushkin';
	$age = '19';
	$email = '222mushkin@gmail.com';

    return $this->render('homepage/homepage.html.twig', [
        'name' => $name,
        'age' => $age,
        'email' => $email,
        ]);
    }

}