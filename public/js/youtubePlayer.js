var tag = document.createElement('script');
    tag.src = "https://www.youtube.com/iframe_api";
var firstScriptTag = document.getElementsByTagName('script')[0];
    firstScriptTag.parentNode.insertBefore(tag, firstScriptTag);

var player;
var done = false;

function onYouTubeIframeAPIReady(videoID) {

    player = new YT.Player('player', {
        height: '390',
        width: '640',
        // videoId: '1xwbodhLDIg',
        videoId: videoID,
        events: {
            'onReady': onPlayerReady,
            'onStateChange': onPlayerStateChange,
            'onError':onError
        }
    });
}

function onError(event){

}

function onPlayerReady(event) {

    event.target.playVideo();

}

function onPlayerStateChange(event) {
    if (event.data == YT.PlayerState.PLAYING && !done) {
        setTimeout(stopVideo, 6000);
        done = true;
    }
}

function stopVideo() {
    player.stopVideo();
}

function playerVideo(event){
    alert("its me");

    event.preventDefault();

    var inputURL = document.getElementById('inputURL');
    var video   =   inputURL.value.split('=')[1];

    if(inputURL.value.length > 0){
        if($("#player").length){
            player.loadVideoById(video);
        }else{
            var playerDiv = document.createElement("DIV");
                playerDiv.id="player";
                inputURL.parentNode.insertBefore(inputURL,playerDiv);
                onYouTubeIframeAPIReady(video);
        }

    }

}