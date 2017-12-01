<?php
namespace AppBundle\Entity;
use Doctrine\ORM\Mapping as ORM;

//TODO: Create entity to hold recommended songs
/**
 * @ORM\Entity
 * @ORM\Table(name="guest_recommended_song")
 */
class GuestRecommendedSong
{
    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="spotify_id", type="string", nullable=true)
     */
    private $spotifyId;//ID used by Spotify for song

    /**
     * @var integer
     *
     * @ORM\Column(name="up_votes", type="integer")
     */
    private $upVotes;//Number of upvotes given to a song

    /**
     * @var integer
     *
     * @ORM\Column(name="score", type="integer")
     */
    private $score;//Score based off upvotes and time of request

    /**
     * @var integer
     *
     * @ORM\Column(name="time_requested", type="integer")
     */
    private $timeRequested;//time requested relative to set date

    /**
     * @var string
     *
     * @ORM\Column(name="song_name", type="string", nullable=true)
     */
    private $songName;//name of song retrieved from Spotify


    /**
     * @var string
     *
     * @ORM\Column(name="song_artist", type="string", nullable=true)
     */
    private $songArtist;


    /**
     * @var Room
     *
     * @ORM\ManyToOne(targetEntity="Room")
     */
    private $room;


    /**
     * @var User
     *
     * @ORM\ManyToOne(targetEntity="User")
     */
    private $user;


    public function __construct(User $user, Room $room, $songName, $songArtist)
    {
        $this->user = $user;
        $this->room = $room;
        $this->songName = $songName;
        $this->songArtist = $songArtist;
        $this->timeRequested = time()-1501891200;//Time passed since 08/05/2017
        $this->upVotes = 0;
        $this->score = $this->timeRequested/300;
    }

    /**
     * @return mixed
     */
    public function getSpotifyId()
    {
        return $this->spotifyId;
    }

    /**
     * @return int
     */
    public function getUpVotes()
    {
        return $this->upVotes;
    }

    /**
     * @return float|int
     */
    public function getScore()
    {
        return $this->score;
    }

    /**
     * @return int
     */
    public function getTimeRequested()
    {
        return $this->timeRequested;
    }

    /**
     * @return null
     */
    public function getSongName()
    {
        return $this->songName;
    }

    /**
     * @param int $upVotes
     */
    public function setUpVotes($upVotes)
    {
        $this->upVotes = $upVotes;
    }

    /**
     * @param float|int $score
     */
    public function setScore($score)
    {
        $this->score = $score;
    }


    /**
     * Called when score needs to be updated. Uses same algo in constructor
     */
    public function updateScore() {
        $this->score = log10($this->upVotes) + $this->timeRequested/300;//Logarithmic scale for increasing score with additional points for each 5 minutes passed
    }

    /**
     * Called when upvotes have been increased
     */
    public function incrementUpVotes() {
        $this->upVotes++;
        $this->updateScore();
    }

    /**
     * @return Room
     */
    public function getRoom()
    {
        return $this->room;
    }

    /**
     * @param Room $room
     */
    public function setRoom($room)
    {
        $this->room = $room;
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
     * @return string
     */
    public function getSongArtist()
    {
        return $this->songArtist;
    }

    /**
     * @param string $songArtist
     */
    public function setSongArtist($songArtist)
    {
        $this->songArtist = $songArtist;
    }
}