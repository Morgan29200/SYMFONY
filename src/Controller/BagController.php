<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class BagController extends AbstractController
{
    /**
     * @Route("/bag", name="bag")
     */
    public function Bag($Potion)
    {


        return $this->render('bag/index.html.twig', [
            'controller_name' => 'BagController',
        ]);
    }
}
