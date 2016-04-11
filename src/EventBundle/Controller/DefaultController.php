<?php

namespace EventBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;

class DefaultController extends Controller
{
    public function indexAction($count, $name)
    {
        $templating = $this->container->get('templating');

        $content = $templating->render('EventBundle:Default:index.html.twig',
            ['name' => $name]);

        return new Response($content);
    }
}
