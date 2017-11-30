<?php

namespace AppBundle\Controller;

use AppBundle\Entity\Room;
use AppBundle\Form\CreateRoomFormType;
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

        //Get Current User
        $user = $this->getUser();

        //Get All Rooms from DB
        $rooms = $this->getDoctrine()->getRepository('AppBundle:Room')->getAllRoomsForUser($user);

        //Create instance of new room form
        $newRoomForm = $this->createForm(CreateRoomFormType::class);

        //Have Form Handle Request
        $newRoomForm->handleRequest($request);

        //If New Room Form is submitted
        if ($newRoomForm->isSubmitted() && $newRoomForm->isValid()) {

            //Create new Room Object
            $room = new Room($user, $newRoomForm['name']->getData());

            //Set Room Description
            $room->setDescription($newRoomForm['description']->getData());

            //Generate Room Code for Playlist room
            $secuityService = $this->get('melodymunk.security');
            $room->setRoomCode($secuityService->createRoomCode());

            //Persist Changes to DB
            $db_manager = $this->getDoctrine()->getManager();

            $db_manager->persist($room);
            $db_manager->flush();
            $db_manager->clear();


            return $this->redirectToRoute('room_page', array(
                'room_code' => $room->getRoomCode()
            ));
        }


        // replace this example code with whatever you need
        return $this->render(':home:home.html.twig', array(
            'rooms' => $rooms,
            'user' => $user,
            'newRoomForm' => $newRoomForm->createView()
        ));
    }

    /**
     * @Route("/public/ui", name="testui")
     */
    public function uiTest(Request $request) {
      return $this->render(':home:test.html.twig');
    }


    /**
     *
     * @Route("/testing")
     *
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function testAction() {
        return $this->render(':Room:visualize.html.twig');
    }

}


