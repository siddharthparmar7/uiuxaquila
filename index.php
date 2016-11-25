<!--
Author : Siddharth Parmar

IMG 209
Project Aquila
Index.php
Date : 7-11-16
-->

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Project Aquila</title>
    <!-- Bootstrap -->
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <!--    local css file-->
    <link href="css/main.css" type="text/css" rel="stylesheet">
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>

<body>
    
<!--    include header and Nav-->
    <?php
    
        include("templates/header.php");
    
    ?>
    
 <!--    section hero image and text-->
    <section class="hero">
        <div class="hero-text">
            <h1>Meet Aquila</h1>
            <a href="#"><img src="icons/Untitled-1-01.png" class="playButton" /></a>
        </div>
        <div class="hero-video">
<!--            <input type="image" src="icons/Untitled-1-01.png" class="playButton" /> -->
            <video poster="images/heroImage.jpg" preload="meta" autoplay muted loop>
                <source src="AquilaFlyingPromo.mp4" type="video/mp4">
                <source src="AquilaFlyingPromo.ogv" type="application/ogg">
                <source src="AquilaFlyingPromo.webm" type="application/webm"> 
            </video>
        </div>
    </section>
    
    
    <!--    second section of the page with little overlap on the hero section-->
    <section class="section2">
        <div class="container">
            <div class="whole-section2-wrapper">
            <div class="section2-wrapper intro">
            <div class="row about-aquila">
                
                <div class="col-md-10 col-md-offset-1">
                    <div class="sectionTitle">
                        <h1>Aquila</h1>
                    </div>
                    <div class="col-md-11 col-md-offset-1 aquila-project-intro">
                        <p>
                            Today 1.6 billion people live in regions that don't have access to a mobile broadband network. Connecting these remote parts of the world with existing technologies such as buried optical fiber or microwave links on towers is often cost-prohibitive. As part of our commitment to Internet.org, the Facebook Connectivity Lab is developing many new technologies to bring affordable internet access to more people, more quickly. One of the technologies we are building is a fleet of solar-powered aircraft called Aquila. Once they are fully operational, these high-altitude planes will stay airborne for up to 90 days at a time and beam broadband coverage to a 60-mile-wide area on the ground, helping to open the opportunities of the internet to people in underconnected regions.
                        </p>
                        <p>

                            After several months of flying scale models, our team has reached an important milestone: We successfully completed the first full-scale test flight. The low-altitude test flight lasted for 96 minutes — more than three times our planned mission length — and provided our aeronautics team with data on numerous aspects of Aquila's performance, including the autopilot, motors, batteries, radios, ground station, displays, basic aerodynamic handling, structural viability, and crew training. This post details some of our early learnings from the test flight and the data we collected, and looks ahead to some of the challenges we're working on next.
                        </p>
                    </div>
                </div>
                </div>
            </div>
            
            <div class="section2-wrapper">
            <div class="row">
                <div class="col-md-10 col-md-offset-1">
                    <div class="sectionTitle">
                        <h1>Technology Introduction</h1>
                    </div>
                    <div class="col-md-6 col-md-offset-1">
                        <h2 class="sec2-tech-name">Aviation Tech</h2>
                        <div class="col-md-9 sec2-tech-details">
                            <p>
                            Aquila will need to operate in both cold, thin air at high altitude and warm, thick air at low altitude. The air is 10x more dense at sea level than at cruising altitude, and the aerodynamics of the plane's wings and propellers vary greatly over that range. 
                            </p>
                            
                            <a href="#" class="learn-more">Learn more ></a>
                        </div>
                    </div>
                    <div class="col-md-5">
                        <h2 class="sec2-tech-name">Communication</h2>
                        <div class="col-md-10 sec2-tech-details">
                            <p>
                            Aquila will carry a communications payload that will use lasers to transfer data more than 10 times faster than existing systems. It will be able to aim its beams precisely enough to hit a dime more than 11 miles away while in motion.
                            </p>
                            
                            <a href="#" class="learn-more">Learn more ></a>
                        </div>
                    </div>
                </div>
            </div>
            </div>
            
<!--            include thumbnails of the gallery-->
             <?php
                include("templates/gallery-thumbnails.php");
             ?>
            
        </div>  
            
            </div>
    </section>
    
<!--    including footer  and secondary nav -->
    <section class="section3 footer">
            <?php
                include("templates/footer.php");
            ?>
    </section>
    
        <!-- /.container -->
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
<!--    local javascript file-->
    <script src="js/main.js" type="text/javascript"></script>
</body>

</html>