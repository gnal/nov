<?php

namespace Nov\CoreBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class FoodController extends Controller
{
    public function indexAction()
    {
        return $this->render('NovCoreBundle:Food:index.html.twig');
    }
}
