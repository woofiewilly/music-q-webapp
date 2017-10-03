<?php
/**
 * Created by PhpStorm.
 * User: MelodyMunk
 * Date: 10/1/2017
 * Time: 6:14 PM
 */

namespace AppBundle\Entity;


class GuestRecommendedSong
{
    private $spotifyId;

    private $upVotes;

    private $score;

    private $timeRequested;

    private $songName;

    public function __construct($spotifyId)
    {
        $this->spotifyId = spotifyId;
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


    public function updateScore() {
        $this->score = log10($this->upVotes) + $this->timeRequested/300;//Logarithmic scale for increasing score with additional points for each 5 minutes passed
    }

    public function increaseUpVotes() {
        $this->upVotes++;
        $this->updateScore();
    }
}