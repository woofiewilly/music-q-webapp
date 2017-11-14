<?php

namespace AppBundle\Entity;

use FOS\UserBundle\Model\User as BaseUser;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * @ORM\Table(name="users")
 */
class User extends BaseUser
{
    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;

    /**
     * @var String
     *
     * @ORM\Column(name="first_name", type="string", length=255, nullable=true)
     */
    private $firstName;

    /**
     * @var String
     *
     * @ORM\Column(name="last_name", type="string", length=255, nullable=true)
     */
    private $lastName;


    /**
     * @var string
     *
     * @ORM\Column(name="image_url", type="string", nullable=true)
     */
    private $imageURL;


    /**
     * @var String
     *
     * @ORM\Column(name="description", type="string", length=512, nullable=true)
     */
    private $description;

    public function __construct()
    {
        parent::__construct();
        // your own logic
    }

    /**
     * @return String
     */
    public function getFirstName()
    {
        return $this->firstName;
    }

    /**
     * @param String $firstName
     */
    public function setFirstName($firstName)
    {
        $this->firstName = $firstName;
    }

    /**
     * @return String
     */
    public function getLastName()
    {
        return $this->lastName;
    }

    /**
     * @param String $lastName
     */
    public function setLastName($lastName)
    {
        $this->lastName = $lastName;
    }

    /**
     * @return String
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * @param String $description
     */
    public function setDescription($description)
    {
        $this->description = $description;
    }

    /**
     * @return string
     */
    public function getImageURL()
    {
        return $this->imageURL;
    }

    /**
     * @param string $imageURL
     */
    public function setImageURL($imageURL)
    {
        $this->imageURL = $imageURL;
    }


}