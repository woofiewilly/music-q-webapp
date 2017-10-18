<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * RoomUserRole
 *
 * @ORM\Table(name="room_user_role")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\RoomUserRoleRepository")
 */
class RoomUserRole
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

    /**
     * @var User
     *
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\User")
     */
    private $user;


    /**
     * @var int
     *
     * @ORM\Column(name="role", type="integer")
     */
    private $role;

    /**
     * @var bool
     *
     * Is this user currently active in the room?
     * @ORM\Column(name="active", type="boolean")
     */
    private $active;

    public function __construct(Room $room, User $user, int $role) {
        $this->dateCreated = new \DateTime();
        $this->user = $user;
        $this->role = $role;
        $this->active = false;
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
     * @return RoomUserRole
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
     * @return User
     */
    public function getUser()
    {
        return $this->user;
    }

    /**
     * @param User $user
     */
    public function setUser($user)
    {
        $this->user = $user;
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
    public function isActive()
    {
        return $this->active;
    }

    /**
     * @param bool $active
     */
    public function setActive(bool $active)
    {
        $this->active = $active;
    }
}

