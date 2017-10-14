<?php

namespace AppBundle\Controller;

use AppBundle\Form\UserInfoFormType;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

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


    /**
     * PAGE RENDER FUNCTION
     * --------------------
     * Renders the Edit User Profile Page
     *
     * @Route("/profile_settings", name="profile_settings")
     * @param Request $request
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function editUserProfileAction(Request $request) {

        //Get the Current User
        $user = $this->getUser();


        //Create User Profile Form
        $userForm = $this->createForm(UserInfoFormType::class, $user);

        //Have User Info Form handle request
        $userForm->handleRequest($request);

        //If User Form is submitted, update user
        if ($userForm->isSubmitted()) {

        }


        return $this->render(':User:user_settings.html.twig', array(
            'user' => $user,
            'userForm' => $userForm->createView()
        ));
    }



}