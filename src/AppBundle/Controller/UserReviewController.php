<?php

namespace AppBundle\Controller;

use AppBundle\Entity\UserReview;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;

class UserReviewController extends Controller
{


    /**
     * USED WITH AJAX
     * --------------
     * Submits a new User Review for playlist host
     *
     * @Route("/ajax_submit_host_review")
     * @param Request $request
     * @return JsonResponse
     */
    public function submitHostReviewAJAX(Request $request) {

        //If request is an AJAX Request
        if ($request->isXmlHttpRequest()) {

            //Get Current User
            $user = $this->getUser();

            //Get Request Params
            $roomID = $request->request->get('room_id');
            $content = $request->request->get('review_content');


            //Find room with ID
            $room = $this->getDoctrine()->getRepository('AppBundle:Room')->find($roomID);

            //If no room found, return error response
            if (!$room) {
                return new JsonResponse(array(
                   'success' => false,
                   'message' => "Room Not Found!"
                ));
            }

            //Create UserReview Object
            $userReview = new UserReview($room->getRoomOwner(), $user, $content);

            //Persist Review to DB
            $db_manager = $this->getDoctrine()->getManager();

            $db_manager->persist($userReview);
            $db_manager->flush();
            $db_manager->clear();


            return new JsonResponse(array(
                'success' => true,
                'message' => "User Review Submitted!"
            ));

        }
    }

}
