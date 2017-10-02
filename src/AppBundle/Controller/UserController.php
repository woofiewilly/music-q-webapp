<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class UserController extends Controller
{

    /**
     * PAGE RENDER FUNCTION
     * --------------------
     * Renders the User Profile Page
     *
     * @Route("/my_profile", name="my_profile")
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function userProfileAction() {

        //Get the Current User
        $user = $this->getUser();

        //Render User Profile Page
        return $this->render(':User:user_profile.html.twig', array(
            'user' => $user,
        ));
    }



}
