<?php session_start(); ?>

<!DOCTYPE html>
<html lang="en">


  <head> <!-- head tag body sourced from codearchive3 from the weekly chats -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Silverado Cinema - Pricing</title>
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
          <h1>Ticket Pricing</h1>
          <h4>current as of january 2016</h4>

          <table>
            <tr>
              <th>Price List</th>
              <th>
                Mon & Tue (All Day) <br />
                Mon - Fri (1:00pm <u>only</u>)
              </th>
              <th>
                Wed - Fri (<u>not</u> 1:00pm) <br />
                Weekends (All Day)
              </th>
            </tr>

            <tr>
              <td>Adult</td>
              <td>$12.00</td>
              <td>$18.00</td>
            </tr>

            <tr>
              <td>Concession</td>
              <td>$10.00</td>
              <td>$15.00</td>
            </tr>

            <tr>
              <td>Child</td>
              <td>$8.00</td>
              <td>$12.00</td>
            </tr>

            <tr>
              <td>First Class - Adult</td>
              <td>$25.00</td>
              <td>$30.00</td>
            </tr>

            <tr>
              <td>First Class - Child</td>
              <td>$20.00</td>
              <td>$25.00</td>
            </tr>

            <tr>
              <td>Beanbag*</td>
              <td>$20.00</td>
              <td>$30.00</td>
            </tr>

          </table>
          <p>* Beanbag price allows up to 2 adults OR 1 adult + 1 child OR up to 3 children. </p>


          

          <p><a href="book.php" class="btn">Book Tickets Now!</a></p>

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