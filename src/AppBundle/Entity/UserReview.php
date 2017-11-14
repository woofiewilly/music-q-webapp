<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * UserReview
 *
 * @ORM\Table(name="user_review")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\UserReviewRepository")
 */
class UserReview
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


    /**
     * @var string
     *
     * @ORM\Column(name="content", type="string", length=512)
     */
    private $content;


    /* --- ManyToOne SQL Relationships --- */

    /**
     * @var User
     *
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\User")
     */
    private $user;


    /**
     * @var User
     *
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\User")
     */
    private $reviewUser;



    public function __construct(User $user, User $reviewUser, $content) {
        $this->dateCreated = new \DateTime();
        $this->user = $user;
        $this->reviewUser = $reviewUser;
        $this->content = $content;
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
     * @return UserReview
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
     * @return User
     */
    public function getReviewUser()
    {
        return $this->reviewUser;
    }

    /**
     * @param User $reviewUser
     */
    public function setReviewUser($reviewUser)
    {
        $this->reviewUser = $reviewUser;
    }

    /**
     * @return string
     */
    public function getContent()
    {
        return $this->content;
    }

    /**
     * @param string $content
     */
    public function setContent($content)
    {
        $this->content = $content;
    }
}

