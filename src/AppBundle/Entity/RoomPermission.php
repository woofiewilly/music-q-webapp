<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * RoomPermission
 *
 * @ORM\Table(name="room_permission")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\RoomPermissionRepository")
 */
class RoomPermission
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="dateCreated", type="datetime")
     */
    private $dateCreated;


    /* --- ManyToOne SQL Relationships --- */

    /**
     * @var Room
     *
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\Room", inversedBy="roomPermissions")
     */
    private $room;


    /**
     * @var Permission
     *
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\Permission")
     */
    private $permission;



    public function __construct(Room $room, Permission $permission) {
        $this->dateCreated = new \DateTime();
        $this->room = $room;
        $this->permission = $permission;
    }


    /**
     * Get id
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set dateCreated
     *
     * @param \DateTime $dateCreated
     *
     * @return RoomPermission
     */
    public function setDateCreated($dateCreated)
    {
        $this->dateCreated = $dateCreated;

        return $this;
    }

    /**
     * Get dateCreated
     *
     * @return \DateTime
     */
    public function getDateCreated()
    {
        return $this->dateCreated;
    }

    /**
     * @return Room
     */
    public function getRoom()
    {
        return $this->room;
    }

    /**
     * @param Room $room
     */
    public function setRoom($room)
    {
        $this->room = $room;
    }

    /**
     * @return Permission
     */
    public function getPermission()
    {
        return $this->permission;
    }

    /**
     * @param Permission $permission
     */
    public function setPermission($permission)
    {
        $this->permission = $permission;
    }
}

