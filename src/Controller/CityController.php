<?php

namespace App\Controller;

use App\Entity\Doctor;
use App\Repository\DoctorRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Attribute\Route;

class CityController extends AbstractController
{
    #[Route('/city', name: 'app_city')]
    public function index(DoctorRepository $dr): JsonResponse
    {
        return $this->json([
            'cities' => $dr->findAll(),
        ]);
    }

    /*#[Route('/form', name: 'app_form')]
    public function doctorForm(Request $request, DoctorRepository $dr, EntityManagerInterface $em): Response
    {
        $doctor = new Doctor();
        $form = $this->createFormBuilder($doctor);
    }*/
}