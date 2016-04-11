<?php

namespace EventBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction($count, $name)
    {

        return $this->render(
            'EventBundle:Default:index.html.twig',
            ['name' => $name, 'count' => $count]);
    }
}
