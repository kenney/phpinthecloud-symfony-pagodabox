<?php

namespace StartupSchool\PhpInTheCloudBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class WelcomeController extends Controller
{
    public function indexAction()
    {
        return $this->render('StartupSchoolPhpInTheCloudBundle:Welcome:index.html.twig');
    }
}
