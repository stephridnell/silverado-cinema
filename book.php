<?php session_start(); ?>

<!DOCTYPE html>
<html lang="en">

  <head> <!-- head tag body sourced from codearchive3 from the weekly chats -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Silverado Cinema - Book Tickets Online</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="Description" lang="en" content="Silverado Cinema - Silverado">
    <meta name="author" content="Steph Ridnell">

    <!-- icons -->
    <link rel="apple-touch-icon" href="img/sc_apple.png">
    <link rel="shortcut icon" href="img/favicon.ico">

    <link rel="stylesheet" href="css/stylesheet.css" type="text/css">

    <script type="text/javascript">

    // Tutorial for dynamic <select> form elements I used: https://www.videoparades.com/video/UliJeDbc4cw/

    function populate(s1, s2){
      var s1 = document.getElementById(s1); // s1 = movie
      var s2 = document.getElementById(s2); // s2 = day


      s2.innerHTML = ""; //clear out list to begin with


      // if the action movie is selected
      if(s1.value == "AC") {
        var optionArray = ["|","wed9|Wednesday - 9:00pm","thur9|Thursday - 9:00pm","fri9|Friday - 9:00pm","sat9|Saturday - 9:00pm","sun9|Sunday - 9:00pm"];
      }

      // if the childrens movie is selected       
      if(s1.value == "CH") {
        var optionArray = ["|","mon1|Monday - 1:00pm","tue1|Tuesday - 1:00pm","wed6|Wednesday - 6:00pm","thur6|Thursday - 6:00pm","fri6|Friday - 6:00pm","sat12|Saturday - 12:00pm","sun12|Sunday - 12:00pm"];
      }

      // if the foreign movie is selected
      if(s1.value == "AF") {
        var optionArray = ["|","mon6|Monday - 6:00pm","tue6|Tuesday - 6:00pm","sat3|Saturday - 3:00pm","sun3|Sunday - 3:00pm"];
      }

      // if the rom com is selected
      if(s1.value == "RC") {
        var optionArray = ["|","mon9|Monday - 9:00pm","tue9|Tuesday - 9:00pm","wed1|Wednesday - 1:00pm","thur1|Thursday - 1:00pm","fri1|Friday - 1:00pm","sat6|Saturday - 6:00pm","sun6|Sunday - 6:00pm"];
      }

      for(var i in optionArray){
        var pair = optionArray[i].split("|");
        var newOption = document.createElement("option");
        newOption.value = pair[0];
        newOption.innerHTML = pair[1];
        s2.options.add(newOption);
      }

    }    
    </script>

   

  </head>
  <body>

    <!-- header -->

    <?php require('header.php') ?>

    <!-- body / main content -->

    <div class="content">
      <div class="container">
        <div class="main">
          <h1>Book Tickets</h1>
          <h4>book tickets online ahead of time now</h4>

          Movie: <br />
          <form action="bookingform.php" method="get">
          <select id="movie" name="movie" onchange="populate(this.id,'day','time')" required> 

            <option value="">Please select a movie</option>
            <option value="AC">3D - Star Wars: The Force Awakens</option>
            <option value="CH">The Good Dinosaur</option>
            <option value="AF">The Assassin</option>
            <option value="RC">Aloha</option>
          </select> <br />

          Day: <br />

          <!-- 

          The following code yields the error:
          A select element with a required attribute, and without a multiple attribute, and without a size attribute whose value is greater than 1, must have a child option element.

          But it gains children option elements when the function 'populate()' is run, so I am leaving it as is.

          Please inform me if it is bad practice.

           -->

          <select id="day" name="day" required></select> <br />

          <br /><br />

          <input type="submit" value="Choose Tickets" class="btn" />
        </form><br /><br />
    <a href="pricing.php">Click here for full list of current pricing.</a><br /><br />

    <hr />

          </div>

          <?php require('sidebar.php') ?>

        </div>
      </div>

      <?php require('footer.php') ?>

    </body>

</html>