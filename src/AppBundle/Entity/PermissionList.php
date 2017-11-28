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
    /**
     * @var bool
     *
     * @ORM\Column(name="chatAdmin", type="bool")
     */
    private $chatAdmin;

    /**
     * @var bool
     *
     * @ORM\Column(name="announcementsAdmin", type="bool")
     */
    private $announcementsAdmin;

    /**
     * @var bool
     *
     * @ORM\Column(name="recommendationsAdmin", type="bool")
     */
    private $recommendationsAdmin;

    /**
     * @var bool
     *
     * @ORM\Column(name="votingOnSongsAdmin", type="bool")
     */
    private $votingOnSongsAdmin;

    /**
     * @var bool
     *
     * @ORM\Column(name="changeMusicAdmin", type="bool")
     */
    private $changeMusicAdmin;

    /**
     * @var bool
     *
     * @ORM\Column(name="promoteUsersAdmin", type="bool")
     */
    private $promoteUsersAdmin;

    /**
     * @var bool
     *
     * @ORM\Column(name="banUsersAdmin", type="bool")
     */
    private $banUsersAdmin;

    /**
     * @var bool
     *
     * If privilege level allows adding user to whitelist
     * @ORM\Column(name="allowUserAdmin", type="bool")
     */
    private $allowUserAdmin;

    /**
     * @var bool
     *
     * @ORM\Column(name="reportUserAdmin", type="bool")
     */
    private $reportUserAdmin;

    /**
     * @var bool
     *
     * @ORM\Column(name="chatGuest", type="bool")
     */
    private $chatGuest;

    /**
     * @var bool
     *
     * @ORM\Column(name="announcementsGuest", type="bool")
     */
    private $announcementsGuest;

    /**
     * @var bool
     *
     * @ORM\Column(name="recommendationsGuest", type="bool")
     */
    private $recommendationsGuest;

    /**
     * @var bool
     *
     * @ORM\Column(name="votingOnSongsGuest", type="bool")
     */
    private $votingOnSongsGuest;

    /**
     * @var bool
     *
     * @ORM\Column(name="changeMusicGuest", type="bool")
     */
    private $changeMusicGuest;

    /**
     * @var bool
     *
     * @ORM\Column(name="promoteUsersGuest", type="bool")
     */
    private $promoteUsersGuest;

    /**
     * @var bool
     *
     * @ORM\Column(name="banUsersGuest", type="bool")
     */
    private $banUsersGuest;

    /**
     * @var bool
     *
     * If privilege level allows adding user to whitelist
     * @ORM\Column(name="allowUserGuest", type="bool")
     */
    private $allowUserGuest;

    /**
     * @var bool
     *
     * @ORM\Column(name="reportUserGuest", type="bool")
     */
    private $reportUserGuest;

    public function __construct()
    {
        $this->playlistType = 0;
        $this->chatAdmin = TRUE;
        $this->chatGuest = FALSE;
        $this->announcementsAdmin = TRUE;
        $this->announcementsGuest = FALSE;
        $this->recommendationsAdmin = TRUE;
        $this->recommendationsGuest = TRUE;
        $this->votingOnSongsAdmin = TRUE;
        $this->votingOnSongsGuest = TRUE;
        $this->changeMusicAdmin = TRUE;
        $this->changeMusicGuest = FALSE;
        $this->promoteUsersAdmin = TRUE;
        $this->promoteUsersGuest = FALSE;
        $this->banUsersAdmin = TRUE;
        $this->banUsersGuest = FALSE;
        $this->allowUserAdmin = TRUE;
        $this->allowUserGuest = FALSE;
        $this->reportUserAdmin = TRUE;
        $this->reportUserGuest = TRUE;
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

    /**
     * @return bool
     */
    public function isChatAdmin()
    {
        return $this->chatAdmin;
    }

    /**
     * @param bool $chatAdmin
     */
    public function setChatAdmin($chatAdmin)
    {
        $this->chatAdmin = $chatAdmin;
    }

    /**
     * @return bool
     */
    public function isAnnouncementsAdmin()
    {
        return $this->announcementsAdmin;
    }

    /**
     * @param bool $announcementsAdmin
     */
    public function setAnnouncementsAdmin($announcementsAdmin)
    {
        $this->announcementsAdmin = $announcementsAdmin;
    }

    /**
     * @return bool
     */
    public function isRecommendationsAdmin()
    {
        return $this->recommendationsAdmin;
    }

    /**
     * @param bool $recommendationsAdmin
     */
    public function setRecommendationsAdmin($recommendationsAdmin)
    {
        $this->recommendationsAdmin = $recommendationsAdmin;
    }

    /**
     * @return bool
     */
    public function isVotingOnSongsAdmin()
    {
        return $this->votingOnSongsAdmin;
    }

    /**
     * @param bool $votingOnSongsAdmin
     */
    public function setVotingOnSongsAdmin($votingOnSongsAdmin)
    {
        $this->votingOnSongsAdmin = $votingOnSongsAdmin;
    }

    /**
     * @return bool
     */
    public function isChangeMusicAdmin()
    {
        return $this->changeMusicAdmin;
    }

    /**
     * @param bool $changeMusicAdmin
     */
    public function setChangeMusicAdmin($changeMusicAdmin)
    {
        $this->changeMusicAdmin = $changeMusicAdmin;
    }

    /**
     * @return bool
     */
    public function isPromoteUsersAdmin()
    {
        return $this->promoteUsersAdmin;
    }

    /**
     * @param bool $promoteUsersAdmin
     */
    public function setPromoteUsersAdmin($promoteUsersAdmin)
    {
        $this->promoteUsersAdmin = $promoteUsersAdmin;
    }

    /**
     * @return bool
     */
    public function isBanUsersAdmin()
    {
        return $this->banUsersAdmin;
    }

    /**
     * @param bool $banUsersAdmin
     */
    public function setBanUsersAdmin($banUsersAdmin)
    {
        $this->banUsersAdmin = $banUsersAdmin;
    }

    /**
     * @return mixed
     */
    public function getAllowUserAdmin()
    {
        return $this->allowUserAdmin;
    }

    /**
     * @param mixed $allowUserAdmin
     */
    public function setAllowUserAdmin($allowUserAdmin)
    {
        $this->allowUserAdmin = $allowUserAdmin;
    }

    /**
     * @return bool
     */
    public function isReportUserAdmin()
    {
        return $this->reportUserAdmin;
    }

    /**
     * @param bool $reportUserAdmin
     */
    public function setReportUserAdmin($reportUserAdmin)
    {
        $this->reportUserAdmin = $reportUserAdmin;
    }

    /**
     * @return bool
     */
    public function isChatGuest()
    {
        return $this->chatGuest;
    }

    /**
     * @param bool $chatGuest
     */
    public function setChatGuest($chatGuest)
    {
        $this->chatGuest = $chatGuest;
    }

    /**
     * @return bool
     */
    public function isAnnouncementsGuest()
    {
        return $this->announcementsGuest;
    }

    /**
     * @param bool $announcementsGuest
     */
    public function setAnnouncementsGuest($announcementsGuest)
    {
        $this->announcementsGuest = $announcementsGuest;
    }

    /**
     * @return bool
     */
    public function isRecommendationsGuest()
    {
        return $this->recommendationsGuest;
    }

    /**
     * @param bool $recommendationsGuest
     */
    public function setRecommendationsGuest($recommendationsGuest)
    {
        $this->recommendationsGuest = $recommendationsGuest;
    }

    /**
     * @return bool
     */
    public function isVotingOnSongsGuest()
    {
        return $this->votingOnSongsGuest;
    }

    /**
     * @param bool $votingOnSongsGuest
     */
    public function setVotingOnSongsGuest($votingOnSongsGuest)
    {
        $this->votingOnSongsGuest = $votingOnSongsGuest;
    }

    /**
     * @return bool
     */
    public function isChangeMusicGuest()
    {
        return $this->changeMusicGuest;
    }

    /**
     * @param bool $changeMusicGuest
     */
    public function setChangeMusicGuest($changeMusicGuest)
    {
        $this->changeMusicGuest = $changeMusicGuest;
    }

    /**
     * @return bool
     */
    public function isPromoteUsersGuest()
    {
        return $this->promoteUsersGuest;
    }

    /**
     * @param bool $promoteUsersGuest
     */
    public function setPromoteUsersGuest($promoteUsersGuest)
    {
        $this->promoteUsersGuest = $promoteUsersGuest;
    }

    /**
     * @return bool
     */
    public function isBanUsersGuest()
    {
        return $this->banUsersGuest;
    }

    /**
     * @param bool $banUsersGuest
     */
    public function setBanUsersGuest($banUsersGuest)
    {
        $this->banUsersGuest = $banUsersGuest;
    }

    /**
     * @return bool
     */
    public function isAllowUserGuest()
    {
        return $this->allowUserGuest;
    }

    /**
     * @param bool $allowUserGuest
     */
    public function setAllowUserGuest($allowUserGuest)
    {
        $this->allowUserGuest = $allowUserGuest;
    }

    /**
     * @return bool
     */
    public function isReportUserGuest()
    {
        return $this->reportUserGuest;
    }

    /**
     * @param bool $reportUserGuest
     */
    public function setReportUserGuest($reportUserGuest)
    {
        $this->reportUserGuest = $reportUserGuest;
    }

}