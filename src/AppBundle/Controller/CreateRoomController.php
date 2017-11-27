<?php
/**
 * Created by PhpStorm.
 * User: administrator2
 * Date: 10/30/2017
 * Time: 2:06 PM
 */

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class CreateRoomController extends Controller
{
    /**
     * @Route("/create_room", name="create_room")
     */
    public function indexAction(Request $request)
    {

        // replace this example code with whatever you need
        return $this->render(':createroom:createroom.html.twig');
    }


}