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
            'http://melody-munk.us-west-2.elasticbeanstalk.com/callback/'

        );

        // Request a access token using the code from Spotify
        $session->requestAccessToken($_GET['code']);
        $accessToken = $session->getAccessToken();
        $refreshToken = $session->getRefreshToken();
        $api = new \SpotifyWebAPI\SpotifyWebAPI();
        $api->setAccessToken($accessToken);
        $me = $api->me();
        $me_id = $me->id;
        $playlist = $api->createUserPlaylist($me_id, ['name' => $string = base64_encode(random_bytes(10))]);
        $playlist_uri = $playlist->uri;
        $playlist_id = $playlist->id;
        $myfile = fopen("spotifyat.txt", "w") or die("Unable to open file!");
        fwrite($myfile, $accessToken);
        fclose($myfile);
        $myfile = fopen("spotifyrt.txt", "w") or die("Unable to open file!");
        fwrite($myfile, $refreshToken);
        fclose($myfile);
        $myfile = fopen("spotifyid.txt","w") or die ("Unable to open file!");
        fwrite($myfile, $playlist_id);
        fclose($myfile);
        $api->play('', ['context_uri' => $playlist_uri]);
        // replace this example code with whatever you need
        return $this->render('spotify/spotifycallback.twig');
    }

    /**
     * @Route("/filldatabase/", name="filldatabase")
     */
    public function filldatabase(Request $request)
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
     * @Route("/play/", name="play")
     */
    public function playsong(Request $request)
    {
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

    /**
     * @Route("/addsong/", name="addsong")
     */
    public function addsong(Request $request)
    {
        $accessToken = $this->getAccessToken($request);
        $api = new \SpotifyWebAPI\SpotifyWebAPI();
        $api->setAccessToken($accessToken);
        $roomID = $request->request->get('room_id');
        $songID = $request->request->get('song_id');
        $db_manager = $this->getDoctrine()->getManager();
        //Find room with ID
        $room = $db_manager->getRepository('AppBundle:Room')->find($roomID);
        if (!$room) {
            return new JsonResponse(array(
                'success' => false,
                'message' => "Room Not Found!"
            ));
        }
        $playlistID = $room->getPlaylistId();
        $api->addUserPlaylistTracks($api->me()->id,$playlistID,[$songID]);
        $db_manager->clear();
        return new JsonResponse(array());
    }
    /**
     * @Route("/getplaylist/", name="getplaylist")
     */
    public function getplaylist(Request $request)
    {
        $accessToken = $this->getAccessToken($request);
        $api = new \SpotifyWebAPI\SpotifyWebAPI();
        $api->setAccessToken($accessToken);
        $roomID = $request->request->get('room_id');
        $songID = $request->request->get('song_id');
        $db_manager = $this->getDoctrine()->getManager();
        //Find room with ID
        $room = $db_manager->getRepository('AppBundle:Room')->find($roomID);
        if (!$room) {
            return new JsonResponse(array(
                'success' => false,
                'message' => "Room Not Found!"
            ));
        }
        $playlistID = $room->getPlaylistId();
        $tracks = $api->getUserPlaylistTracks($api->me()->id, $playlistID);
        $db_manager->clear();
        return new JsonResponse(array('tracks' => $tracks));
    }

    /**
     * @Route("/search/", name="search")
     */
    public function search(Request $request)
    {
        $accessToken = $this->getAccessToken($request);
        $api = new \SpotifyWebAPI\SpotifyWebAPI();
        $api->setAccessToken($accessToken);
        $searchText = $request->request->get('searchText');
        $searchText = urlencode($searchText);
        $results = $api->search($searchText, 'track');
        $roomID = $request->request->get('room_id');
        $db_manager = $this->getDoctrine()->getManager();
        //Find room with ID
        $room = $db_manager->getRepository('AppBundle:Room')->find($roomID);
        if (!$room) {
            return new JsonResponse(array(
                'success' => false,
                'message' => "Room Not Found!"
            ));
        }
        $explicit = $room->isExplicit();
        $db_manager->clear();
        

        return new JsonResponse(array("results" => $results, "explicit" => $explicit));
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
        $accessToken = fread($myfile,filesize("spotifyat.txt"));
        fclose($myfile);
        $myfile = fopen("spotifyrt.txt","r") or die("Unable to open file!");
        $refreshToken = fread($myfile,filesize("spotifyrt.txt"));
        fclose($myfile);
        $myfile = fopen("spotifyid.txt","r") or die ("Unable to open file!");
        $playlist_uri = fread($myfile,filesize("spotifyid.txt"));
        fclose($myfile);
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
            $room->setPlaylistId($playlist_uri);
            $db_manager->persist($room);
            $db_manager->flush();
            $db_manager->clear();
        }
    }
}