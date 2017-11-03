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

    /**
     * @var string
     *
     * Unique room code for URL prefix
     *
     * @ORM\Column(name="room_code", type="string", length=6)
     */
    private $room_code;

    /**
     * @var UserList
     *
     * @ORM\OneToOne(targetEntity="UserList")
     * @ORM\JoinColumn(name="blacklist_id", referencedColumnName="id")
     */
    private $blacklist;

    /**
     * @var UserList
     *
     * @ORM\OneToOne(targetEntity="UserList")
     * @ORM\JoinColumn(name="whitelist_id", referencedColumnName="id")
     */
    private $whitelist;

    /* --- ManyToOne SQL Relationships --- */

    //-1 is blacklist mode, 1 is whitelist mode, 0 is neither
    /**
     * @var int
     *
     * Room permission restriction type
     *
     * @ORM\Column(name="roomMode", type="int")
     */
    private $roomMode;


    /**
     * @var User
     *
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\User")
     */
    private $roomOwner;



    public function __construct(User $roomOwner, $name) {
        $this->dateCreated = new \DateTime();
        $this->roomOwner = $roomOwner;
        $this->name = $name;
        $this->blacklist = new UserList();
        $this->whitelist = new UserList();
        $this->roomMode = 0;
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
     * @return string
     */
    public function getRoomCode()
    {
        return $this->room_code;
    }

    /**
     * @param string $room_code
     */
    public function setRoomCode($room_code)
    {
        $this->room_code = $room_code;
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


    /**
     * @return UserList
     */
    public function getBlacklist()
    {
        return $this->blacklist;
    }

    /**
     * @param User $user
     * @return $this
     */
    public function addToBlacklist(User $user)
    {
        $this->blacklist->addUser($user);
        return $this;
    }

    /**
     * @param User $user
     * @return $this
     */
    public function removeFromBlacklist(User $user) {
        $this->blacklist->removeUser($user);
        return $this;
    }

    /**
     * @param User $user
     * @return bool
     */
    public function isBlacklisted(User $user) {
        return $this->blacklist->userInList($user);
    }

    /**
     * @param User $user
     * @return Room
     */
    public function addToWhitelist(User $user)
    {
        $this->whitelist->addUser($user);
        return $this;
    }

    /**
     * @param User $user
     * @return $this
     */
    public function removeFromWhitelist(User $user) {
        $this->whitelist->removeUser($user);
        return $this;
    }

    /**
     * @param User $user
     * @return bool
     */
    public function isWhitelisted(User $user) {
        return $this->whitelist->userInList($user);
    }

    /**
     * @param int $mode
     */
    public function setRoomMode($mode) {
        $this->roomMode = $mode;
    }

    public function setModeBlacklist() {
        $this->setRoomMode(-1);
    }

    public function setModeWhitelist() {
        $this->setRoomMode(1);
    }

    public function setModeNeither() {
        $this->roomMode(0);
    }

}

