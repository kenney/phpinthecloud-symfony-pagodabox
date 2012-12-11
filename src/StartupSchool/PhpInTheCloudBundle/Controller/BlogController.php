<?php

namespace StartupSchool\PhpInTheCloudBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class BlogController extends Controller
{
    public function indexAction()
    {
        return $this->render('StartupSchoolPhpInTheCloudBundle:Blog:index.html.twig');
    }

    public function createAction()
    {
        return $this->render('StartupSchoolPhpInTheCloudBundle:Blog:create.html.twig');
    }
}
