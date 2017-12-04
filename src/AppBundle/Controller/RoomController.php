<?php

namespace AppBundle\Controller;

use AppBundle\Entity\RoomUser;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class RoomController extends Controller
{


    /**
     * PAGE RENDER FUNCTION
     * --------------------
     * Renders the Playlist Room Page
     *
     * @Route("/room/{room_code}", name="room_page")
     * @param Request $request
     * @param $room_code
     * @return \Symfony\Component\HttpFoundation\RedirectResponse|\Symfony\Component\HttpFoundation\Response
     */
    public function roomPageAction(Request $request, $room_code) {

        //Get the current user
        $user = $this->getUser();

        //Look for the room with ID

        $room = $this->getDoctrine()->getRepository('AppBundle:Room')->findRoomByRoomCode($room_code);


        //If No Room found, redirect to error page
        if (!$room) {
            return $this->redirectToRoute('homepage');
        }


        //Look for User in Room
        $roomUser = $this->getDoctrine()->getRepository('AppBundle:RoomUser')->findRoomUser($user, $room);

        if (!$roomUser) {

            //Create new Room User
            $roomUser = new RoomUser($user, $room);


            $db_manager = $this->getDoctrine()->getManager();
            $db_manager->persist($roomUser);
            $db_manager->flush();
            $db_manager->clear();
        }


        //Get All Users in Room
        $roomUsers = $this->getDoctrine()->getRepository('AppBundle:RoomUser')->getRoomUsers($room);


        //Get All Song Suggestions for Room
        $songSuggestions = $this->getDoctrine()->getRepository('AppBundle:GuestRecommendedSong')->getAllByRoom($room);

        return $this->render(':Room:room.html.twig', array(
            'room' => $room,
            'songSuggestions' => $songSuggestions,
            'roomUsers' => $roomUsers
        ));

    }


    /**
     * PAGE RENDER FUNCTION
     * --------------------
     * Renders the room settings page
     *
     *
     * @Route("/room_settings/{id}", name="room_settings")
     * @param Request $request
     * @param $id
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function roomSettingsAction(Request $request, $id) {


        //Get Room by ID
        $room = $this->getDoctrine()->getRepository('AppBundle:Room')->find($id);


        return $this->render(':Room:room_settings.html.twig', array(
            'room' => $room,
        ));
    }

}
