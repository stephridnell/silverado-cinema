<?php session_start(); ?>

<!DOCTYPE html>
<html lang="en">


  <head> <!-- head tag body sourced from codearchive3 from the weekly chats -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Silverado Cinema - Floor Plan</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="Description" lang="en" content="Silverado Cinema - Silverado">
    <meta name="author" content="Steph Ridnell">

    <!-- icons -->
    <link rel="apple-touch-icon" href="img/sc_apple.png">
    <link rel="shortcut icon" href="img/favicon.ico">

    <link rel="stylesheet" href="css/stylesheet.css" type="text/css">
  </head>
  <body>

    <!-- header -->

    <?php require('header.php') ?>    


    <!-- body / main content -->

    <div class="content">
      <div class="container">
        <div class="main">
          <h1>Cinema Floor Plan</h1>

          <!-- Floor Plan Source: Assignment Specs -->
          <p><img class="img-responsive" src="img/floorplan.png" alt="New Floor Plan"></p>

          <p>40 Normal seats (Full, Concession  and Child under 12 pricing  options)</p>
          <p>12 First Class seats (Full and Child pricing options)</p>
          <p>13 Bean Bag seats that can  accommodate 2 adults, 1 adult + 1  child OR 3 children (under 12)  </p><br />

          <p><a href="pricing.php" class="btn">Click here for a full list of pricing.</a></p>

          <br />

          <hr />
      

          </div>

          <!-- sidebar -->

          <?php require('sidebar.php') ?>

        </div>
      </div>

      <!-- footer -->

      <?php require('footer.php') ?>

    </body>

</html>