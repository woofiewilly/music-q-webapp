<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use SpotifyWebAPI\SpotifyWebAPIException;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\Config\Definition\Exception\Exception;
use Symfony\Component\HttpFoundation\JsonResponse;
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
        $myfile = fopen("spotifyat.txt", "w") or die("Unable to open file!");
        fwrite($myfile, $accessToken);
        fclose($myfile);
        // replace this example code with whatever you need
        return $this->render('spotify/spotifycallback.twig');
    }
    /**
     * @Route("/play/", name="play")
     */
    public function playsong()
    {
        $myfile = fopen("spotifyat.txt", "r") or die("Unable to open file!");
        $accessToken = fread($myfile,filesize("spotifyat.txt"));
        $api = new \SpotifyWebAPI\SpotifyWebAPI();
        $api->setAccessToken($accessToken);
        try{
            $api->play();
        }
        catch (SpotifyWebAPIException $exception)
        {
            return new JsonResponse(array("exception" => $exception));
        }
        return new JsonResponse(array());
    }
    /**
     * @Route("/pause/", name="pause")
     */
    public function pausesong()
    {
        $myfile = fopen("spotifyat.txt", "r") or die("Unable to open file!");
        $accessToken = fread($myfile,filesize("spotifyat.txt"));
        $api = new \SpotifyWebAPI\SpotifyWebAPI();
        $api->setAccessToken($accessToken);
        $api->pause();
        return new JsonResponse(array());
    }
    /**
     * @Route("/raisevolume/", name="raisevolume")
     */
    public function raisevolume()
    {
        $myfile = fopen("spotifyat.txt", "r") or die("Unable to open file!");
        $accessToken = fread($myfile,filesize("spotifyat.txt"));
        $api = new \SpotifyWebAPI\SpotifyWebAPI();
        $api->setAccessToken($accessToken);
        $api->changeVolume(['volume_percent' => 100,]);
        return new JsonResponse(array());
    }
    /**
     * @Route("/lowervolume/", name="lowervolume")
     */
    public function lowervolume()
    {
        $myfile = fopen("spotifyat.txt", "r") or die("Unable to open file!");
        $accessToken = fread($myfile,filesize("spotifyat.txt"));
        $api = new \SpotifyWebAPI\SpotifyWebAPI();
        $api->setAccessToken($accessToken);
        $api->changeVolume(['volume_percent' => 20,]);
        return new JsonResponse(array());
    }
    /**
     * @Route("/nextsong/", name="nextsong")
     */
    public function nextsong()
    {
        $myfile = fopen("spotifyat.txt", "r") or die("Unable to open file!");
        $accessToken = fread($myfile,filesize("spotifyat.txt"));
        $api = new \SpotifyWebAPI\SpotifyWebAPI();
        $api->setAccessToken($accessToken);
        $api->next();
        return new JsonResponse(array());
    }
    /**
     * @Route("/prevsong/", name="prevsong")
     */
    public function prevsong()
    {
        $myfile = fopen("spotifyat.txt", "r") or die("Unable to open file!");
        $accessToken = fread($myfile,filesize("spotifyat.txt"));
        $api = new \SpotifyWebAPI\SpotifyWebAPI();
        $api->setAccessToken($accessToken);
        $api->previous();
        return new JsonResponse(array());
    }
    /**
     * @Route("/fastforward/", name="fastforward")
     */
    public function fastforward()
    {
        $myfile = fopen("spotifyat.txt", "r") or die("Unable to open file!");
        $accessToken = fread($myfile,filesize("spotifyat.txt"));
        $api = new \SpotifyWebAPI\SpotifyWebAPI();
        $api->setAccessToken($accessToken);
        $api->seek(['position_ms' => 60000 + 37000, // Move to the 1.37 minute mark
        ]);
        return new JsonResponse(array());
    }

}