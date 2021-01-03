<?php

namespace App\Controller;

use App\Entity\Order;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class MainController extends AbstractController
{
    /**
     * @Route("/", name="home")
     */
    public function home(): Response
    {
        $orderRepo = $this->getDoctrine()->getRepository(Order::class);
        $orders = $orderRepo->findAll();
    
        return $this->render('main/home.html.twig', [
            "orders" => $orders,
        ]);
    }
}
