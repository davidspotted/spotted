<?php

namespace Spotted\HomeBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class HomeController extends Controller
{
    public function indexAction()
    {
        return $this->render('SpottedHomeBundle:Home:index.html.twig');
    }
}
