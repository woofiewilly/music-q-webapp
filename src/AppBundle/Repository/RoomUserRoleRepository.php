<?php

namespace AppBundle\Repository;
use AppBundle\Entity\Room;
use AppBundle\Entity\User;

/**
 * RoomUserRoleRepository
 *
 * This class was generated by the Doctrine ORM. Add your own custom
 * repository methods below.
 */
class RoomUserRoleRepository extends \Doctrine\ORM\EntityRepository
{


    /**
     * Query Function
     * --------------
     * Returns a RoomUserRole Object for the user in the room
     * From there you can get the role and then using RolePermission Repository
     * can get all the permissions the user has
     *
     * @param User $user
     * @param Room $room
     * @return null|object
     */
    public function getRoomRoleForUser(User $user, Room $room) {
        return $this->findOneBy(array(
            'user' => $user,
            'room' => $room,
        ));
    }
}
