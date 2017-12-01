// 2. This code loads the IFrame Player API code asynchronously.
var tag = document.createElement('script');

tag.src = "https://www.youtube.com/iframe_api";
var firstScriptTag = document.getElementsByTagName('script')[0];
firstScriptTag.parentNode.insertBefore(tag, firstScriptTag);

// 3. This function creates an <iframe> (and YouTube player)
//    after the API code downloads.
var player;
function onYouTubeIframeAPIReady() {
    player = new YT.Player('player', {
        height: '390',
        width: '640',
        videoId: '9W44NWYwa1g',
        events: {
            'onReady': onPlayerReady
        }
    });
}

// 4. The API will call this function when the video player is ready.
function onPlayerReady(event) {
    event.target.playVideo();
}

function loadPlaylistForm() {
    id = $('#playlist_input').val();
    $('#playlist_input').val('');

    player.loadPlaylist({list:id});
}

$(document).ready(function() {
   $('#playlist_form').submit(function(e) {
       e.preventDefault();
       loadPlaylistForm();
   });

   $('#toggle_player').click(function() {
       $('#player').toggle();
       $('#controls').toggle();
   });

   $('#previous').click(function( ) {
       player.previousVideo();
   });

   $('#pause').click(function() {
       switch (player.getPlayerState()) {
           case -1:
           case 0:
           case 2:
           case 5:
               console.log('calling playVideo');
               player.playVideo();
               break;
           case 1:
           case 3:
               console.log('calling pauseVideo');
               player.pauseVideo();
               break;
       }
   });

   $('#next').click(function() {
       player.nextVideo();
   });
});