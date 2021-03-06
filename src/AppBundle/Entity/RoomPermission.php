<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * RoomPermission
 *
 * Map a permission to a room for a given role.
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
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\Room")
     */
    private $room;



    // Constants representing Role types
    public static $DEFAULT = 0;
    public static $ADMIN = 1;
    public static $AUTHENTICATED_GUEST = 2;
    public static $ANONYMOUS_GUEST = 3;

    /**
     * @var int
     *
     * This should be one of the valid role type constants
     *
     * @ORM\Column(name="role", type="integer")
     */
    private $role;


    /**
     * @var Permission
     *
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\Permission")
     */
    private $permission;

    /**
     * @var bool
     *
     * Is this permission specifically allowed or disallowed?
     * @ORM\Column(name="value", type="boolean")
     */
    private $value;

    public function __construct(Room $room, int $role, Permission $permission, bool $value = true) {
        $this->dateCreated = new \DateTime();
        $this->room = $room;
        $this->role = $role;
        $this->permission = $permission;
        $this->value = $value;
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

    /**
     * @return int
     */
    public function getRole()
    {
        return $this->role;
    }

    /**
     * @param int $role
     */
    public function setRole($role)
    {
        $this->role = $role;
    }


    /**
     * @return bool
     */
    public function getValue()
    {
        return $this->value;
    }

    /**
     * @param bool $value
     */
    public function setValue($value)
    {
        $this->value = $value;
    }
}

