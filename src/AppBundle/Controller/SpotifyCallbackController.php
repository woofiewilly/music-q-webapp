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
        $session = new \SpotifyWebAPI\Session(
            'f201b6c284a44bd6ac11f07430262360',
            'a087e72614b344ca8919c6c79200335f',
            'http://localhost:8080/callback'
        );

        // Request a access token using the code from Spotify
        $session->requestAccessToken($_GET['code']);

        $accessToken = $session->getAccessToken();
        $refreshToken = $session->getRefreshToken();
        $api = new \SpotifyWebAPI\SpotifyWebAPI();
        $api->setAccessToken($accessToken);
        $me = $api->me();
        echo $me->display_name;
        echo $api->play();
        // replace this example code with whatever you need
        return $this->render('spotify/spotifycallback.twig');
    }
    /**
     * @Route("/play/", name="play")
     */
    public function playsong()
    {
        $session = new \SpotifyWebAPI\Session(
            'f201b6c284a44bd6ac11f07430262360',
            'a087e72614b344ca8919c6c79200335f',
            'http://localhost:8080/callback'
        );

        // Request a access token using the code from Spotify
        $session->requestAccessToken($_GET['code']);

        $accessToken = $session->getAccessToken();
        $refreshToken = $session->getRefreshToken();
        $api = new \SpotifyWebAPI\SpotifyWebAPI();
        $api->setAccessToken($accessToken);
        $me = $api->me();
        echo $me->display_name;
        return new JsonResponse(array());
    }

}