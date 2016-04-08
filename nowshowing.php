<?php session_start(); ?>

<!DOCTYPE html>
<html lang="en">


  <head> <!-- head tag body sourced from codearchive3 from the weekly chats -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Silverado Cinema - Now Showing</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="Description" lang="en" content="Silverado Cinema - Silverado">
    <meta name="author" content="Steph Ridnell">

    <!-- icons -->
    <link rel="apple-touch-icon" href="img/sc_apple.png">
    <link rel="shortcut icon" href="img/favicon.ico">

    <link rel="stylesheet" href="css/stylesheet.css" type="text/css">

    <!-- https://www.videoparades.com/video/byBk8z_FqTs/ - tutorial on expand/retract functions i used -->

    <script type="text/javascript">

    function expand(element){
      var target = document.getElementById(element);
      var sh = target.scrollHeight;      
      target.style.height = sh+"px";
    }

    function retract(element){
      var target = document.getElementById(element);
      target.style.height = "0px";
    }

    </script>

    <!-- Image sources:

    Classification images: https://melissaamackay.wordpress.com/2015/09/30/classification-codes-choose-the-right-movie-for-your-family/

    Movie Posters:  http://www.imdb.com/

  -->

  </head>
  <body>

    <!-- header -->

    <?php require('header.php') ?>    


    <!-- body / main content -->

    <div class="content">
      <div class="container">
        <div class="main">
          <h1>Now Showing</h1>
          <h4>new program starts every week!</h4>

          <!-- now showing 1 - star wars -->          
            
              <div class="movie">
                <div class="moviepic"><img src="img/starwarstheforceawakens.jpg" alt="Star Wars - The Force Awakens" /></div>
                <div class="moviename">3D - STAR WARS: THE FORCE AWAKENS</div>
                <div class="nowshowingtext"><em>Starring: Daisy Ridley, John Boyega, Oscar Isaac</em></div>
                <div class="nowshowingtext"><em>Genre(s): Sci-fi, Action</em></div>
                <div class="nowshowingtext">Running Time: 136 mins</div>
                <div class="sessionbox">
                  <div class="sessiontimestitle">Session Times:</div>
                  <div class="sessiontext">
                    <strong>Wednesday - Friday - </strong>9:00pm <br />
                    <strong>Weekends - </strong>9:00pm
              </div>
            </div>
          </div>
          <div class="moviename">
            * EXPERIENCE ON OUR NEW 3D SCREEN!!</div>
            <br />
            <div class="nowshowingtext"><img src="img/M.jpg" alt="Rated M" /></div>

            <p id="divlink"><u>Plot Summary</u>:<br />
            Three decades after the defeat of the Galactic Empire, a new threat arises. The First Order attempts to rule the galaxy and only a ragtag group of heroes can stop them, along with the help of the Resistance. <br />
             
            </p>

          

          <a href="#" onclick="return false" onmousedown="expand('exp_ac')" class="overridelink btn" title="Click to expand">Show More</a>

          <div id="exp_ac" class="expandable">

          <!-- Content that appears when the panel is expanded -->     
          <br />       


            <iframe width="100%" height="315" src="https://www.youtube.com/embed/sGbxmsDFVnE" frameborder="0" allowfullscreen></iframe><br /><br />

            <p> Session Times: </p>

              <form action="bookingform.php" method="get">
                <input type="text" name="movie" value="AC" hidden />
                <select name="day" required>
                  <option value="">Please Choose a day / time</option>
                  <option value="wed9">Wednesday - 9:00pm</option>
                  <option value="thur9">Thursday - 9:00pm</option>
                  <option value="fri9">Friday - 9:00pm</option>
                  <option value="sat9">Saturday - 9:00pm</option>
                  <option value="sun9">Sunday - 9:00pm</option>
                </select> <br /><br />
                <input type="submit" class="btn" value="Book Now!" />
                </form> <br /><br />

              <a href="#" onclick="return false" onmousedown="retract('exp_ac')" >Show Less</a>

              

          </div>
          <hr />

          <!-- now showing 2 - the good dinosaur -->
          

          <div class="movie">
            <div class="moviepic"><img src="img/thegooddinosaur.jpg" alt="The Good Dinosaur" /></div>
            <div class="moviename">THE GOOD DINOSAUR</div>
            <div class="nowshowingtext"><em>Starring: Jeffrey Wright, Frances McDormand, Maleah Nipay-Padilla</em></div>
            <div class="nowshowingtext"><em>Genre(s): Childrens, Animation, Adventure</em></div>
            <div class="nowshowingtext">Running Time: 93 mins</div>
            <div class="sessionbox">
              <div class="sessiontimestitle">Session Times:</div>
              <div class="sessiontext">
                <strong>Monday - Tuesday - </strong>1:00pm<br />
                <strong>Wednesday - Friday - </strong>6:00pm <br />
                <strong>Weekends - </strong>12:00pm
              </div>
            </div>
          </div>
          <br />
            <div class="nowshowingtext"><img src="img/PG.jpg" alt="Rated PG" /></div>
            
            <p><u>Plot Summary</u>:<br />
            In a world where dinosaurs and humans live side-by-side, an Apatosaurus named Arlo makes an unlikely human friend.<br /></p>
          
          <a href="#" onclick="return false" onmousedown="expand('exp_ch')" class="overridelink btn" title="Click to expand">Show More</a>

          <div id="exp_ch" class="expandable">

          <!-- Content that appears when the panel is expanded -->     
          <br />       


            <iframe width="100%" height="315" src="https://www.youtube.com/embed/O-RgquKVTPE" frameborder="0" allowfullscreen></iframe><br /><br />

            <p> Session Times: </p>

             <form action="bookingform.php" method="get">
                <input type="text" name="movie" value="CH" hidden />
                <select name="day" required>
                  <option value="">Please Choose a day / time</option>
                  <option value="mon1">Monday - 1:00pm</option>
                  <option value="tue1">Tuesday - 1:00pm</option>
                  <option value="wed6">Wednesday - 6:00pm</option>
                  <option value="thur6">Thursday - 6:00pm</option>
                  <option value="fri6">Friday - 6:00pm</option>
                  <option value="sat12">Saturday - 12:00pm</option>
                  <option value="sun12">Sunday - 12:00pm</option>
                </select> <br /><br />
                <input type="submit" class="btn" value="Book Now!" />
                </form> <br /><br />

              <a href="#" onclick="return false" onmousedown="retract('exp_ch')" >Show Less</a>

              

          </div>
          <hr />


          <!-- now showing 3 - the assassin -->
          <div class="movie">
            <div class="moviepic"><img src="img/theassassin.jpg" alt="The Assassin" /></div>
            <div class="moviename">THE ASSASSIN (CHINA)</div>
            <div class="nowshowingtext"><em>Starring: Qi Shu, Chen Chang, Satoshi Tsumabuki</em></div>
            <div class="nowshowingtext"><em>Genre(s): Drama, Foreign</em></div>
            <div class="nowshowingtext">Running Time: 105 mins</div>
            <div class="sessionbox">
              <div class="sessiontimestitle">Session Times:</div>
              <div class="sessiontext">
                <strong>Monday - Tuesday - </strong>6:00pm<br />
                <strong>Weekends - </strong>3:00pm
              </div>
            </div>
          </div>
          <div class="moviename">
            * CHINESE AUDIO, ENGLISH SUBTITLES</div>
            <br />
            <div class="nowshowingtext"><img src="img/PG.jpg" alt="Rated PG" /></div>
            
            <p><u>Plot Summary</u>:<br />
            An assassin accepts a dangerous mission to kill a political leader in seventh-century China.<br /></p>
          
          <a href="#" onclick="return false" onmousedown="expand('exp_af')" class="overridelink btn" title="Click to expand">Show More</a>

          <div id="exp_af" class="expandable">

          <!-- Content that appears when the panel is expanded -->     
          <br />       


            <iframe width="100%" height="315" src="https://www.youtube.com/embed/CKFtNsQ78oI" frameborder="0" allowfullscreen></iframe><br /><br />

            <p> Session Times: </p>

              <form action="bookingform.php" method="get">
                <input type="text" name="movie" value="AF" hidden />
                <select name="day" required>
                  <option value="">Please Choose a day / time</option>
                  <option value="mon6">Monday - 6:00pm</option>
                  <option value="tue6">Tuesday - 6:00pm</option>
                  <option value="sat3">Saturday - 3:00pm</option>
                  <option value="sun3">Sunday - 3:00pm</option>
                </select> <br /><br />
                <input type="submit" class="btn" value="Book Now!" />
                </form> <br /><br />

              <a href="#" onclick="return false" onmousedown="retract('exp_af')" >Show Less</a>

              

          </div>
          <hr />

          <!-- now showing 4 - aloha -->
          <div class="movie">
            <div class="moviepic"><img src="img/aloha.jpg" alt="Aloha" /></div>
            <div class="moviename">ALOHA</div>
            <div class="nowshowingtext"><em>Starring: Bradley Cooper, Rachel McAdams, Emma Stone</em></div>
            <div class="nowshowingtext"><em>Genre(s): Romance, Comedy</em></div>
            <div class="nowshowingtext">Running Time: 105 mins</div>
            <div class="sessionbox">
              <div class="sessiontimestitle">Session Times:</div>
              <div class="sessiontext">
                <strong>Monday - Tuesday - </strong>9:00pm<br />
                <strong>Wednesday - Friday - </strong>1:00pm<br />
                <strong>Weekends - </strong>6:00pm
              </div>
            </div>
          </div>
          <br />
            <div class="nowshowingtext"><img src="img/PG.jpg" alt="Rated PG" /></div>
            
            <p><u>Plot Summary</u>:<br />
            A celebrated military contractor returns to the site of his greatest career triumphs and reconnects with a long-ago love while unexpectedly falling for the hard-charging Air Force watch-dog assigned to him.<br /></p>

            <a href="#" onclick="return false" onmousedown="expand('exp_rc')" class="overridelink btn" title="Click to expand">Show More</a>

          <div id="exp_rc" class="expandable">

          <!-- Content that appears when the panel is expanded -->     
          <br />       


            <iframe width="100%" height="315" src="https://www.youtube.com/embed/O3mf_ewjc7s" frameborder="0" allowfullscreen></iframe><br /><br />

            <p> Session Times: </p>

              <form action="bookingform.php" method="get">
                <input type="text" name="movie" value="RC" hidden />
                <select name="day" required>
                  <option value="">Please Choose a day / time</option>
                  <option value="mon9">Monday - 9:00pm</option>
                  <option value="tue9">Tuesday - 9:00pm</option>
                  <option value="wed1">Wednesday - 1:00pm</option>
                  <option value="thur1">Thursday - 1:00pm</option>
                  <option value="fri1">Friday - 1:00pm</option>
                  <option value="sat6">Saturday - 6:00pm</option>
                  <option value="sun6">Sunday - 6:00pm</option>
                </select> <br /><br />
                <input type="submit" class="btn" value="Book Now!" />
                </form> <br /><br />

              <a href="#" onclick="return false" onmousedown="retract('exp_rc')" >Show Less</a>

              

          </div>

            <hr />
          
        </div>

          <?php require('sidebar.php') ?>

        </div>
      </div>

      <?php require('footer.php') ?>

    </body>

</html>