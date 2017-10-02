<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * RolePermission
 *
 * @ORM\Table(name="role_permission")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\RolePermissionRepository")
 */
class RolePermission
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
     * @var Role
     *
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\Role", inversedBy="rolePermissions")
     */
    private $role;


    /**
     * @var Permission
     *
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\Permission")
     */
    private $permission;


    public function __construct(Role $role, Permission $permission) {
        $this->dateCreated = new \DateTime();
        $this->role = $role;
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
     * @return RolePermission
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
     * @return Role
     */
    public function getRole()
    {
        return $this->role;
    }

    /**
     * @param Role $role
     */
    public function setRole($role)
    {
        $this->role = $role;
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

