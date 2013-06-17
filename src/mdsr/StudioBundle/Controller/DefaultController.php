<?php

namespace mdsr\StudioBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function workAction()
    {
        return $this->render('mdsrStudioBundle:Default:work.html.twig',
                             array(
                                'menuLinkOff' => 'work',
                                'avaliabilityText' => 'busy'));
    }

    public function trainingAction()
    {
        $courses = $this->getDoctrine()
                        ->getRepository('mdsrStudioBundle:Course')
                        ->findBy(array(), array('endDate' => 'DESC'));

        return $this->render('mdsrStudioBundle:Default:training.html.twig',
                             array(
                                'menuLinkOff' => 'training',
                                'avaliabilityText' => 'busy',
                                'courses' => $courses));
    }

    public function hireAction()
    {
        return $this->render('mdsrStudioBundle:Default:hire.html.twig', 
                             array(
                                'menuLinkOff' => 'hire',
                                'avaliabilityText' => 'busy'));
    }

    public function aboutAction()
    {
        return $this->render('mdsrStudioBundle:Default:about.html.twig',
                             array(
                                'menuLinkOff' => 'about',
                                'avaliabilityText' => 'busy'));
    }
}
