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
     * @var string
     *
     * @ORM\Column(name="dob", type="string", nullable=true)
     */
    private $dob;


    /**
     * @var string
     *
     * @ORM\Column(name="country", type="string", nullable=true)
     */
    private $country;


    /**
     * @var String
     *
     * @ORM\Column(name="description", type="string", length=512, nullable=true)
     */
    private $description;


    /**
     * @var String
     *
     * @ORM\Column(name="facebook_id", type="string", length=255, nullable=true)
     */
    protected $facebook_id;


    /**
     * @var String
     *
     * @ORM\Column(name="facebook_access_token", type="string", length=255, nullable=true)
     */
    protected $facebook_access_token;


    /* ----- Social Media Links ----- */

    /**
     * @var string
     *
     * @ORM\Column(name="facebook_url", type="string", nullable=true)
     */
    private $facebookURL;

    /**
     * @var string
     *
     * @ORM\Column(name="twitter_url", type="string", nullable=true)
     */
    private $twitterURL;

    /**
     * @var string
     *
     * @ORM\Column(name="instagram_url", type="string", nullable=true)
     */
    private $instagramURL;

    /**
     * @var string
     *
     * @ORM\Column(name="snapchat_name", type="string", nullable=true)
     */
    private $snapchatName;


    /**
     * @var string
     *
     * @ORM\Column(name="youtube_video_url", type="string", nullable=true)
     */
    private $youtubeVideoURL;

    /* --- User Music Fields --- */


    /**
     * @var string
     *
     * @ORM\Column(name="favorite_genre", type="string", nullable=true)
     */
    private $favoriteGenre;

    /**
     * @var string
     *
     * @ORM\Column(name="favorite_artist", type="string", nullable=true)
     */
    private $favoriteArtist;


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

    /**
     * @return string
     */
    public function getDob()
    {
        return $this->dob;
    }

    /**
     * @param string $dob
     */
    public function setDob($dob)
    {
        $this->dob = $dob;
    }

    /**
     * @return string
     */
    public function getCountry()
    {
        return $this->country;
    }

    /**
     * @param string $country
     */
    public function setCountry($country)
    {
        $this->country = $country;
    }

    /**
     * @return mixed
     */
    public function getFacebookId()
    {
        return $this->facebook_id;
    }

    /**
     * @param mixed $facebook_id
     */
    public function setFacebookId($facebook_id)
    {
        $this->facebook_id = $facebook_id;
    }

    /**
     * @return mixed
     */
    public function getFacebookAccessToken()
    {
        return $this->facebook_access_token;
    }

    /**
     * @param mixed $facebook_access_token
     */
    public function setFacebookAccessToken($facebook_access_token)
    {
        $this->facebook_access_token = $facebook_access_token;
    }

    /**
     * @return string
     */
    public function getSnapchatName()
    {
        return $this->snapchatName;
    }

    /**
     * @param string $snapchatName
     */
    public function setSnapchatName($snapchatName)
    {
        $this->snapchatName = $snapchatName;
    }

    /**
     * @return string
     */
    public function getFacebookURL()
    {
        return $this->facebookURL;
    }

    /**
     * @param string $facebookURL
     */
    public function setFacebookURL($facebookURL)
    {
        $this->facebookURL = $facebookURL;
    }

    /**
     * @return string
     */
    public function getInstagramURL()
    {
        return $this->instagramURL;
    }

    /**
     * @param string $instagramURL
     */
    public function setInstagramURL($instagramURL)
    {
        $this->instagramURL = $instagramURL;
    }

    /**
     * @return string
     */
    public function getTwitterURL()
    {
        return $this->twitterURL;
    }

    /**
     * @param string $twitterURL
     */
    public function setTwitterURL($twitterURL)
    {
        $this->twitterURL = $twitterURL;
    }

    /**
     * @return string
     */
    public function getYoutubeVideoURL()
    {
        return $this->youtubeVideoURL;
    }

    /**
     * @param string $youtubeVideoURL
     */
    public function setYoutubeVideoURL($youtubeVideoURL)
    {
        $this->youtubeVideoURL = $youtubeVideoURL;
    }

    /**
     * @return string
     */
    public function getFavoriteGenre()
    {
        return $this->favoriteGenre;
    }

    /**
     * @param string $favoriteGenre
     */
    public function setFavoriteGenre($favoriteGenre)
    {
        $this->favoriteGenre = $favoriteGenre;
    }

    /**
     * @return string
     */
    public function getFavoriteArtist()
    {
        return $this->favoriteArtist;
    }

    /**
     * @param string $favoriteArtist
     */
    public function setFavoriteArtist($favoriteArtist)
    {
        $this->favoriteArtist = $favoriteArtist;
    }


}