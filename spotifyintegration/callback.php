<?php
require 'vendor/autoload.php';

$session = new SpotifyWebAPI\Session(
    'f201b6c284a44bd6ac11f07430262360',
    'a087e72614b344ca8919c6c79200335f',
    'http://localhost:8888/callback'
);

// Request a access token using the code from Spotify
$session->requestAccessToken($_GET['code']);

$accessToken = $session->getAccessToken();
$refreshToken = $session->getRefreshToken();

// Store the access and refresh tokens somewhere. In a database for example.

// Send the user along and fetch some data!
header('Location: app.php');
die();