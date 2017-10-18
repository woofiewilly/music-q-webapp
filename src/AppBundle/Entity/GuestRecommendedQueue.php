<?php
namespace AppBundle\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\ORM\Mapping as ORM;


/**
 * @ORM\Entity
 * @ORM\Table(name="guest_recommended_queue")
 */
class GuestRecommendedQueue
{
    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var
     *
     * @ORM\OneToMany(targetEntity="GuestRecommendedSong", mappedBy="guestRecommendedQueue")
     */
    private $songs;

    public function __construct(GuestRecommendedSong $guestRecommended = null)
    {
        $this->songs = new ArrayCollection();

        if($guestRecommended != null) {
            $this->addSong($guestRecommended);
        }
    }

    public function addSong(GuestRecommendedSong $guestRecommended) {
        array_push($songs, $guestRecommended);
    }

    //Comparator functions - May not be needed
    public function updateRank() {
        usort($this->songs[], "compareByScore");
    }

    public function compareByScore(GuestRecommendedSong $song1, GuestRecommendedSong $song2) {
        $diff = $song1->getScore() - $song2->getScore();
        if($diff == 0) {
            return 1;
        }
        return ($diff > 0) ? 1 : -1;
    }
}