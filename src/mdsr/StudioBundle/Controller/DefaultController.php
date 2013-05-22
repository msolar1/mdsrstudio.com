<?php

namespace mdsr\StudioBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction($name) {
        return $this->render('mdsrStudioBundle:Default:index.html.twig', array('name' => $name));
    }

    public function workAction() {
        return $this->render('mdsrStudioBundle:Default:work.html.twig');
    }
}
