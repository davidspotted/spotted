<?php

namespace Spotted\HomeBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;

class HomeController extends Controller
{
	/**
	 * @Template()
	 */
    public function indexAction()
    {
        //return $this->render('SpottedHomeBundle:Home:index.html.twig');
       return array('post' => '');
    }
}
