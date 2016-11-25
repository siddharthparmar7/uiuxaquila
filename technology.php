<!--
Author : Siddharth Parmar

IMG 209
Project Aquila
Technology.php
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
    <section class="hero-technology">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h1 class="hero-tech-text">Meet The technology <br>
                        behind Aquila</h1>
                </div>
            </div>
        </div>
    </section>
    
    
<!--    section 2 -->
    <section class="section2">
        <div class="container">
            <div class="section2-wrapper intro">
                <div class="pill-wrapper">
                  <ul class="nav nav-pills">
                    <li class="active" id="aviation-pill"><a data-toggle="pill" href="#home">Aviation Tech</a></li>
                    <li class="inactive" id="communication-pill"><a data-toggle="pill" href="#menu1">Communication</a></li>
                  </ul>
                    </div>
            
  
                <div class="section2-wrapper">
                    <div class="tab-content-wrapper">
                      <div class="tab-content">
                        <div id="home" class="tab-pane fade in active">
                          <h3>Aviation</h3>
                          <p>
                              Today 1.6 billion people live in regions that don't have access to a mobile broadband network. Connecting these remote parts of the world with existing technologies such as buried optical fiber or microwave links on towers is often cost-prohibitive. As part of our commitment to Internet.org, the Facebook Connectivity Lab is developing many new technologies to bring affordable internet access to more people, more quickly. One of the technologies we are building is a fleet of solar-powered aircraft called Aquila. Once they are fully operational, these high-altitude planes will stay airborne for up to 90 days at a time and beam broadband coverage to a 60-mile-wide area on the ground, helping to open the opportunities of the internet to people in underconnected regions.

                            </p>
                            <p>
                                After several months of flying scale models, our team has reached an important milestone: We successfully completed the first full-scale test flight. The low-altitude test flight lasted for 96 minutes — more than three times our planned mission length — and provided our aeronautics team with data on numerous aspects of Aquila's performance, including the autopilot, motors, batteries, radios, ground station, displays, basic aerodynamic handling, structural viability, and crew training. This post details some of our early learnings from the test flight and the data we collected, and looks ahead to some of the challenges we're working on next.
                            </p>
                            
                            
                            <div class="section2-video-wrapper">
                                <div class="playButton">
                                    <a href="#"><img src="icons/Untitled-1-01.png" class="playButton" /></a>
                                </div>
                                 <video width="600" height="400">
                                     <source src="videoForAviationPage.mp4" type="video/mp4">
                                     <source src="videoForAviationPage.ogv" type="video/ogg">
                                     <source src="videoForAviationPage.webm" type="video/webm">
                                     Your browser does not support the video tag.
                                 </video>
                            </div>
                            
                            <h3>Testing Aquila</h3>
                            <p>
                                

                                All flight tests are intended to answer one question: How good were our models at predicting actual behavior? The flight test phase for our first full-scale aircraft started with a functional check flight designed to verify our mathematical models and overall aircraft structure. Here's what we tested:
                            </p>
                            
                            <p>

                                Takeoff: Aquila's design is optimized for minimal mass, so it does not include traditional takeoff and landing gear. The first part of our test involved orchestrating a new kind of takeoff. We attached the airplane to a dolly structure using four straps, then accelerated the dolly to takeoff speed. Once the autopilot sensed that the plane had reached the right speed, the straps were cut simultaneously by pyrotechnic cable cutters known as “squibs.” While the ground-based crew can command the plane's heading, altitude, airspeed, and GPS-based route from a control computer, there are no joysticks involved — takeoff is on autopilot. A great deal of simulation and analysis were performed prior to first flight to understand the dynamics of takeoff and to choose the aircraft's pitch on the dolly, the speed at which it would be released, and the initial elevon angle. The specifications based on our simulations resulted in a successful takeoff.
                                
                            </p>
                            <p>

                                Aerodynamic model: Aquila will need to operate in both cold, thin air at high altitude and warm, thick air at low altitude. The air is 10x more dense at sea level than at cruising altitude, and the aerodynamics of the plane's wings and propellers vary greatly over that range. When designing the aircraft, we built computer models based on computational fluid dynamics that helped us understand how much power is required to propel the plane for the different altitudes and speeds at which it will operate. We then ran the model through thousands of tests, using different parameters, to ensure the plane would meet our performance, stability, and control requirements. We also performed a coarse verification of our drag model, which measures the force of air opposing the moving aircraft. Both the climb rate and the battery usage were close to the predicted values. We tested the autopilot and the aeroservoelastic model on which it is based when we flew our 1/5-scale aircraft earlier this year. Our initial analysis from the full-scale flight suggests our aerodynamic models are in line with what we observed.
                                
                            </p>
                            <p>

                                Battery and power performance: While Aquila's power system will eventually include solar cells, our first few test aircraft are powered only by batteries to give us early indications about their aerodynamic performance, handling qualities, and autopilot performance, and to verify our structural models. Given the low drag and slow speed of 25 mph, Aquila flew on less than 2,000 W of power during its first flight. This matched well with our prediction, which suggests that the propeller efficiency, motor efficiency, and drag were also in line with predicted values.
                            </p>
                            <p>

                                Autopilot performance model: Like many modern UAVs, Aquila is controlled by a full-time autopilot. To make our large, flexible aircraft controllable requires that we understand how the aircraft deforms under the aerodynamic and inertial loads, and what the structural modes and frequencies look like. Our first flight verified that the autopilot design is correct at low altitude and low true airspeed. During all maneuvers, the autopilot was stable and accurate, and it brought the aircraft to the commanded condition in the predicted amount of time. The automatic landing algorithm also performed well, tracking the glide path and centerline with expected accuracy.
                            
                            </p>
                            <p>

                                Real-world conditions: Our simulations and analysis predict how the aircraft will respond to wind, turbulence, and vertical gusts. Our first flight lasted three times longer than the minimum mission length, so we were able to gather data on how the structure and autopilot responded under a range of real-world conditions to help verify these predictions. We are still analyzing the results of the extended test, including a structural failure we experienced just before landing. We hope to share more details on this and other structural tests in the future. To prove out the full capacity of the design, we will continue to push the plane to its limits under more extreme conditions in a lengthy series of tests.
                            </p>
                        </div>
                        <div id="menu1" class="tab-pane fade">
                          <h3>Communication</h3>
                          <p>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                        </div>
                      </div>
                    </div>
                </div>
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