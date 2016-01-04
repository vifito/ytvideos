<?php
require __DIR__ . '/vendor/autoload.php';

use Madcoda\Youtube;

// API KEY
$apikey = trim(file_get_contents(__DIR__ . '/APIKEY.txt' ));
$youtube = new Youtube( array('key' => $apikey) );
// List: PLmTv5sSj3TpGueGhscXrWMxXNxvTr4iHY
//$playlist = $youtube->getPlaylistById('PLmTv5sSj3TpGueGhscXrWMxXNxvTr4iHY');
$playlist = $youtube->getPlaylistItemsByPlaylistId('PLmTv5sSj3TpGueGhscXrWMxXNxvTr4iHY');

var_dump($playlist);