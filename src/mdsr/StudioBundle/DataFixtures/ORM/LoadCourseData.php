<?php

namespace mdsr\StudioBundle\DataFixtures\ORM;

use Doctrine\Common\DataFixtures\FixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use mdsr\StudioBundle\Entity\Course;

class LoadCourseData implements FixtureInterface
{
    /**
     * {@inheritDoc}
     */
    public function load(ObjectManager $manager) {
        $coursePHP1 = new Course();
        $coursePHP1->setTitle('Desarrollo de Aplicaciónes PHP (plan FIP)');
        $coursePHP1->setContent(
            'Curso de 250 horas sobre programación Web con 
            HTML5, CSS3, jQuery, PHP5, MySQL, Git y Symfony framework.');
        $coursePHP1->setOrganizer('Academia Postal');
        $coursePHP1->setOrganizerLink('#');
        $coursePHP1->setImage('php_logo.png');
        $coursePHP1->setPlace('Vigo');
        $coursePHP1->setStartDate(new \DateTime('2013-01-07'));
        $coursePHP1->setEndDate(new \DateTime('2013-03-18'));

        $manager->persist($coursePHP1);

        $courseHTML5 = new Course();
        $courseHTML5->setTitle('HTML5, CSS3, jQuery');
        $courseHTML5->setContent(
            'Curso de desarrollo web frontend con HTML5, CSS3, JQuery, 
            Responsive Design, Canvas, SVG y WebGL.');
        $courseHTML5->setOrganizer('Academia Postal');
        $courseHTML5->setOrganizerLink('#');
        $courseHTML5->setImage('html5_logo.png');
        $courseHTML5->setPlace('Vigo');
        $courseHTML5->setStartDate(new \DateTime('2013-01-08'));
        $courseHTML5->setEndDate(new \DateTime('2013-02-14'));

        $manager->persist($courseHTML5);

        $courseIOS = new Course();
        $courseIOS->setTitle('Programación para Dispositivos Móviles');
        $courseIOS->setContent(
            'Curso semi-presencial con 20 horas de sesiones presenciales: 
            programación iPhone, iPad.');
        $courseIOS->setOrganizer('gdoce');
        $courseIOS->setOrganizerLink('#');
        $courseIOS->setImage('ios_logo.png');
        $courseIOS->setPlace('Lugo');
        $courseIOS->setStartDate(new \DateTime('2012-12-14'));
        $courseIOS->setEndDate(new \DateTime('2013-02-16'));

        $manager->persist($courseIOS);

        $coursePHP2 = new Course();
        $coursePHP2->setTitle('Programación PHP, MySQL y AJAX');
        $coursePHP2->setContent(
            'Curso de 80 horas sobre programación Web con HTML5, CSS3, jQuery, 
            PHP5, MySQL y AJAX.');
        $coursePHP2->setOrganizer('Academia Postal');
        $coursePHP2->setOrganizerLink('#');
        $coursePHP2->setImage('php_logo.png');
        $coursePHP2->setPlace('Vigo');
        $coursePHP2->setStartDate(new \DateTime('2012-10-15'));
        $coursePHP2->setEndDate(new \DateTime('2012-11-29'));

        $manager->persist($coursePHP2);
        $manager->flush();
    }
}