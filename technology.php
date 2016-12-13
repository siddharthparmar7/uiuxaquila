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
                    <li class="active" id="aviation-pill"><a data-toggle="pill" href="#aviation">Aviation Tech</a></li>
                    <li class="inactive" id="communication-pill"><a data-toggle="pill" href="#communication">Communication</a></li>
                  </ul>
                    </div>
            
  
                <div class="section2-wrapper-footer">
                    <div class="tab-content-wrapper">
                      <div class="tab-content">
                          
                        <div id="aviation" class="tab-pane fade in active">
                        <?php 
                            include("templates/aviationTech.php");
                        ?>
                        </div>
                          
                        <div id="communication" class="tab-pane fade">
                            
                          <?php
                            include("templates/communication.php");
                            ?>
                        </div>
                      
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
    <script src="js/technology.js" type="text/javascript"></script>
</body>