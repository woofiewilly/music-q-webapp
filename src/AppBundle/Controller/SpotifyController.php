<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;

class SpotifyController extends Controller
{
    /**
     * @Route("/spotifyintegration/", name="spotifyintegration")
     */
    public function indexAction(Request $request)
    {

        $spotifyService = $this->get('melodymunk.spotify');

        $spotifyService->newSession();

        // replace this example code with whatever you need
        return $this->render('spotify/spotify_auth_base.html.twig');
    }
    /**
     * @Route("/getauthorizeurl/", name="getauthorizeurl")
     */
    public function getauthorizeurl()
    {
        $session = new \SpotifyWebAPI\Session(
            'f201b6c284a44bd6ac11f07430262360',
            'a087e72614b344ca8919c6c79200335f',
            'http://localhost:8080/callback/'  //put callback url here 
        );


        $options = [
            'scope' => [
                'playlist-read-private',
                'playlist-modify-public',
                'user-read-private',
                'playlist-modify-private',
                'user-modify-playback-state',
                'user-read-playback-state'
            ],
        ];

        $url = $session->getAuthorizeUrl($options);



        return new JsonResponse(array("redirect_url" => $url));
    }
}
