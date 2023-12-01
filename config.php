<?php

session_start();

require_once 'vendor/autoload.php';

$google_client = new Google_Client();

$google_client->setClientId('951063186377-0nftm69lj13qubu7khaa34pelure3rea.apps.googleusercontent.com');

$google_client->setClientSecret('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');

$google_client->setRedirectUri('http://localhost/pelicula/main.php');

$google_client->addScope('email');

$google_client->addScope('profile');

?>