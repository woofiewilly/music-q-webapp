<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class PlaylistController extends Controller
{


    /**
     *
     * @Route("/playlist_page/{variable}")
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function indexAction($variable)
    {

        //TODO: FIND PLAYLISTS

        return $this->render(':playlists:playlist.html.twig', array(
            'testingVar' => $variable
        ));
    }
}
