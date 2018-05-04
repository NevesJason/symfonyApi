<?php

namespace App\Controller;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\JsonResponse;
use App\Entity\User;
use App\Repository\UserRepository;

/**
 * @Route("/api",name="Api_controller")
 */
class ApiUserController  extends Controller
{
    /**
     * @Route("/", name="index_api")
     */
    public function index(Request $request)
    {
        return new JsonResponse(['token' => $this->getUser()]);
    }



}