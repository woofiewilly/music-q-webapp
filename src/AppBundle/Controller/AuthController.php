<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class AuthController extends Controller
{
    /**
     * @Route("/join/{room_code}", name="join")
     */
    public function indexAction(Request $request, $room_code)
    {
        /*use matt's function here*/
            $room_repo = $this->getDoctrine()
                ->getRepository('AppBundle:Room');

            // Gives Entity/Room object
            $room = $room_repo->find(1);
        /*use matt's function here*/

        // replace this example code with whatever you need
        return $this->render(':join:join.html.twig', array(
            'name' => $room->getName()
        ));
    }

}
