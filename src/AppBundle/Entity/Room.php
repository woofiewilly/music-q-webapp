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
     * @ORM\Column(name="description", type="string", length=1024, nullable=true)
     */
    private $description;

    /**
     * @var string
     *
     * Unique room code for URL prefix
     *
     * @ORM\Column(name="room_code", type="string", length=6)
     */
    private $room_code;

    /**
     * @var boolean
     *
     * Unique room code for URL prefix
     *
     * @ORM\Column(name="explicit", type="boolean")
     */
    private $explicit;

    /**
     * @var UserList
     *
     * @ORM\OneToOne(targetEntity="UserList", cascade={"persist", "remove"})
     * @ORM\JoinColumn(name="blacklist_id", referencedColumnName="id")
     */
    private $blacklist;

    /**
     * @var UserList
     *
     * @ORM\OneToOne(targetEntity="UserList", cascade={"persist", "remove"})
     * @ORM\JoinColumn(name="whitelist_id", referencedColumnName="id")
     */
    private $whitelist;

    /* --- ManyToOne SQL Relationships --- */

    //-1 is blacklist mode, 1 is whitelist mode, 0 is neither

    /**
     * @var integer
     *
     * Room permission restriction type
     *
     * @ORM\Column(name="roomMode", type="integer")
     */
    private $roomMode;
    /**
     * @var User
     *
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\User")
     */
    private $roomOwner;


    /**
     * @var UserList
     *
     * @ORM\OneToOne(targetEntity="UserList", cascade={"persist", "remove"})
     * @ORM\JoinColumn(name="usersInRoom", referencedColumnName="id")
     */
    private $usersInRoom;

    public function __construct(User $roomOwner, $name) {
        $this->dateCreated = new \DateTime();
        $this->roomOwner = $roomOwner;
        $this->name = $name;
        $this->blacklist = new UserList();
        $this->whitelist = new UserList();
        $this->usersInRoom = new UserList();
        $this->roomMode = 0;
        $this->room_code = random_bytes(10);
        $this->explicit = true;
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
     * @return bool
     */
    public function isExplicit()
    {
        return $this->explicit;
    }

    /**
     * @param bool $explicit
     */
    public function setExplicit($explicit)
    {
        $this->explicit = $explicit;
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
        $this->setRoomMode(0);
    }

    public function addUser(User $user) {
        $this->usersInRoom->addUser($user);
    }

    public function removeUser(User $user) {
        $this->usersInRoom->removeUser($user);
    }

    /**
     * @return string
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * @param string $description
     */
    public function setDescription($description)
    {
        $this->description = $description;
    }

    /**
     * Checks if user attempting to join a room is valid given the roomMode and whitelist/blacklist
     *
     * @param User $user
     * @return bool
     */
    public function isValidUser(User $user) {
        if($this->roomMode == 0) {
            //Room mode not set to whitelist or blacklist
            return true;
        } else if($this->roomMode == 1) {
            //Room mode is set to whitelist
            if($this->whitelist->userInList($user)) {
                return true;
            }
            return false;
        } else if ($this->roomMode == -1) {
            //Room mode set to blacklist
            if($this->blacklist->userInList($user)) {
                return false;
            }
            return true;
        }
        //TODO: Add error catch for if roomMode is not set
        return false;
    }
}

