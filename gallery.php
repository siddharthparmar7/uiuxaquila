<!--
Author : Siddharth Parmar

IMG 209
Project Aquila
gallery.php
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
    
<div class="container">
  <div id="myCarousel" class="carousel slide" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
      <li data-target="#myCarousel" data-slide-to="2"></li>
      <li data-target="#myCarousel" data-slide-to="3"></li>
    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner makeItCover" role="listbox">
      <div class="item active">
        <img src="images/gallery/03.jpg" alt="Chania" width="800" height="450">
          <div class="carousel-caption text-left">
          <h3>Pre-flight</h3>
          </div>
      </div>

      <div class="item">
        <img src="images/gallery/02.jpg" alt="Chania" width="800" height="450">
          <div class="carousel-caption">
          <h3>Aquila in position prior to takeoff</h3>
              </div>
      </div>
    
      <div class="item">
        <img src="images/gallery/01.jpg" alt="Flower" width="800" height="450">
          <div class="carousel-caption">
          <h3>A crane lowers Aquila onto a dolly</h3>
              </div>
      </div>

      <div class="item">
        <img src="images/gallery/04.jpg" alt="Flower" width="800" height="450">
          <div class="carousel-caption">
          <h3>Aquila on the runway</h3>
              </div>
      </div>
    </div>

    <!-- Left and right controls -->
    <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left" aria-hidden="true" style=""></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right" aria-hidden="true" style=""></span>
      <span class="sr-only">Next</span>
    </a>
  </div>
</div>
    
    
    
    
<!--    main gallery-->
        <div id="blueimp-gallery" class="blueimp-gallery">
        <!-- The container for the modal slides -->
        <div class="slides"></div>
        <!-- Controls for the borderless lightbox -->
        <h3 class="title"></h3>
        <a class="prev">‹</a>
        <a class="next">›</a>
        <a class="close">×</a>
        <a class="play-pause"></a>
        <ol class="indicator"></ol>
        <!-- The modal dialog, which will be used to wrap the lightbox content -->
        <div class="modal fade">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" aria-hidden="true">&times;</button>
                        <h4 class="modal-title"></h4>
                    </div>
                    <div class="modal-body next"></div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default pull-left prev">
                            <i class="glyphicon glyphicon-chevron-left"></i>
                            Previous
                        </button>
                        <button type="button" class="btn btn-primary next">
                            Next
                            <i class="glyphicon glyphicon-chevron-right"></i>
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <section class="section2">
        <div class="container">
            <div class="whole-section2-wrapper" id="section2-wrapper-galleryPage">
