<?php

namespace AppBundle\Controller;

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
     * @Route("/room/{id}", name="room_page")
     * @param Request $request
     * @param $id
     * @return \Symfony\Component\HttpFoundation\RedirectResponse|\Symfony\Component\HttpFoundation\Response
     */
    public function roomPageAction(Request $request, $id) {

        //Get the current user
        $user = $this->getUser();

        //Look for the room with ID
        $room = $this->getDoctrine()->getRepository('AppBundle:Room')->findRoomByRoomCode($id);


        //If No Room found, redirect to error page
        if (!$room) {
            return $this->redirectToRoute('homepage');
        }

        return $this->render(':Room:room.html.twig', array(
            'room' => $room
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
