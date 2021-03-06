<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class MamaSae14Controller extends AbstractController
{
	
	/**
     * @Route("/Accueil", name="Accueil")
     */
    public function Accueil()
    {
        return $this->render('mama_sae14/Accueil.html.twig', [
            'controller_name' => 'MamaSae14Controller',
        ]);
    }
	/**
     * @Route("/Curriculum-Vitae", name="Curriculum-Vitae")
     */
    public function CurriculumVitae()
    {
        return $this->render('mama_sae14/Curriculum-Vitae.html.twig', [
            'controller_name' => 'MamaSae14Controller',
        ]);
    }

	/**
     * @Route("/Portfolio", name="Portfolio")
     */
    public function Portfolio()
    {
        return $this->render('mama_sae14/Portfolio.html.twig', [
            'controller_name' => 'MamaSae14Controller',
        ]);
    }
	/**
     * @Route("/Contact", name="Contact")
     */
    public function Contact()
    {
        return $this->render('mama_sae14/Contact.html.twig', [
            'controller_name' => 'MamaSae14Controller',
        ]);
	
    }
	
	
	
	
	
	
	
}
