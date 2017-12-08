<?php

namespace AppBundle\Repository;
use AppBundle\Entity\User;

/**
 * RoomRepository
 *
 * This class was generated by the Doctrine ORM. Add your own custom
 * repository methods below.
 */
class RoomRepository extends \Doctrine\ORM\EntityRepository
{

    /**
     * ROOM QUERY FUNCTION
     * -------------------
     * Returns all the rooms that the user owns
     *
     * @param User $user
     * @return array
     */
    public function getAllRoomsForUser(User $user) {
        $query = $this->createQueryBuilder('room')
            ->where('room.roomOwner = :user')
            ->setParameter('user', $user)
            ->orderBy('room.dateCreated', 'DESC')
            ->getQuery();


        return $query->getResult();

    }


    /**
     * ROOM QUERY FUNCTION
     * -------------------
     * Finds a room with the room code provided and returns object
     *
     * @param $roomCode
     * @return Room
     */
    public function findRoomByRoomCode($roomCode) {
        $query =  $this->createQueryBuilder('room')
            ->where('room.room_code = :roomCode')
            ->setParameter('roomCode', $roomCode)
            ->orderBy('room.dateCreated', 'DESC')
            ->setMaxResults(1)
            ->getQuery();

        return $query->getSingleResult();

    }


}
