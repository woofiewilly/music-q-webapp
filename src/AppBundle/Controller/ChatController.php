<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class ChatControllerController extends Controller
{
    /**
     * @Route("/chat", name="join")
     */
    public function indexAction(Request $request)
    {

        // replace this example code with whatever you need
        return $this->render(':chat_test.html.twig');
    }

}
