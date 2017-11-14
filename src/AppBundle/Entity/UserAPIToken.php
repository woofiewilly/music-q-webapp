<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * UserAPIToken
 *
 * @ORM\Table(name="user_a_p_i_token")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\UserAPITokenRepository")
 */
class UserAPIToken
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;
    private $refreshtoken;
    private $accesstoken;
    private $scope;

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
     * @return mixed
     */
    public function getAccesstoken()
    {
        return $this->accesstoken;
    }
    /**
     * @param mixed $accesstoken
     */
    public function setAccesstoken($accesstoken)
    {
        $this->accesstoken = $accesstoken;
    }

    /**
     * @param int $id
     */
    public function setId($id)
    {
        $this->id = $id;
    }

    /**
     * @return mixed
     */
    public function getRefreshtoken()
    {
        return $this->refreshtoken;
    }
    public function setRefreshtoken($refreshtoken)
    {
        $this->refreshtoken = refreshtoken;
    }

    /**
     * @return mixed
     */
    public function getScope()
    {
        return $this->scope;
    }

    /**
     * @param mixed $scope
     */
    public function setScope($scope)
    {
        $this->scope = $scope;
    }
}

