<?php

namespace App\Controller;

use App\Entity\CVEtudiant;
use App\Entity\Personne;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class IndexController extends AbstractController
{
    /**
     * @Route("/", name="index")
     */
    public function index(): Response
    {
        return $this->render('base.html.twig');
    }

     /**
     * @Route("/login", name="login", methods={"GET","POST"})
     * @return Response
     */
    public function login(Request $request ): Response
    {
        
            return $this->render('login.html.twig');
        }
}



