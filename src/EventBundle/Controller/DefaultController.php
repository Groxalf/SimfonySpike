<?php

namespace EventBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction($count, $name)
    {
        $templating = $this->container->get('templating');

        return $templating->renderResponse(
            'EventBundle:Default:index.html.twig',
            ['name' => $name]);
    }
}
