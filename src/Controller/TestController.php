<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use OpenApi\Annotations as OA;

class TestController extends AbstractController
{
    /**
     * @OA\Get
     * (
     *  path="/posts",
     * @OA\Parameter
     * (
     *  name="limit",
     *  in="query",
     *  description="Le nombre d'article à récupérer",
     *  required=false,
     *  @OA\Schema(type="integer")
     * ),
     *  @OA\Response(
     *  response="200",
     *  description="Nos articles",
     *  @OA\JsonContent(type="array", @OA\Items(ref="#/components/schemas/Post")
     *)
     *          )
     *      )
     */
    public function index ()
    {
    }
    /**
     * @OA\Get(
     *      path="/posts/{id}",
     *      @OA\Parameter(
     *          name="id",
     *          in="path",
     *          description="ID de la ressource",
     *          required=true,
     *          @OA\Schema(type="integer")
     *      ),
     *      @OA\Response(
     *          response="200",
     *          description="L'articles",
     *          @OA\JsonContent(ref="#/components/schemas/Post")
     *      )
     * )
     */
    public function show () {

    }
}
