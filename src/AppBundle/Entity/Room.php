<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Room
 *
 * @ORM\Table(name="room")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\RoomRepository")
 */
class Room
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

    /**
     * @var string
     *
     * @ORM\Column(name="name", type="string", length=255)
     */
    private $name;


    /* --- ManyToOne SQL Relationships --- */


    /**
     * @var User
     *
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\User")
     */
    private $roomOwner;



    /* --- OneToMany SQL Relationships --- */

    /**
     * @var RoomPermission
     *
     * @ORM\OneToMany(targetEntity="AppBundle\Entity\RoomPermission", mappedBy="room")
     */
    private $roomPermissions;



    public function __construct(User $roomOwner, $name) {
        $this->dateCreated = new \DateTime();
        $this->roomOwner = $roomOwner;
        $this->name = $name;
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
     * Set name
     *
     * @param string $name
     *
     * @return Room
     */
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Get name
     *
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Set dateCreated
     *
     * @param \DateTime $dateCreated
     *
     * @return Room
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
     * @return RoomPermission
     */
    public function getRoomPermissions()
    {
        return $this->roomPermissions;
    }

    /**
     * @return User
     */
    public function getRoomOwner()
    {
        return $this->roomOwner;
    }

    /**
     * @param User $roomOwner
     */
    public function setRoomOwner($roomOwner)
    {
        $this->roomOwner = $roomOwner;
    }
}

