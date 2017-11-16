<?php
namespace AppBundle\Entity;
use Doctrine\ORM\Mapping as ORM;
//TODO: List all permission settings possible

class PermissionList
{
    /**
     * Keep track if room is set up for Spotify or YouTube
     * 0 -> Not Set
     * 1 -> Spotify
     * 2 -> YouTube
     * @var int
     *
     * @ORM\Column(name="playlistType", type="integer")
     */
    private $playlistType;

    public function __construct()
    {
        $this->playlistType = 0;
    }

    /**
     * @var int
     */
    public function setPlaylistType($playlistType) {
        $this->playlistType = $playlistType;
    }

    /**
    * @return int
    */
    public function getPlaylistType()
    {
        return $this->playlistType;
    }
}