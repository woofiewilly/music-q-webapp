<?php

namespace AppBundle\Controller;

use AppBundle\Entity\Playlist;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;

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

        $user = $this->getUser();

        $room = $this->getDoctrine()->getRepository('AppBundle:Room')->findBy(array('room_code' => $variable));

        $playlist = $this->getDoctrine()->getRepository('AppBundle:Playlist')->find($variable);

        return $this->render(':Room:room.html.twig', array(
            'room' => $playlist,
            'user' => $user
        ));
    }




    /**
     * TESTING ROUTE
     * --------------
     * Creates a new Playlist using AJAX
     *
     * @Route("/ajax_create_playlist")
     * @param Request $request
     * @return JsonResponse
     */
    public function addPlaylistTestAJAX(Request $request) {


        //Check to see if AJAX Request
        if ($request->isXmlHttpRequest()) {

            //Get Name from Request Params
            $name = $request->request->get('name');


            //Create a new Playlist
            $playlist = new Playlist($name);


            //Persist new Playlist to DB
            $db_manager = $this->getDoctrine()->getManager();
            $db_manager->persist($playlist);
            $db_manager->flush();
            $db_manager->clear();


            return new JsonResponse(array(
                'success' => true,
                'message' => 'Playlist was created!',
                'playlistID' => $playlist->getId(),
            ));
        }

    }



}
