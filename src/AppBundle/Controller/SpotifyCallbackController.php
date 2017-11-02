<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class SpotifyCallbackController extends Controller
{
    /**
     * @Route("/callback/", name="callback")
     */
    public function indexAction(Request $request)
    {

        // replace this example code with whatever you need
        return $this->render('spotify/spotifycallback.twig');
    }

}