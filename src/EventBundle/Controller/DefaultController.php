<?php

namespace EventBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\JsonResponse;

class DefaultController extends Controller
{
    public function indexAction($count, $name)
    {
        $data = [
            'count' => $count,
            'name' => $name,
            'ackbar' => "It's a traaaaaap!"
        ];

        return new JsonResponse($data);
    }
}
