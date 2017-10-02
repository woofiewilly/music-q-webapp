<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Role_Has_Permission
 *
 * @ORM\Table(name="role__has__permission")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\Role_Has_PermissionRepository")
 */
class Role_Has_Permission
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
     * @ORM\Column(name="role_id", type="integer")
     */
    private $roleId;

    /**
     * @var int
     *
     * @ORM\Column(name="permission_id", type="integer")
     */
    private $permissionId;

    /**
     * @var bool
     *
     * @ORM\Column(name="value", type="boolean")
     */
    private $value;


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
     * Set roleId
     *
     * @param integer $roleId
     *
     * @return Role_Has_Permission
     */
    public function setRoleId($roleId)
    {
        $this->roleId = $roleId;
    
        return $this;
    }

    /**
     * Get roleId
     *
     * @return integer
     */
    public function getRoleId()
    {
        return $this->roleId;
    }

    /**
     * Set permissionId
     *
     * @param integer $permissionId
     *
     * @return Role_Has_Permission
     */
    public function setPermissionId($permissionId)
    {
        $this->permissionId = $permissionId;
    
        return $this;
    }

    /**
     * Get permissionId
     *
     * @return integer
     */
    public function getPermissionId()
    {
        return $this->permissionId;
    }

    /**
     * Set value
     *
     * @param boolean $value
     *
     * @return Role_Has_Permission
     */
    public function setValue($value)
    {
        $this->value = $value;
    
        return $this;
    }

    /**
     * Get value
     *
     * @return boolean
     */
    public function getValue()
    {
        return $this->value;
    }
}

