<?php


namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Response;

class ProgrammController extends AbstractController
{

    /**
     * @Route("/programs/{id}", requirements={"id"="\d+"}, methods={"GET"}, name="program_")
     */
    public function show(int $id): Response
    {
        return $this->render('programm/list.html.twig', ['id' => $id]);
    }
}
