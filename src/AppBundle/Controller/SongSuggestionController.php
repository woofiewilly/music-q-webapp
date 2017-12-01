<?php

namespace AppBundle\Controller;

use AppBundle\Entity\GuestRecommendedSong;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;

class SongSuggestionController extends Controller
{


    /**
     * USED WITH AJAX
     * --------------
     * Recommends a song to a room
     *
     * @Route("/ajax_recommend_song", name="ajax_recommend_song")
     * @param Request $request
     * @return JsonResponse
     */
    public function addNewSongSuggestionAction(Request $request) {


        //If request is an AJAX request
        if ($request->isXmlHttpRequest()) {

            //Get Request Params
            $roomID = $request->request->get('roomID');
            $songName = $request->request->get('songName');
            $songArtist = $request->request->get('songArtist');

            //Get Current User
            $user = $this->getUser();

            //Find Room
            $room = $this->getDoctrine()->getRepository('AppBundle:Room')->find($roomID);

            if (!$room) {
                return new JsonResponse(array(
                   'success' => false,
                   'message' => "No Room Found"
                ));
            }

            //Create Song Suggestion
            $songSuggest = new GuestRecommendedSong($user, $room, $songName, $songArtist);

            //Persist Changes to DB
            $db_manager = $this->getDoctrine()->getManager();
            $db_manager->persist($songSuggest);
            $db_manager->flush();
            $db_manager->clear();

            return new JsonResponse(array(
                'success' => true,
                'message' => "Song Suggestion Created"
            ));

        }
     }


}
