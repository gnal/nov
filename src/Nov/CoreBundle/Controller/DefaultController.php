<?php

namespace Nov\CoreBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function homepageAction()
    {
        return $this->render('NovCoreBundle:Default:homepage.html.twig');
    }
}
