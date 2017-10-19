<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use AppBundle\Entity\GuestRecommendedQueue;
use AppBundle\Entity\GuestRecommendedSong;
use Symfony\Component\HttpFoundation\Request;

class GuestRecSongController extends \Symfony\Bundle\FrameworkBundle\Controller\Controller
{
    /**
     * @Route("/public/testrecsongs", name="")
     *
     * Send GET parameters
     *
     */
    public function indexAction(Request $request) {
        $em = $this->getDoctrine()->getManager();

        $songs = $em->getRepository('AppBundle:GuestRecommendedQueue')
            ->findOneBy(array('name' => $request->query->get('guest_recommended_queue')));

        $recommended_queue_service = $this->get('melody_munk.guest_recommended_queue');
        $result = 'Request done';

        switch($request->query->get('request_type')) {
            case 'addSong':
                break;
            case 'upvoteSong':
                break;
        }
    }


    public function onRoomCreation(GuestRecommendedQueue $queue) {

    }

    public function onAddSong(GuestRecommendedSong $recommendedSong) {

    }
}