<?php

namespace EcommerceBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class PanierController extends Controller
{
    public function panierAction()
    {
        return $this->render('EcommerceBundle:Default:Panier\layout\panier.html.twig');
    }

    public function livraisonAction()
    {
        return $this->render('EcommerceBundle:Default:Panier\layout\livraison.html.twig');

    }

    public function validationAction(){

        return $this->render('EcommerceBundle:Default:Panier\layout\validation.html.twig');
    }
}
