<?php
/**
 * Created by PhpStorm.
 * User: MelodyMunk
 * Date: 10/3/2017
 * Time: 12:35 PM
 */

namespace AppBundle\Entity;

use function Sodium\add;

class GuestRecommendedQueue
{
    private $recommendedQueue;
    private $maxSongs;
    private $currentNum;

    public function __construct(GuestRecommendedSong $guestRecommended = null)
    {
        $this->recommendedQueue = new GuestRecommendedSong[25];
        $this->maxSongs = 25;
        $this->currentNum = 0;
        if($guestRecommended != null) {
            $this->addSong($guestRecommended);
        }
    }

    public function addSong(GuestRecommendedSong $guestRecommended) {
        if($this->currentNum >= $this->maxSongs) {
            $this->expandArray();
        }
        $this->recommendedQueue[$this->currentNum] = $guestRecommended;
        $this->currentNum++;
    }

    private function expandArray(){
        $temp = new GuestRecommendedSong[$this->maxSongs*2];
        for($i = 0; $i < $this->maxSongs; $i++) {
            $temp[$i] = $this->recommendedQueue[$i];
        }
        $this->recommendedQueue = $temp;
        $this->maxSongs *= 2;
    }
}