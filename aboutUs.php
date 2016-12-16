<!--
Author : Siddharth Parmar

IMG 209
Project Aquila
AboutUs.php
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
    <link href="css/blueimp-gallery.min.css" type="text/css" rel="stylesheet">
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
    
    <section class="dexTech-banner">
        <img src="images/dextech-banner.jpg" class="img-responsive">
    </section>
    
     <section class="section2">
        <div class="container">
            <div class="whole-section2-wrapper section2-wrapper-footer">
            <div class="section2-wrapper intro">
            <div class="row about-aquila">
                
                <div class="col-md-10 col-md-offset-1">
                    <div class="sectionTitle">
                        <h1></h1>
                    </div>
                    <div class="col-md-11 col-md-offset-1 aquila-project-intro">
                        <br>
                        <br>
                        <br>
                        <p>
                            DexTech is a web designing company based in Courtenay. Since we started in 2012 we have achieved enormous of success in Canada, particularly in British Columbia. We believe in the transformation of information into the public knowledge. At DexTech we focus on quality and time management so we can deliver our best every time making our customers and business partners happy and more importantly, satisfied.
                        </p>    
               
                            <h3 id="contactUs">Contact Us:</h3>
        <form class="form-horizontal" method="post" action="mailNow.php">
            <div class="form-group">
                <label class="control-label col-sm-2" for="name">Name*:</label>
                <div class="col-sm-5">
                  <input type="text" class="form-control" name="name" id="name" placeholder="Enter Name" required>
                </div>
              </div>
            
              <div class="form-group">
                <label class="control-label col-sm-2" for="email">Email*:</label>
                <div class="col-sm-5">
                  <input type="email" class="form-control" id="email" placeholder="Enter Email" required>
                </div>
              </div>
            
            <div class="form-group">
                <label class="control-label col-sm-2" for="country">Country:</label>
                <div class="col-sm-5">
                  <input type="text" class="form-control" id="country" placeholder="Enter Country" required>
                </div>
              </div>
            
            <div class="form-group">
                <label class="control-label col-sm-2" for="msg">Message:</label>
                <div class="col-sm-5">
                <textarea class="form-control" rows="5" id="msg"></textarea>
                </div>
              </div>
              
              <div class="form-group"> 
                <div class="col-sm-offset-3 col-sm-7">
                  <button type="submit" class="btn btn-default">Submit</button>
                </div>
              </div>
        </form>
                
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
    
    <script src="js/jquery.blueimp-gallery.min.js"></script>
    <script src="js/bootstrap-image-gallery.min.js"></script>
    
<!--    local javascript file-->
    <script src="js/main.js" type="text/javascript"></script>
</body>

</html>