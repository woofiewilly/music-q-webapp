<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Permission_List
 *
 * @ORM\Table(name="permission__list")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\Permission_ListRepository")
 */
class Permission_List
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
     * @var string
     *
     * @ORM\Column(name="placeholder", type="string", length=255, nullable=true)
     */
    private $placeholder;


    /**
     * Many lists have many permissions.
     * @ManyToMany(targetEntity="Permission")
     * @JoinTable(name="List_Has_Permission",
     *      joinColumns={@JoinColumn(name="list_id", referencedColumnName="id")},
     *      inverseJoinColumns={@JoinColumn(name="permission_id", referencedColumnName="id")}
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
     * Set placeholder
     *
     * @param string $placeholder
     *
     * @return Permission_List
     */
    public function setPlaceholder($placeholder)
    {
        $this->placeholder = $placeholder;
    
        return $this;
    }

    /**
     * Get placeholder
     *
     * @return string
     */
    public function getPlaceholder()
    {
        return $this->placeholder;
    }

    public function addPermission($permission) {

    }

    public function removePermission($permission) {

    }
}

