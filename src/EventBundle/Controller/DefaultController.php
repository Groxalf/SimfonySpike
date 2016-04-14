<?php

namespace EventBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction($count, $name)
    {
        $em = $this->getDoctrine()->getManager();
        $repo = $em->getRepository('EventBundle:Event');

        $event = $repo->findOneBy(['name' => 'Darth\'s surprise birthday party!']);

        return $this->render(
            'EventBundle:Default:index.html.twig',
            ['name' => $name, 'count' => $count,'event' => $event]);
    }
}
