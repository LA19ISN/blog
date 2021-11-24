<?php

namespace App\Controller;

use App\Repository\ContactRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ContactController extends AbstractController
{
    /**
     * @var ContactRepository
     */
    private $contactRepository;

    public function __construct(ContactRepository $contactRepository)
    {
        $this->contactRepository = $contactRepository;
    }

    /**
     * @Route("/contactez-nous", name="contact")
     */
    public function index(): Response
    {
        return $this->render('contact/index.html.twig', [
            'name' => 'Lelio',
            'contacts' => $this->contactRepository->findAll(),
        ]);
    }

    /**
     * @Route("/contacter/{city}", name="contactCity")
     */
    public function contactCity(Request $request, string $city): Response
    {
        $name = $request->query->get('name');
        dump($name);

        return $this->render('contact/index.html.twig', [
            'name' => $name,
            'city' => $city,
        ]);
    }
}