<?php

namespace AppBundle\Service;

use AppBundle\Entity\Permission;
use AppBundle\Entity\Room;
use AppBundle\Entity\RoomPermission;
use AppBundle\Entity\User;
use AppBundle\Entity\RoomUserRole;
use Doctrine\ORM\EntityManager;
use Doctrine\ORM\EntityNotFoundException;


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
            ->findOneBy(array('room' => $room, 'user' => $user));
        if ($user_room_link == null) {
            // TODO: Should we be using a different exception?
            throw new EntityNotFoundException('User is not in this room');
        }

        // Might need this repo more than once, so store it
        $rp_repo = $this->db_manager->getRepository('RoomPermission');

        // Get the relevant permission entry
        $permission_entry = $rp_repo->findOneBy(
                array('role' => $user_room_link->getRole(),
                    'room' => $room,
                    'permission' => $requested_action
                )
            );
        // Check if permission entry exists for the user's role
        if ($permission_entry == null) {
            // If not, check what the default is
            $default = $rp_repo->findOneBy(
                array(
                    'role' => RoomPermission::$DEFAULT,
                    'room' => $room,
                    'permission' => $requested_action
                )
            );

            if ($default == null) {
                // I think this shouldn't happen, because there should always be a default
                throw new EntityNotFoundException('No entry for user role, and no default set');
            }

            return $default->getValue() === true; // This action is allowed by default
        }

        // Return result
        return $permission_entry->getValue() === true; // This action is allowed for user's role
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
