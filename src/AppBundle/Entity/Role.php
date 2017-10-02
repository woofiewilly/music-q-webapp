<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Role
 *
 * @ORM\Table(name="role")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\RoleRepository")
 */
class Role
{

    // Constants representing Role types
    // Can use self::CONST_NAME to reference inside class
    public static $DEFAULT = 0;
    public static $ADMIN = 1;
    public static $AUTHENTICATED_GUEST = 2;
    public static $ANONYMOUS_GUEST = 3;


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
     * @var int
     *
     * @ORM\Column(name="type", type="integer")
     */
    private $type;



    /* --- ManyToOne SQL Relationships --- */

    /**
     * @var User
     *
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\User")
     */
    private $user;


    /**
     * @var Room
     *
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\Room")
     */
    private $room;


    /* --- OneToMany SQL Relationships --- */

    /**
     * @var RolePermission
     *
     * @ORM\OneToMany(targetEntity="AppBundle\Entity\RolePermission", mappedBy="role")
     */
    private $rolePermissions;



    public function __construct(User $user, Room $room, $type = null) {
        $this->dateCreated = new \DateTime();
        $this->user = $user;
        $this->room = $room;
        $this->type = $this::$DEFAULT;

        //If Type is passed to constructor set Role Type
        if ($type) {
            $this->type = $type;
        }

    }



    /**
     * Get id
     *
     * @return integer
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set type
     *
     * @param integer $type
     *
     * @return Role
     */
    public function setType($type)
    {
        $this->type = $type;
    
        return $this;
    }

    /**
     * Get type
     *
     * @return integer
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * Set permissionList
     *
     * @param integer $permissionList
     *
     * @return Role
     */
    public function setPermissionList($permissionList)
    {
        $this->permissionList = $permissionList;
    
        return $this;
    }

    /**
     * Get permissionList
     *
     * @return integer
     */
    public function getPermissionList()
    {
        return $this->permissionList;
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
     * @return \DateTime
     */
    public function getDateCreated()
    {
        return $this->dateCreated;
    }

    /**
     * @param \DateTime $dateCreated
     */
    public function setDateCreated($dateCreated)
    {
        $this->dateCreated = $dateCreated;
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
     * @return RolePermission
     */
    public function getRolePermissions()
    {
        return $this->rolePermissions;
    }
}

