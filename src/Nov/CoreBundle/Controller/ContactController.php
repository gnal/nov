<?php

namespace Nov\CoreBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class ContactController extends Controller
{
    public function indexAction()
    {
        return $this->render('NovCoreBundle:Contact:index.html.twig');
    }
}
