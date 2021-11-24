<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class BlogCreationController extends AbstractController
{
    /**
     * @Route("/blog/creation", name="blog_creation")
     */
    public function index(): Response
    {
        return $this->render('blog_creation/index.html.twig', [
            'controller_name' => 'BlogCreationController',
        ]);
    }
}