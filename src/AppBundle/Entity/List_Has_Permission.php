<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * List_Has_Permission
 *
 * @ORM\Table(name="list__has__permission")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\List_Has_PermissionRepository")
 */
class List_Has_Permission
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
     * @ORM\Column(name="list_id", type="integer")
     */
    private $listId;

    /**
     * @var int
     *
     * @ORM\Column(name="permission_id", type="integer")
     */
    private $permissionId;


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
     * Set listId
     *
     * @param integer $listId
     *
     * @return List_Has_Permission
     */
    public function setListId($listId)
    {
        $this->listId = $listId;

        return $this;
    }

    /**
     * Get listId
     *
     * @return int
     */
    public function getListId()
    {
        return $this->listId;
    }

    /**
     * Set permissionId
     *
     * @param integer $permissionId
     *
     * @return List_Has_Permission
     */
    public function setPermissionId($permissionId)
    {
        $this->permissionId = $permissionId;

        return $this;
    }

    /**
     * Get permissionId
     *
     * @return int
     */
    public function getPermissionId()
    {
        return $this->permissionId;
    }
}

