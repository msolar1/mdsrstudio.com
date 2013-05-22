<?php

namespace mdsr\StudioBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function workAction() {
        return $this->render('mdsrStudioBundle:Default:work.html.twig');
    }

    public function aboutAction() {
        return $this->render('mdsrStudioBundle:Default:about.html.twig');
    }
}
