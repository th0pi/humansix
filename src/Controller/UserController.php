<?php

namespace App\Controller;

use App\Entity\User;
use App\Form\ResgisterType;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class UserController extends AbstractController
{
    /**
     * @Route("/login", name="login")
     */
    public function login(Request $request, EntityManagerInterface $em): Response
    {

        return $this->render('user/login.html.twig', [
        ]);
    }
    /**
     * @Route("/logout", name="logout")
     */
    public function logout(): Response
    {

        return $this->render('main/home.html.twig', []);
    }
}
