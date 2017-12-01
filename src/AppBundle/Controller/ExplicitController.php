<?php

namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\Config\Definition\Exception\Exception;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

class ExplicitController extends Controller
{
    /**
     * @Route("/explicit/", name="explicit")
     *
     * Send POST parameters
     * room_id = id of room
     * value = boolean
     *
     * @param Request $request
     * @return Response
     */
    public function indexAction(Request $request)
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
            $room->setExplicit($value == "true");

            $db_manager->persist($room);
            $db_manager->flush();
            $db_manager->clear();


            return new JsonResponse(array(
                'success' => true,
                'message' => "Explicit Paramater Updated"
            ));

        }
    }

}
