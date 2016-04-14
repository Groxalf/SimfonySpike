<?php

use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Debug\Debug;
/**
 * @var Composer\Autoload\ClassLoader $loader
 */
$loader = require __DIR__.'/app/autoload.php';
Debug::enable();

$kernel = new AppKernel('dev', true);
$kernel->loadClassCache();
$request = Request::createFromGlobals();
$kernel->boot();

$container = $kernel->getContainer();
$container->set('request', $request);

$templating = $container->get('templating');

echo $templating->render(
    'EventBundle:Default:index.html.twig',
    ['name' => 'Vader', 'count' => 3]
);

use EventBundle\Entity\Event;


$event = new Event();
$event->setName('Darth\'s surprise birthday party!');
$event->setLocation('Deathstart');
$event->setTime(new \DateTime('tomorrow noon'));
//$event->setDetails('Ha! Darth HATES surprises!!!');

$em = $container->get('doctrine')->getManager();
$em->persist($event);
$em->flush();