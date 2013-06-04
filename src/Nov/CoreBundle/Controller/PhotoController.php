<?php

namespace Nov\CoreBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class PhotoController extends Controller
{
    public function indexAction()
    {
        $photos = $this->get('nov_core.photo_manager')->getFindByQueryBuilder(
            ['a.published' => true],
            [],
            ['a.position' => 'ASC']
        )->getQuery()->execute();

        return $this->render('NovCoreBundle:Photo:index.html.twig', ['photos' => $photos]);
    }
}
