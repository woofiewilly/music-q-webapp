<?php

namespace AppBundle\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\ORM\Mapping as ORM;

/**
 * UserList
 *
 * @ORM\Table(name="user_list")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\UserListRepository")
 */
class UserList
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
     * One UserList has many users
     * @var User
     *
     * @ORM\ManyToMany(targetEntity="User")
     * @ORM\JoinTable(name="user_in_list",
     *      joinColumns={@ORM\JoinColumn(name="list_id", referencedColumnName="id")},
     *      inverseJoinColumns={@ORM\JoinColumn(name="user_id", referencedColumnName="id", unique=true)}
     *      )
     */
    private $users;


    /**
     * Get id
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    public function getUsers() {
        return $this->users->toArray();
    }

    public function addUser(User $user) {
        if (!$this->users->contains($user)) {
            $this->users->add($user);
        }

        return $this;
    }

    public function removeUser(User $user) {
        if ($this->users->contains($user)) {
            $this->users->removeElement($user);
        }

        return $this;
    }

    public function userInList(User $user) {
        return $this->users->contains($user);
    }

    public function __construct()
    {
        $this->users = new ArrayCollection();
    }

}

