<?php

namespace Nov\CoreBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class ReservationController extends Controller
{
    public function indexAction()
    {
        return $this->render('NovCoreBundle:Reservation:index.html.twig');
    }
}
