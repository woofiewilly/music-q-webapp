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
        $myfile = fopen("spotifyat.txt", "w") or die("Unable to open file!");
        fwrite($myfile, $accessToken);
        $myfile = fopen("spotifyrt.txt", "w") or die("Unable to open file!");
        fwrite($myfile, $refreshToken);
        fclose($myfile);
        // replace this example code with whatever you need
        return $this->render('spotify/spotifycallback.twig');
    }
    /**
     * @Route("/play/", name="play")
     */
    public function playsong(Request $request)
    {
        $this->setAccessToken($request);
        $accessToken = $this->getAccessToken($request);
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
    public function pausesong(Request $request)
    {
        $accessToken = $this->getAccessToken($request);
        $api = new \SpotifyWebAPI\SpotifyWebAPI();
        $api->setAccessToken($accessToken);
        $api->pause();
        return new JsonResponse(array());
    }
    /**
     * @Route("/raisevolume/", name="raisevolume")
     */
    public function raisevolume(Request $request)
    {
        $accessToken = $this->getAccessToken($request);
        $api = new \SpotifyWebAPI\SpotifyWebAPI();
        $api->setAccessToken($accessToken);
        $playback_info = $api->getMyCurrentPlaybackInfo();
        $playback_info = json_decode(json_encode($playback_info), true);
        $volume_percent = $playback_info["device"]["volume_percent"];
        $volume_percent = ($volume_percent + 10);
        if($volume_percent > 100)
        {
            $volume_percent = 100;
        }
        $api->changeVolume(['volume_percent' => $volume_percent,]);
        return new JsonResponse(array());
    }
    /**
     * @Route("/lowervolume/", name="lowervolume")
     */
    public function lowervolume(Request $request)
    {
        $accessToken = $this->getAccessToken($request);
        $api = new \SpotifyWebAPI\SpotifyWebAPI();
        $api->setAccessToken($accessToken);
        $playback_info = $api->getMyCurrentPlaybackInfo();
        $playback_info = json_decode(json_encode($playback_info), true);
        $volume_percent = $playback_info["device"]["volume_percent"];
        $volume_percent = $volume_percent - 10;
        if($volume_percent < 0)
        {
            $volume_percent = 0;
        }
        $api->changeVolume(['volume_percent' => $volume_percent,]);
        return new JsonResponse(array());
    }
    /**
     * @Route("/nextsong/", name="nextsong")
     */
    public function nextsong(Request $request)
    {
        $accessToken = $this->getAccessToken($request);
        $api = new \SpotifyWebAPI\SpotifyWebAPI();
        $api->setAccessToken($accessToken);
        $api->next();
        return new JsonResponse(array());
    }
    /**
     * @Route("/prevsong/", name="prevsong")
     */
    public function prevsong(Request $request)
    {
        $accessToken = $this->getAccessToken($request);
        $api = new \SpotifyWebAPI\SpotifyWebAPI();
        $api->setAccessToken($accessToken);
        $api->previous();
        return new JsonResponse(array());
    }

    private function getAccessToken(Request $request)
    {
        if ($request->isXmlHttpRequest()) {

            //Get Request Params
            $roomID = $request->request->get('room_id');
            $value = $request->request->get('value');

            $db_manager = $this->getDoctrine()->getManager();
            //Find room with ID
            $room = $db_manager->getRepository('AppBundle:Room')->find($roomID);

            //If no room found, return error response
            if (!$room) {
                return new JsonResponse(array(
                    'success' => false,
                    'message' => "Room Not Found!"
                ));
            }
            $accessToken = $room->getAccessToken();
            $db_manager->clear();

            return $accessToken;
        }
        else
        {
            return "Error";
        }
    }

    private function setAccessToken(Request $request)
    {
        $myfile = fopen("spotifyat.txt", "r") or die("Unable to open file!");
        $myfile2 = fopen("spotifyrt.txt","r") or die("Unable to open file!");
        $accessToken = fread($myfile,filesize("spotifyat.txt"));
        $refreshToken = fread($myfile2,filesize("spotifyrt.txt"));
        if ($request->isXmlHttpRequest()) {

            //Get Request Params
            $roomID = $request->request->get('room_id');
            $value = $request->request->get('value');

            $db_manager = $this->getDoctrine()->getManager();
            //Find room with ID
            $room = $db_manager->getRepository('AppBundle:Room')->find($roomID);

            //If no room found, return error response
            if (!$room) {
                return new JsonResponse(array(
                    'success' => false,
                    'message' => "Room Not Found!"
                ));
            }
            $room->setAccessToken($accessToken);
            $room->setRefreshToken($refreshToken);
            $db_manager->persist($room);
            $db_manager->flush();
            $db_manager->clear();
        }
    }
}