<?php
/**
 * Created by PhpStorm.
 * User: jneves
 * Date: 27/04/2018
 * Time: 14:42
 */
namespace App\Controller;

use Symfony\Component\Routing\Annotation\Route;
//use Sensio\Bundle\FrameworkExtraBundle\Configuration\ParamConverter;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\JsonResponse;
use App\Entity\User;
use App\Repository\UserRepository;

/**
 * @Route('/api',name="Api_controller")
 */
class ApiUserController  extends Controller
{
    /**
     * @Route("/", name="index_api")
     */
    public function index(Request $request)
    {
        return new JsonResponse(['user' => $this->getUser()]);
    }



}