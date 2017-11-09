<?php
/**
 * Created by PhpStorm.
 * User: avnis
 * Date: 10/31/2017
 * Time: 3:17 PM
 */

namespace AppBundle\Service;


class SpotifyService
{


    public function newSession() {
        $session = new \SpotifyWebAPI\Session(
            'f201b6c284a44bd6ac11f07430262360',
            'a087e72614b344ca8919c6c79200335f',
            'http://localhost:8080/callback'
        );


        $options = [
            'scope' => [
                'playlist-read-private',
                'user-read-private',
                'playlist-modify-private',
                'user-modify-playback-state'
            ],
        ];

        header('Location: ' . $session->getAuthorizeUrl($options));

    }

    public  function  callback() {
        $session = new \SpotifyWebAPI\Session(
            'f201b6c284a44bd6ac11f07430262360',
            'a087e72614b344ca8919c6c79200335f',
            'http://localhost:8080/callback'
        );

    // Request a access token using the code from Spotify
        $session->requestAccessToken($_GET['code']);

        $accessToken = $session->getAccessToken();
        $refreshToken = $session->getRefreshToken();
    }

}
