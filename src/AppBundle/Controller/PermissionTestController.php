<?php

namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\Config\Definition\Exception\Exception;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use AppBundle\Entity\User;
use AppBundle\Entity\Room;
use AppBundle\Entity\Permission;
use Doctrine\ORM\EntityManager;

class PermissionTestController extends Controller
{
    /**
     * @Route("/public/testperm", name="")
     *
     * Send GET parameters
     * room = id of room
     * user = id of user
     * permission = name of permission
     * role_type = integer role type
     * value = string {'true', 'false'}
     *
     * request_type = {'query' || 'add' || 'remove'}
     *
     * @param Request $request
     * @return Response
     */
    public function indexAction(Request $request)
    {

        $em = $this->getDoctrine()->getManager();

        // Get the relevant objects
        $permission = $em->getRepository('AppBundle:Permission')
            ->findOneBy(
                array(
                    'name' => $request->query->get('permission')
                )
            );

        $room = $em->getRepository('AppBundle:Room')
            ->find((int) $request->query->get('room'));

        $user = $em->getRepository('AppBundle:User')
            ->find((int) $request->query->get('user'));

        $permission_service = $this->get('melodymunk.permissions');

        $result = 'Request done';

        switch ($request->query->get('request_type')) {

            case 'query':
                // Use permission service to check if allowed
                // Just assuming that previous queries were successful
                $result = $permission_service->action_authorized($room, $user, $permission);
                break;

            case 'add':
                $permission_service->add_permission($room, $request->query->get('role'),
                    $permission, ($request->query->get('value') === 'true' ));
                break;

            case 'remove':
                $permission_service->remove_permission($room, $request->query->get('role'), $permission);
                break;

            default:
                throw new Exception('Unknown request_type');
                break;
        }
        return new Response($result);
    }

}
