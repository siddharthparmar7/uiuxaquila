
<h3>Aviation</h3>
<p>
  Today 1.6 billion people live in regions that don't have access to a mobile broadband network. Connecting these remote parts of the world with existing technologies such as buried optical fiber or microwave links on towers is often cost-prohibitive. As part of our commitment to Internet.org, the Facebook Connectivity Lab is developing many new technologies to bring affordable internet access to more people, more quickly. One of the technologies we are building is a fleet of solar-powered aircraft called Aquila. Once they are fully operational, these high-altitude planes will stay airborne for up to 90 days at a time and beam broadband coverage to a 60-mile-wide area on the ground, helping to open the opportunities of the internet to people in underconnected regions.

</p>
<p>
    After several months of flying scale models, our team has reached an important milestone: We successfully completed the first full-scale test flight. The low-altitude test flight lasted for 96 minutes — more than three times our planned mission length — and provided our aeronautics team with data on numerous aspects of Aquila's performance, including the autopilot, motors, batteries, radios, ground station, displays, basic aerodynamic handling, structural viability, and crew training. This post details some of our early learnings from the test flight and the data we collected, and looks ahead to some of the challenges we're working on next.
</p>


<div class="section2-video-wrapper">
    <div class="section2-playbutton-wrapper">
        <div class="" id="playAviationVideo">
            <a href="#aviationTechVideo"><img src="icons/play.png" class="playButton" id="playButtonForTechPage"/></a>
        </div>
<!--
        <div class="pauseButton" id="pauseAviationVideo" hidden>
            <a href="#aviationTechVideo"><img src="icons/pause.png" class="pauseButton" /></a>
        </div>
-->
    </div>
     <video id="aviationTechVideo">
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

    <span class="test-title">Takeoff:</span> Aquila's design is optimized for minimal mass, so it does not include traditional takeoff and landing gear. The first part of our test involved orchestrating a new kind of takeoff. We attached the airplane to a dolly structure using four straps, then accelerated the dolly to takeoff speed. Once the autopilot sensed that the plane had reached the right speed, the straps were cut simultaneously by pyrotechnic cable cutters known as “squibs.” While the ground-based crew can command the plane's heading, altitude, airspeed, and GPS-based route from a control computer, there are no joysticks involved — takeoff is on autopilot. A great deal of simulation and analysis were performed prior to first flight to understand the dynamics of takeoff and to choose the aircraft's pitch on the dolly, the speed at which it would be released, and the initial elevon angle. The specifications based on our simulations resulted in a successful takeoff.

</p>
<p>

    <span class="test-title">Aerodynamic model:</span> Aquila will need to operate in both cold, thin air at high altitude and warm, thick air at low altitude. The air is 10x more dense at sea level than at cruising altitude, and the aerodynamics of the plane's wings and propellers vary greatly over that range. When designing the aircraft, we built computer models based on computational fluid dynamics that helped us understand how much power is required to propel the plane for the different altitudes and speeds at which it will operate. We then ran the model through thousands of tests, using different parameters, to ensure the plane would meet our performance, stability, and control requirements. We also performed a coarse verification of our drag model, which measures the force of air opposing the moving aircraft. Both the climb rate and the battery usage were close to the predicted values. We tested the autopilot and the aeroservoelastic model on which it is based when we flew our 1/5-scale aircraft earlier this year. Our initial analysis from the full-scale flight suggests our aerodynamic models are in line with what we observed.

</p>
<p>

    <span class="test-title">Battery and power performance:</span> While Aquila's power system will eventually include solar cells, our first few test aircraft are powered only by batteries to give us early indications about their aerodynamic performance, handling qualities, and autopilot performance, and to verify our structural models. Given the low drag and slow speed of 25 mph, Aquila flew on less than 2,000 W of power during its first flight. This matched well with our prediction, which suggests that the propeller efficiency, motor efficiency, and drag were also in line with predicted values.
</p>
<p>

    <span class="test-title">Autopilot performance model:</span> Like many modern UAVs, Aquila is controlled by a full-time autopilot. To make our large, flexible aircraft controllable requires that we understand how the aircraft deforms under the aerodynamic and inertial loads, and what the structural modes and frequencies look like. Our first flight verified that the autopilot design is correct at low altitude and low true airspeed. During all maneuvers, the autopilot was stable and accurate, and it brought the aircraft to the commanded condition in the predicted amount of time. The automatic landing algorithm also performed well, tracking the glide path and centerline with expected accuracy.

</p>
<p>

    <span class="test-title">Real-world conditions:</span> Our simulations and analysis predict how the aircraft will respond to wind, turbulence, and vertical gusts. Our first flight lasted three times longer than the minimum mission length, so we were able to gather data on how the structure and autopilot responded under a range of real-world conditions to help verify these predictions. We are still analyzing the results of the extended test, including a structural failure we experienced just before landing. We hope to share more details on this and other structural tests in the future. To prove out the full capacity of the design, we will continue to push the plane to its limits under more extreme conditions in a lengthy series of tests.
</p>
