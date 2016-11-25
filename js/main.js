/*
=========================================================

            Siddharth R. Parmar
            IMG 209
            Aquila Project
            Main JS file

=========================================================


*/

$("#communication-pill a").click(function(){
    if(($("#aviation-pill").hasClass("active"))){
        $("#aviation-pill").addClass("inactive");
    }
});

$("#aviation-pill a").click(function(){
    if(($("#communication-pill").hasClass("active"))){
        $("#communication-pill").addClass("inactive");
    }
});