<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class DefaultController extends Controller
{
    /**
     * @Route("/", name="homepage")
     */
    public function indexAction(Request $request)
    {


        //Get All Playlists from DB
        $playlists = $this->getDoctrine()->getRepository('AppBundle:Playlist')->findAll();


        // replace this example code with whatever you need
        return $this->render(':home:home.html.twig', array(
            'playlists' => $playlists,
        ));
    }







}
