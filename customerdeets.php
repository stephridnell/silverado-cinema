<?php session_start(); ?>

<!DOCTYPE html>
<html lang="en">


  <head> <!-- head tag body sourced from codearchive3 from the weekly chats -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Silverado Cinema - Enter Details</title>
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
          <h1>Checkout</h1>
          <h4>confirm details</h4>


          <form action="tickets.php" method="post">

            Please confirm customer details: <br/><br/>

            

            Name: <br />
            <input type="text" name="fullname" required /> <br />

            Mobile: <br />
            <input type="tel" name="mob" required pattern="^\({0,1}((0|\+61)(2|4|3|7|8)){0,1}\){0,1}(\ |-){0,1}[0-9]{2}(\ |-){0,1}[0-9]{2}(\ |-){0,1}[0-9]{1}(\ |-){0,1}[0-9]{3}$" title="+61XXXXXXXXX" /> <br />
            
            Email: <br />
            <input type="email" name="email" required /> <br /><br />           

            <input type="submit" value="Continue >>" class="btn">

            <br />
            <br />
            <hr />


        </form>

        
        </div>

          <?php require('sidebar.php') ?>

        </div>
      </div>

      <?php require('footer.php') ?>

    </body>

</html>