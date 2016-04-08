<?php session_start(); ?>

<!DOCTYPE html>
<html lang="en">


  <head> <!-- head tag body sourced from codearchive3 from the weekly chats -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Silverado Cinema</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="Description" lang="en" content="Silverado Cinema - Silverado">
    <meta name="author" content="Steph Ridnell">

    <!-- icons -->
    <link rel="apple-touch-icon" href="img/sc_apple.png">
    <link rel="shortcut icon" href="img/favicon.ico">

    <!-- scripts -->
    <!-- plugin by Jssor Slider Maker Online. -->
    <script type="text/javascript" src="js/jquery-1.9.1.min.js"></script>
    <script type="text/javascript" src="js/jssor.slider.mini.js"></script>

    <script>
        jQuery(document).ready(function ($) {
            
            var jssor_1_SlideshowTransitions = [
              {$Duration:1200,$Opacity:2}
            ];
            
            var jssor_1_options = {
              $AutoPlay: true,
              $SlideshowOptions: {
                $Class: $JssorSlideshowRunner$,
                $Transitions: jssor_1_SlideshowTransitions,
                $TransitionsOrder: 1
              },
              $ArrowNavigatorOptions: {
                $Class: $JssorArrowNavigator$
              },
              $BulletNavigatorOptions: {
                $Class: $JssorBulletNavigator$
              }
            };
            
            var jssor_1_slider = new $JssorSlider$("jssor_1", jssor_1_options);
            
            //responsive code begin
            //you can remove responsive code if you don't want the slider scales while window resizing
            function ScaleSlider() {
                var refSize = jssor_1_slider.$Elmt.parentNode.clientWidth;
                if (refSize) {
                    refSize = Math.min(refSize, 600);
                    jssor_1_slider.$ScaleWidth(refSize);
                }
                else {
                    window.setTimeout(ScaleSlider, 30);
                }
            }
            ScaleSlider();
            $(window).bind("load", ScaleSlider);
            $(window).bind("resize", ScaleSlider);
            $(window).bind("orientationchange", ScaleSlider);
            //responsive code end
        });
    </script>

    <style>
    /* style for jquery slider */
        .jssorb05 {
            position: absolute;
        }
        .jssorb05 div, .jssorb05 div:hover, .jssorb05 .av {
            position: absolute;
            /* size of bullet elment */
            width: 16px;
            height: 16px;
            background: url('img/b05.png') no-repeat;
            overflow: hidden;
            cursor: pointer;
        }
        .jssorb05 div { background-position: -7px -7px; }
        .jssorb05 div:hover, .jssorb05 .av:hover { background-position: -37px -7px; }
        .jssorb05 .av { background-position: -67px -7px; }
        .jssorb05 .dn, .jssorb05 .dn:hover { background-position: -97px -7px; }

        .jssora12l, .jssora12r {
            display: block;
            position: absolute;
            /* size of arrow element */
            width: 30px;
            height: 46px;
            cursor: pointer;
            background: url('img/a12.png') no-repeat;
            overflow: hidden;
        }
        .jssora12l { background-position: -16px -37px; }
        .jssora12r { background-position: -75px -37px; }
        .jssora12l:hover { background-position: -136px -37px; }
        .jssora12r:hover { background-position: -195px -37px; }
        .jssora12l.jssora12ldn { background-position: -256px -37px; }
        .jssora12r.jssora12rdn { background-position: -315px -37px; }
    </style>

    <link rel="stylesheet" href="css/stylesheet.css" type="text/css">
  </head>
  <body>

    <!-- header -->

    <?php require('header.php') ?>    


    <!-- body / main content -->

    <div class="content">
      <div class="container">
        <div class="main">
          <h1>Grand Re-Opening Soon!!</h1>
          <h4>closed for renovations</h4>
          <p>Join us at Silverado Cinema for the grand-reopening on the <span class="purplefont">10th of January 2016</span>. Come and experience the brand new 3D monster screen, plush, upgraded seating (including bean bags!) and new Dolby lighting and sound.</p>
          <p><a href="about.php">New floorplan here.</a></p>

  <div id="jssor_1" style="position: relative; margin: 0 auto; top: 0px; left: 0px; width: 600px; height: 300px; overflow: hidden; visibility: hidden;">
        <!-- Loading Screen -->
        <div data-u="loading" style="position: absolute; top: 0px; left: 0px;">
            <div style="filter: alpha(opacity=70); opacity: 0.7; position: absolute; display: block; top: 0px; left: 0px; width: 100%; height: 100%;"></div>
            <div style="position:absolute;display:block;background:url('img/loading.gif') no-repeat center center;top:0px;left:0px;width:100%;height:100%;"></div>
        </div>
        <div data-u="slides" style="cursor: default; position: relative; top: 0px; left: 0px; width: 600px; height: 300px; overflow: hidden;">
            <div data-p="112.50" style="display: none;">
                <img data-u="image" src="img/3dfamily.png" />
            </div>
            <div data-p="112.50" style="display: none;">
                <img data-u="image" src="img/gamble-projector.png" />
            </div>
            <div data-p="112.50" style="display: none;">
                <img data-u="image" src="img/silverado-facade.png" />
            </div>
            <div data-p="112.50" style="display: none;">
                <img data-u="image" src="img/stock2.jpg" />
            </div>
            <div data-p="112.50" style="display: none;">
                <img data-u="image" src="img/stock1.jpg" />
            </div>
            <div data-p="112.50" style="display: none;">
                <img data-u="image" src="img/stock3.jpg" />
            </div>
            <div data-p="112.50" style="display: none;">
                <img data-u="image" src="img/stock4.jpg" />
            </div>
        </div>
        <!-- Bullet Navigator -->
        <div data-u="navigator" class="jssorb05" style="bottom:16px;right:16px;" data-autocenter="1">
            <!-- bullet navigator item prototype -->
            <div data-u="prototype" style="width:16px;height:16px;"></div>
        </div>
        <!-- Arrow Navigator -->
        <span data-u="arrowleft" class="jssora12l" style="top:0px;left:0px;width:30px;height:46px;" data-autocenter="2"></span>
        <span data-u="arrowright" class="jssora12r" style="top:0px;right:0px;width:30px;height:46px;" data-autocenter="2"></span>
        <a href="http://www.jssor.com" style="display:none">Slideshow Maker</a>
    </div>

          <hr>

          <h3>Silverado Cinema</h3>
          <p>At Silverado Cinema; movies are not only our product, they’re our passion. </p>
          <p>Silverado Cinema was started by Walter P. Gamble in 1952 and has been a thriving hub of cinema and the arts since its creation</p>

          <p>Since then a lot has changed but the exceptional and friendly service (and the heritage building!) have stayed the same. Walter has long since hung up his projection reel but his son Everitt W. Gamble has inherited Walter’s love of cinema and the arts and pushed Silverado Cinema into the 21st century!</p>

          <p>Silverado Cinema has delivered a quality entertainment experience to Silverado for two generations now and we aren’t stopping any time soon!</p>
          <p>We follow a simple motto; Entertainment is an experience - and whatever you wish your experience to be we have the know-how, experience and the resources to make it happen. Consider Silverado Cinema for your next fully catered work function, or childrens' birthday party. Be sure to visit the classy lounge where you can enjoy a few drinks or horderves.</p>
          <p>We look forward to seeing you at Silverado Cinema soon. Enjoy your entertainment experience! <br /><br />
            <a href="book.php" class="btn">Book your tickets online now!</a></p><br />




          <hr>

          </div>

          <!-- sidebar -->

          <?php require('sidebar.php') ?>

        </div>
      </div>

      <!-- footer -->

      <?php require('footer.php') ?>

    </body>

</html>