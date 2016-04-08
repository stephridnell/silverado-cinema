<?php session_start(); ?>

<!DOCTYPE html>
<html lang="en">


  <head> <!-- head tag body sourced from codearchive3 from the weekly chats -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Silverado Cinema - Contact</title>
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
          <h1>Contact Us</h1>
          <h4>we'd love to hear from you</h4>

          <br />
          <p> Call us between 11am - 9pm on <span class="purplefont">867 5309</span> </p>
          <p> Or simply contact us anytime via email using the form below:</p>



          <form action="http://titan.csit.rmit.edu.au/~e54061/wp/testcontact.php" method="post">

            Subject: <br/>

            <select name="subject" required>
              <option value="">Please Choose An Option</option>
              <option value="general">General Enquiry</option>
              <option value="groupbooking">Group and Corporate Bookings</option>
              <option value="feedback">Suggestions and Complaints</option>
            </select> <br />

            Name: <br />
            <input type="text" name="fullname" required /> <br />
            
            Email: <br />
            <input type="email" name="email" required /> <br />

            Message: <br />
            <textarea name="message" required></textarea> <br /><br />

            <input type="submit" value="Submit" class="btn">

            <br />
            <br />
            <hr />


        </form>


        <h1>Location</h1>
          <h4>come and visit us</h4>

          <h3>Address:</h3>
          <p class="address">7052 Columbia Pike <br />
            Annandale VA 22003 <br />
            United States</p>

          <!-- cheeky map from google

          Bad value 100% for attribute width on element iframe: Expected a digit but saw % instead

          I got this error but it seems to be working ok so I am ignoring it.

           -->

          <p><iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3107.948582458835!2d-77.19158018465151!3d38.83363837958066!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89b7b333d6db5d5d%3A0xb70325ebbcb8cf34!2sSilverado!5e0!3m2!1sen!2sau!4v1451461483487" width=100% height="450" style="border:0" allowfullscreen></iframe></p>

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