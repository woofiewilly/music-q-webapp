<?php
require 'vendor/autoload.php';

$api = new SpotifyWebAPI\SpotifyWebAPI();

// Fetch the saved access token from somewhere. A database for example.

$api = new SpotifyWebAPI\SpotifyWebAPI();
$api->setAccessToken($accessToken);

// It's now possible to request data about the currently authenticated user
print_r(
    $api->me()
);

print_r(
    $api->getTrack('7EjyzZcbLxW7PaaLua9Ksb')
);