<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Room_Permissions
 *
 * @ORM\Table(name="room__permissions")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\Room_PermissionsRepository")
 */
class Room_Permissions
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
     * @var int
     *
     * @ORM\Column(name="room_id", type="integer")
     */
    private $roomId;

    /**
     * One room has many roles.
     * @ORM\ManyToMany(targetEntity="Role")
     * @ORM\JoinTable(name="room_roles",
     *      joinColumns={@ORM\JoinColumn(name="room_id", referencedColumnName="id")},
     *      inverseJoinColumns={@ORM\JoinColumn(name="role_id", referencedColumnName="id", unique=true)}
     *      )
     */
    private $roles;

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
     * Set roomId
     *
     * @param integer $roomId
     *
     * @return Room_Permissions
     */
    public function setRoomId($roomId)
    {
        $this->roomId = $roomId;
    
        return $this;
    }

    /**
     * Get roomId
     *
     * @return integer
     */
    public function getRoomId()
    {
        return $this->roomId;
    }


    /**
     * @param $user_id
     * @param $requested_action
     * @return bool Is this user authorized to perform this action?
     */
    public function action_authorized($user_id, $requested_action) {

    }

    /**
     * Add the specified permission to the role type.
     *
     * If permission already exists, ignore.
     * @param $role_type
     * @param $permission
     */
    public function add_permission($role_type, $permission) {

    }

    /**
     * Remove specified permission from the role type.
     *
     * If permission doesn't exist, ignore.
     * @param $role_type
     * @param $permission
     */
    public function remove_permission($role_type, $permission) {

    }

    /**
     * ## Secondary function; not necessary
     *
     * Add permission for specific user.
     *
     * @param $user_id
     * @param $permission
     */
    public function add_user_permission($user_id, $permission) {

    }

    /**
     * ## Secondary function; not necessary ##
     *
     * Remove permission for specific user.
     *
     * @param $user_id
     * @param $permission
     */
    public function remove_user_permission($user_id, $permission) {

    }
}

