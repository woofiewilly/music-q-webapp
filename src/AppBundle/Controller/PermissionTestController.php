<?php

namespace AppBundle\Controller;

use AppBundle\Service\PermissionService;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use AppBundle\Entity\User;
use AppBundle\Entity\Room;
use AppBundle\Entity\Permission;
use Doctrine\ORM\EntityManager;

class PermissionTestController extends Controller
{
    /**
     * @Route("/testperm/query", name="")
     *
     * Send GET parameters
     * room = id of room
     * user = id of user
     * permission = name of requested permission
     *
     *
     */
    public function indexAction(Request $request)
    {
        // $request->query->get('param_name');

        $em = $this->getDoctrine()->getManager();

        // Get the relevant objects
        $req_perm = $em->getRepository('AppBundle\Permission')
            ->findOneBy(
                array(
                    'name' => $request->query->get('permission')
                )
            );

        $room = $em->getRepository('AppBundle\Room')
            ->findOneBy($request->query->get('room'));

        $user = $em->getRepository('AppBundle\User')
            ->findOneBy($request->query->get('user'));

        // Use permission service to check if allowed
        $permission_service = new PermissionService($em);
        $result = $permission_service->action_authorized($room, $user, $req_perm);

        return new Response($result);
    }


}
