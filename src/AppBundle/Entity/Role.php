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
     * @ORM\Column(name="type", type="integer")
     */
    private $type;

    /**
     * @var int
     *
     * @ORM\Column(name="permission_list", type="integer")
     *
     * One role has One permission list.
     * @OneToOne(targetEntity="Permission_List")
     * @JoinColumn(name="list_id", referencedColumnName="id")
     */
    private $permissionList;


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

