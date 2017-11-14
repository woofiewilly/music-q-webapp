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
     * @ORM\Column(type="string")
     */
    private $spotifyId;//ID used by Spotify for song

    /**
     * @var integer
     *
     * @ORM\Column(type="integer")
     */
    private $upVotes;//Number of upvotes given to a song

    /**
     * @var integer
     *
     * @ORM\Column(type="integer")
     */
    private $score;//Score based off upvotes and time of request

    /**
     * @var integer
     *
     * @ORM\Column(type="integer")
     */
    private $timeRequested;//time requested relative to set date

    /**
     * @var string
     *
     * @ORM\Column(type="string")
     */
    private $songName;//name of song retrieved from Spotify

    /**
     * @var GuestRecommendedQueue
     *
     * @ORM\ManyToOne(targetEntity="GuestRecommendedQueue", inversedBy="songs")
     * @ORM\JoinColumn(name="rec_queue", referencedColumnName="id")
     */
    private $guestRecommendedQueue;

    public function __construct($spotifyId)
    {
        $this->spotifyId = $spotifyId;
        $this->timeRequested = time()-1501891200;//Time passed since 08/05/2017
        $this->songName = null; //TODO: Grab song name from spotify
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
}