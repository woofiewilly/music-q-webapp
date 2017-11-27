<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;


class YoutubeController extends Controller
{
    /**
     * @Route("/youtube", name="youtubetest")
     */
    public function indexAction(Request $request)
    {
        return $this->render('youtube_test.html.twig');
    }

}


