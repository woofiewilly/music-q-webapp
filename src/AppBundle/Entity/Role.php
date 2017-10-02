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
    const DEF = 0;
    const ADMIN = 1;
    const AUTHENTICATED_GUEST = 2;
    const ANONYMOUS_GUEST = 3;


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
     *
     */
    private $roomId;

    /**
     * @var int
     *
     * @ORM\Column(name="type", type="integer")
     */
    private $type;

    /**
     * Many roles have Many permissions.
     * @ORM\ManyToMany(targetEntity="Permission")
     * @ORM\JoinTable(name="role_permissions",
     *      joinColumns={@ORM\JoinColumn(name="role_id", referencedColumnName="id")},
     *      inverseJoinColumns={@ORM\JoinColumn(name="perm_id", referencedColumnName="id")}
     *      )
     */
    private $permissions;



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
}

