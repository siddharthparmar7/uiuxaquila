
$("#communication-pill a").click(function(){
    if(($("#aviation-pill").hasClass("active"))){
        $("#communication-pill").removeClass("inactive");
        $("#aviation-pill").addClass("inactive");
    }
});

$("#aviation-pill a").click(function(){
    if(($("#communication-pill").hasClass("active"))){
        $("#aviation-pill").removeClass("inactive");
        $("#communication-pill").addClass("inactive");
    }
});



// play button 
// aviation page

$("#playAviationVideo").click(function(){
//   console.log(this);
    var video = document.getElementById("aviationTechVideo");
    
    video.setAttribute("controls", "controls");
    //play video
    video.play();
    
    //hide the play button
    $("#playAviationVideo").fadeOut("slow");
    $(".section2-playbutton-wrapper").css("z-index", "-1");
    
    // hide custom play button when video starts
    video.addEventListener('play', function(){
           $('#playAviationVideo').fadeOut("slow");
    })
    
    // change the z-index of the button wrapper 
    // so video controls can be accessible 
    video.addEventListener('seeked', function(){
    $(".section2-playbutton-wrapper").css("z-index", "-1");
    })
    
    //show the play bitton again if video is paused
    video.addEventListener('pause', function(){
           $('#playAviationVideo').fadeIn("slow");
            $(".section2-playbutton-wrapper").css("z-index", "1");
    })
});