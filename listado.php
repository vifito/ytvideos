<?php
require __DIR__ . '/vendor/autoload.php';

use Madcoda\Youtube;

// API KEY
$apikey = trim(file_get_contents(__DIR__ . '/APIKEY.txt' ));
$youtube = new Youtube( array('key' => $apikey) );
// List: PLmTv5sSj3TpGueGhscXrWMxXNxvTr4iHY
//$playlist = $youtube->getPlaylistById('PLmTv5sSj3TpGueGhscXrWMxXNxvTr4iHY');
$videos = $youtube->getPlaylistItemsByPlaylistId('PLmTv5sSj3TpGueGhscXrWMxXNxvTr4iHY');

foreach($videos as $video) {
    echo $video->snippet->title . PHP_EOL;
    echo $video->snippet->thumbnails->medium->url . PHP_EOL;
    echo $video->contentDetails->videoId . PHP_EOL;
}

/*
array(1) {
  [0] =>
  class stdClass#5 (6) {
    public $kind =>
    string(20) "youtube#playlistItem"
    public $etag =>
    string(57) ""kuL0kDMAqRo3pU7O0pwlO-Lfzp4/V8mAxXVDSZ6VH01tWC6Bm274RMg""
    public $id =>
    string(45) "PLFJeS94nReeHSJnvhtU9l6pp8UlS4-BqhbBD08jw-xkQ"
    public $snippet =>
    class stdClass#6 (9) {
      public $publishedAt =>
      string(24) "2015-12-21T21:59:28.000Z"
      public $channelId =>
      string(24) "UCTQ9lOLYm3tyBXzrKn4p1bA"
      public $title =>
      string(31) "Pleno Extraordinario 21/12/2015"
      public $description =>
      string(31) "Pleno Extraordinario 21/12/2015"
      public $thumbnails =>
      class stdClass#7 (5) {
        ...
      }
      public $channelTitle =>
      string(18) "Concello de Lalín"
      public $playlistId =>
      string(34) "PLmTv5sSj3TpGueGhscXrWMxXNxvTr4iHY"
      public $position =>
      int(0)
      public $resourceId =>
      class stdClass#13 (2) {
        ...
      }
    }
    public $contentDetails =>
    class stdClass#14 (1) {
      public $videoId =>
      string(11) "7aQY0IKuLq0"
    }
    public $status =>
    class stdClass#15 (1) {
      public $privacyStatus =>
      string(6) "public"
    }
  }
*/