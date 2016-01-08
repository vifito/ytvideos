<div id="ytplayer"></div>
<script type="text/javascript" src="https://www.youtube.com/player_api"></script>  

<script type="text/javascript">
function loadVideo(videoId) {
    var player;
    player = new YT.Player('ytplayer', {
        height: '390',
        width: '640',
        videoId: videoId
    });
}
</script>