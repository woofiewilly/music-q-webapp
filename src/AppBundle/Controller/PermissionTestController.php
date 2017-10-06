<?php

namespace AppBundle\Controller;

use AppBundle\Service\PermissionService;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\Config\Definition\Exception\Exception;
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
     * request_type = {'query' || 'add' || 'remove'}
     *
     */
    public function indexAction(Request $request)
    {

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

        $permission_service = new PermissionService($em);

        switch ($request->query->get('request_type')) {

            case 'query':
                // Use permission service to check if allowed
                // Just assuming that previous queries were successful
                $result = $permission_service->action_authorized($room, $user, $req_perm);
                break;

            case 'add':

                break;

            case 'remove':

                break;

            default:
                throw new Exception('Unknown request_type');
        }
        return new Response($result);
    }

}
