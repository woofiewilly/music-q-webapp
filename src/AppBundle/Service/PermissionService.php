<?php

namespace AppBundle\Service;

use Doctrine\ORM\EntityManager;
use Doctrine\ORM\EntityNotFoundException;
use AppBundle\Entity\Room;
use AppBundle\Entity\User;
use AppBundle\Entity\RoomUserRole;

class PermissionService {


    /**
     * @var EntityManager
     */
    private $db_manager;


    public function __construct(EntityManager $em)
    {
        $this->db_manager = $em;

    }


    /**
     * @param Room $room
     * @param User $user
     * @param $requested_action
     * @return bool Is this user authorized to perform this action?
     * @throws EntityNotFoundException
     * @internal param User $user_id
     * @internal param $room_id
     */
    public function action_authorized(Room $room, User $user, Permission $requested_action) {
        // Get user's role
        // Search for link that is linked between room and user
        $user_room_link = $this->db_manager->getRepository('RoomUserRole')
            ->findBy(array('room' => $room, 'user' => $user));
        if ($user_room_link == null) {
            // TODO: Should we be using a different exception?
            throw new EntityNotFoundException('User is not in this room');
        }

        // Might need this repo more than once, so store it
        $rp_repo = $this->db_manager->getRepository('RoomPermission');
        $permission_entry = $rp_repo->findBy(
                array('role' => $user_room_link->getRole(),
                    'room' => $room,
                    'permission' => $requested_action
                )
            );
        // Check if permission entry exists for the user's role
        if ($permission_entry == null) {
            // If not, check what the default is

        }

        // Return result
    }

    /**
     * Add the specified permission to the role type.
     *
     * If permission already exists, ignore.
     * @param $role_type
     * @param $permission
     */
    public function add_permission($room_id, $role_type, $permission, $value = true) {
        // Check if permission exists
            // If it exists, does it match the given value parameter?
                // If not, update the value
            // Else nothing needs to be done


    }

    /**
     * Remove specified permission from the role type.
     *
     * If permission doesn't exist, ignore.
     * @param $role_type
     * @param $permission
     */
    public function remove_permission($room_id, $role_type, $permission) {
        // Check if permission exists
            // If it exists, remove it
    }

    /**
     * ## Secondary function; not necessary
     *
     * Add permission for specific user.
     *
     * @param $user_id
     * @param $permission
     */
    public function add_user_permission($room_id, $user_id, $permission) {

    }

    /**
     * ## Secondary function; not necessary ##
     *
     * Remove permission for specific user.
     *
     * @param $user_id
     * @param $permission
     */
    public function remove_user_permission($room_id, $user_id, $permission) {

    }



}
