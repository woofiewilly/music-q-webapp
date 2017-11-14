<?php
require 'vendor/autoload.php';

$session = new SpotifyWebAPI\Session(
    'f201b6c284a44bd6ac11f07430262360',
    'a087e72614b344ca8919c6c79200335f',
    'http://localhost:8888/callback'
);

$options = [
    'scope' => [
        'playlist-read-private',
        'user-read-private',
    ],
];

header('Location: ' . $session->getAuthorizeUrl($options));
die();