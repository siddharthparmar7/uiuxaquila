/*
=========================================================

            Siddharth R. Parmar
            IMG 209
            Aquila Project
            Main JS file

=========================================================


*/

//featured video
$("#playFeaturedVideo").click(function(){
   $(".featured-video-wrapper").css("display", "block"); 
     var video = document.getElementById("featured-video");
        if (video.requestFullscreen) {
  video.requestFullscreen();
} else if (video.mozRequestFullScreen) {
  video.mozRequestFullScreen();
} else if (video.webkitRequestFullscreen) {
  video.webkitRequestFullscreen();
}
    
    video.setAttribute("controls", "controls");
    //play video
    video.play();
    
    
    
});

// check for video full screen -> features video
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
    var video = document.getElementById("featured-video");
    if(bool){
        $(".featured-video-wrapper").css("display", "block"); 
        
        video.play();
        
        //exit fullscreen when video ends
        video.addEventListener("ended", function(){
            document.webkitExitFullscreen();
            $(".featured-video-wrapper").css("display", "none"); 
        })
    }
    else{
        $(".featured-video-wrapper").css("display", "none"); 
        
        video.pause();
    }
}
