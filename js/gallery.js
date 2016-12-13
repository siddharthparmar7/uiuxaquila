//gallery play button
var videoName= "";

$(".galleryThumbnaiPlayButton").click(function(){
    
    var thisButton = $(this);
    
   videoName = $(this).data("video"); 
    
    var video = document.getElementById(videoName);
    
    video.setAttribute("controls", "controls");
    
    if (video.requestFullscreen) {
  video.requestFullscreen();
} else if (video.mozRequestFullScreen) {
  video.mozRequestFullScreen();
} else if (video.webkitRequestFullscreen) {
  video.webkitRequestFullscreen();
}
    
    //play video
    video.play();
    
    //hide the play button
    $(this).fadeOut("slow");
    
    //show the play bitton again if video is paused
    video.addEventListener('pause', function(){
           $(thisButton).fadeIn("slow");
    })
    
});

document.addEventListener("fullscreenchange", function () {
    console.log(document.fullscreen);
    isVideoFullScreen(document.fullscreen);
}, false);
document.addEventListener("mozfullscreenchange", function () {
    console.log(document.mozFullScreen);
    isVideoFullScreen(document.mozFullScreen);
}, false);
document.addEventListener("webkitfullscreenchange", function () {
    console.log(document.webkitIsFullScreen);
    isVideoFullScreen(document.webkitIsFullScreen);
}, false);


function isVideoFullScreen(bool) {
    var video = document.getElementById(videoName);
    if(bool){ 
        video.play();
    }
    else{
        
        video.pause();
    }
}