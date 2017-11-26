<?php

namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\Config\Definition\Exception\Exception;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

class ExplicitController extends Controller
{
    /**
     * @Route("/explicit/", name="explicit")
     *
     * Send GET parameters
     * room = id of room
     * value = string {'true', 'false'}
     *
     * @param Request $request
     * @return Response
     */
    public function indexAction(Request $request)
    {

        $em = $this->getDoctrine()->getManager();

        $em->getRepository('AppBundle:Room')
            ->find((int) $request->query->get('room'))
            ->setExplicit($request->query->get('value') === 'true');

        $result = 'Request done';

        return new Response($result);
    }

}