<!--                <div class="row">-->

                <div id="links" class="row gallery-thumbnails">
                    <div class="col-md-4 col-sm-6 thumbnail-wrapper">
                    <a href="images/gallery/05.jpg" title="Aquila moments after takeoff" data-gallery>
                        <img src="images/gallery/05.jpg" alt="Aquila moments after takeoff" height="200" width="300">
                    </a>
                    </div>
                    <div class="col-md-4 col-sm-6 thumbnail-wrapper">
                    <a href="images/gallery/06.jpg" title="Aquila in flight, wing view 1" data-gallery>
                        <img src="images/gallery/06.jpg" alt="Aquila in flight, wing view 1" height="200" width="300">
                    </a>
                    </div>
                    <div class="col-md-4 col-sm-6 thumbnail-wrapper">
                    <a href="images/gallery/07.jpg" title="Aquila in flight, wing view 2" data-gallery>
                        <img src="images/gallery/07.jpg" alt="Aquila in flight, wing view 2" height="200" width="300">
                    </a>
                    </div>
                    <div class="col-md-4 col-sm-6 thumbnail-wrapper">
                    <a href="images/gallery/08.jpg" title="Mark with some key members of the team at the test site" data-gallery>
                        <img src="images/gallery/08.jpg" alt="Mark with some key members of the team at the test site" height="200" width="300">
                    </a>
                        </div>
                    <div class="col-md-4 col-sm-6 thumbnail-wrapper">
                    <a href="images/gallery/09.jpg" title="Aquilainflight,aerialview" data-gallery>
                        <img src="images/gallery/09.jpg" alt="Aquilainflight,aerialview" height="200" width="300">
                    </a>
                    </div>
                    <div class="col-md-4 col-sm-6 thumbnail-wrapper">
                    <a href="images/gallery/10.jpg" title="Mark and the team watching the flight" data-gallery>
                        <img src="images/gallery/10.jpg" alt="Mark and the team watching the flight" height="200" width="300">
                    </a>
                    </div>
                    
                    <div class="col-md-4 col-sm-6 thumbnail-wrapper">
                    <a href="images/gallery/11.jpg" title="Andy Cox, chief aeronautical engineer, checking wind speed" data-gallery>
                        <img src="images/gallery/11.jpg" alt="Andy Cox, chief aeronautical engineer, checking wind speed" height="200" width="300">
                    </a>
                    </div>
                    
                    <div class="col-md-4 col-sm-6 thumbnail-wrapper">
                    <a href="images/gallery/12.jpg" title="Martin Gomez, head of aeronautical platforms, in the engineering station" data-gallery>
                        <img src="images/gallery/12.jpg" alt="Martin Gomez, head of aeronautical platforms, in the engineering station" height="200" width="300">
                    </a>
                    </div>
                    
                    <div class="col-md-4 col-sm-6 thumbnail-wrapper">
                    <a href="images/gallery/13.jpg" title="Kathryn Cook, technical program manager for Aquila, prior to takeoff" data-gallery>
                        <img src="images/gallery/13.jpg" alt="Kathryn Cook, technical program manager for Aquila, prior to takeoff" height="200" width="300">
                    </a>
                    </div>
                    
                    <div class="col-md-4 col-sm-6 thumbnail-wrapper">
                    <a href="images/gallery/14.jpg" title="Jay Parikh, global head of infrastructure and engineering" data-gallery>
                        <img src="images/gallery/14.jpg" alt="Jay Parikh, global head of infrastructure and engineering" height="200" width="300">
                    </a>
                    </div>
                    
                    <div class="col-md-4 col-sm-6 thumbnail-wrapper">
                    <a href="images/gallery/15.jpg" title="Yael Maguire, PhD, head of Connectivity Lab" data-gallery>
                        <img src="images/gallery/15.jpg" alt="Yael Maguire, PhD, head of Connectivity Lab" height="200" width="300">
                    </a>
                    </div>
                    
                    <div class="col-md-4 col-sm-6 thumbnail-wrapper">
                    <a href="images/gallery/16.jpg" title="A map showing the distribution of 4G, 3G and 2G connections around the world" data-gallery>
                        <img src="images/gallery/16.jpg" alt="A map showing the distribution of 4G, 3G and 2G connections around the world" height="200" width="300">
                    </a>
                    </div>
                    
                    <div class="col-md-4 col-sm-6 thumbnail-wrapper">
                        <div class="section2-playbutton-wrapper">
                            <div class="" id="">
                                <a href="#aviationTech"><img src="icons/play.png" class="playButton galleryThumbnaiPlayButton" data-video="aviationTech" /></a>
                            </div>
                        </div>
                     <video width="300" height="200" id="aviationTech">
                         <source src="videoForAviationPage.mp4" type="video/mp4">
                         Your browser does not support the video tag.
                     </video>
                    </div>
                    
                     <div class="col-md-4 col-sm-6 thumbnail-wrapper">
                        <div class="section2-playbutton-wrapper">
                            <div class="" id="">
                                <a href="#connectivityLabIntro"><img src="icons/play.png" class="playButton galleryThumbnaiPlayButton" data-video="connectivityLabIntro"/></a>
                            </div>
                        </div>
                     <video width="300" height="200" id="connectivityLabIntro">
                         <source src="connectivityLabIntro.mp4" type="video/mp4">
                         Your browser does not support the video tag.
                     </video>
                    </div>
                    
                     <div class="col-md-4 col-sm-6 thumbnail-wrapper">
                        <div class="section2-playbutton-wrapper">
                            <div class="" id="">
                                <a href="#connectivityLabProjects"><img src="icons/play.png" class="playButton galleryThumbnaiPlayButton" data-video="connectivityLabProjects"/></a>
                            </div>
                        </div>
                     <video width="300" height="200" id="connectivityLabProjects">
                         <source src="connectivityLabProjects.mp4" type="video/mp4">
                         Your browser does not support the video tag.
                     </video>
                    </div>
                    
                    <div class="col-md-4 col-sm-6 thumbnail-wrapper">
                        <div class="section2-playbutton-wrapper">
                            <div class="" id="">
                                <a href="#featuredVideo"><img src="icons/play.png" class="playButton galleryThumbnaiPlayButton" data-video="featuredVideo"/></a>
                            </div>
                        </div>
                     <video width="300" height="200" id="featuredVideo">
                         <source src="featuredVideo.mp4" type="video/mp4">
                         Your browser does not support the video tag.
                     </video>
                    </div>
                </div>
<!--                </div>-->
            </div>
        </div>
    </section>
    
    
   <!--    including footer  and secondary nav -->
    <section class="section3 footer">
            <?php
                include("templates/footer.php");
            ?>
    </section>
    
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
    

    <script src="js/jquery.blueimp-gallery.min.js"></script>
    <script src="js/bootstrap-image-gallery.min.js"></script>
<!--    local javascript file-->
    <script src="js/gallery.js" type="text/javascript"></script>
</body>

</html>