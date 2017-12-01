<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * SongRestriction
 *
 * @ORM\Table(name="song_restriction")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\SongRestrictionRepository")
 */
class SongRestriction
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
     * @ORM\Column(name="songGenre", type="string", length=255, nullable=true)
     */
    private $songGenre;

    /**
     * @var string
     *
     * @ORM\Column(name="songArtist", type="string", length=255, nullable=true)
     */
    private $songArtist;

    /**
     * @var string
     *
     * @ORM\Column(name="songName", type="string", length=255, nullable=true)
     */
    private $songName;


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
     * Set songGenre
     *
     * @param string $songGenre
     *
     * @return SongRestriction
     */
    public function setSongGenre($songGenre)
    {
        $this->songGenre = $songGenre;

        return $this;
    }

    /**
     * Get songGenre
     *
     * @return string
     */
    public function getSongGenre()
    {
        return $this->songGenre;
    }

    /**
     * Set songArtist
     *
     * @param string $songArtist
     *
     * @return SongRestriction
     */
    public function setSongArtist($songArtist)
    {
        $this->songArtist = $songArtist;

        return $this;
    }

    /**
     * Get songArtist
     *
     * @return string
     */
    public function getSongArtist()
    {
        return $this->songArtist;
    }

    /**
     * Set songName
     *
     * @param string $songName
     *
     * @return SongRestriction
     */
    public function setSongName($songName)
    {
        $this->songName = $songName;

        return $this;
    }

    /**
     * Get songName
     *
     * @return string
     */
    public function getSongName()
    {
        return $this->songName;
    }
}

