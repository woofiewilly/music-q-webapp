<?php
/**
 * Created by PhpStorm.
 * User: mttwardowski
 * Date: 12/1/17
 * Time: 1:24 AM
 */

namespace AppBundle\Repository;


use AppBundle\Entity\Room;

class GuestRecommendedSongRepository extends \Doctrine\ORM\EntityRepository
{

    public function getAllByRoom(Room $room) {
        $query = $this->createQueryBuilder('recommended')
            ->where('recommended.room = :room')
            ->setParameter('room', $room)
            ->orderBy('recommended.id', 'DESC')
            ->setMaxResults(5)
            ->getQuery();

        return $query->getResult();

    }

}