<?php session_start(); ?>

<!DOCTYPE html>
<html lang="en">


  <head> <!-- head tag body sourced from codearchive3 from the weekly chats -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Silverado Cinema - Book Tickets</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="Description" lang="en" content="Silverado Cinema - Silverado">
    <meta name="author" content="Steph Ridnell">

    <!-- icons -->
    <link rel="apple-touch-icon" href="img/sc_apple.png">
    <link rel="shortcut icon" href="img/favicon.ico">

    <link rel="stylesheet" href="css/stylesheet.css" type="text/css">

    <!-- PHP to pull the information from the form on the previous movie selection page so I can pre-fill some of the form -->
          <?php
          // Convert Movie Value to String
          switch($_GET['movie']){
            case 'CH':
            $movie = 'The Good Dinosaur';
            break;

            case 'AC':
            $movie = '3D - Star Wars: The Force Awakens';
            break;

            case 'RC':
            $movie = 'Aloha';
            break;

            case 'AF':
            $movie = 'The Assassin';
            break;
          }

          // Convert Day value to Strings for day and time
          switch($_GET["day"]){
            case 'mon1':
            $day = 'Monday';
            $time = '1:00pm';
            break;

            case 'mon6':
            $day = 'Monday';
            $time = '6:00pm';
            break;

            case 'mon9':
            $day = 'Monday';
            $time = '9:00pm';
            break;

            case 'tue1':
            $day = 'Tuesday';
            $time = '1:00pm';
            break;

            case 'tue6':
            $day = 'Tuesday';
            $time = '6:00pm';
            break;

            case 'tue9':
            $day = 'Tuesday';
            $time = '9:00pm';
            break;

            case 'wed1':
            $day = 'Wednesday';
            $time = '1:00pm';
            break;

            case 'wed6':
            $day = 'Wednesday';
            $time = '6:00pm';
            break;

            case 'wed9':
            $day = 'Wednesday';
            $time = '9:00pm';
            break;

            case 'thur1':
            $day = 'Thursday';
            $time = '1:00pm';
            break;

            case 'thur6':
            $day = 'Thursday';
            $time = '6:00pm';
            break;

            case 'thur9':
            $day = 'Thursday';
            $time = '9:00pm';
            break;

            case 'fri1':
            $day = 'Friday';
            $time = '1:00pm';
            break;

            case 'fri6':
            $day = 'Friday';
            $time = '6:00pm';
            break;

            case 'fri9':
            $day = 'Friday';
            $time = '9:00pm';
            break;

            case 'sat12':
            $day = 'Saturday';
            $time = '12:00pm';
            break;

            case 'sat3':
            $day = 'Saturday';
            $time = '3:00pm';
            break;

            case 'sat6':
            $day = 'Saturday';
            $time = '6:00pm';
            break;

            case 'sat9':
            $day = 'Saturday';
            $time = '9:00pm';
            break;

            case 'sun12':
            $day = 'Sunday';
            $time = '12:00pm';
            break;

            case 'sun3':
            $day = 'Sunday';
            $time = '3:00pm';
            break;

            case 'sun6':
            $day = 'Sunday';
            $time = '6:00pm';
            break;

            case 'sun9':
            $day = 'Sunday';
            $time = '9:00pm';
            break;
          }

  

          ?>

    <!-- 

    Website where I learnt how to perform realtime updates via js
    http://www.javascript-coder.com/javascript-form/javascript-calculator-script.phtml -->

    <script type="text/javascript">



    // reference to the form
    var bookingForm = document.forms["bookingform"];

    // calculate adult ticket price
    function getSAPrice(){

        //init ticket price to the standard $18
        var ticketPrice=18;

        //get day and time from php variables
        var day="<?php echo $day ?>";
        var time="<?php echo $time ?>";

        // cheaper tickets (using a loophole for the 1pm discount because there arent any 1pm screenings not on mon-fri)
        if(day == "Monday" || day == "Tuesday" || time == "1:00pm"){
            ticketPrice=12;
        }

        //init price to 0
        var SAPrice=0;

        // get the number of tickets by parsing the string value (the number of tickets selected) to an integer
        var numTickets=parseInt(document.getElementById('SA').value);

        SAPrice = numTickets * ticketPrice;

        document.getElementById('SA_price').innerHTML = "$" + SAPrice + ".00";

        return SAPrice;
    }

    // calculate concession ticket price
    function getSPPrice(){

        //init ticket price to the standard $15
        var ticketPrice=15;

        //get day and time from php variables
        var day="<?php echo $day ?>";
        var time="<?php echo $time ?>";

        // cheaper tickets (using a loophole for the 1pm discount because there arent any 1pm screenings not on mon-fri)
        if(day == "Monday" || day == "Tuesday" || time == "1:00pm"){
            ticketPrice=10;
        }

        //init price to 0
        var SPPrice=0;

        // get the number of tickets by parsing the string value (the number of tickets selected) to an integer
        var numTickets=parseInt(document.getElementById('SP').value);

        SPPrice = numTickets * ticketPrice;

        document.getElementById('SP_price').innerHTML = "$" + SPPrice + ".00";

        return SPPrice;
    }

    // calculate child ticket price
    function getSCPrice(){

        //init ticket price to the standard $12
        var ticketPrice=12;

        //get day and time from php variables
        var day="<?php echo $day ?>";
        var time="<?php echo $time ?>";

        // cheaper tickets (using a loophole for the 1pm discount because there arent any 1pm screenings not on mon-fri)
        if(day == "Monday" || day == "Tuesday" || time == "1:00pm"){
            ticketPrice=8;
        }

        //init price to 0
        var SCPrice=0;

        // get the number of tickets by parsing the string value (the number of tickets selected) to an integer
        var numTickets=parseInt(document.getElementById('SC').value);

        SCPrice = numTickets * ticketPrice;

        document.getElementById('SC_price').innerHTML = "$" + SCPrice + ".00";

        return SCPrice;
    }

    // calculate first class adult ticket price
    function getFAPrice(){

        //init ticket price to the standard $30
        var ticketPrice=30;

        //get day and time from php variables
        var day="<?php echo $day ?>";
        var time="<?php echo $time ?>";

        // cheaper tickets (using a loophole for the 1pm discount because there arent any 1pm screenings not on mon-fri)
        if(day == "Monday" || day == "Tuesday" || time == "1:00pm"){
            ticketPrice=25;
        }

        //init price to 0
        var FAPrice=0;

        // get the number of tickets by parsing the string value (the number of tickets selected) to an integer
        var numTickets=parseInt(document.getElementById('FA').value);

        FAPrice = numTickets * ticketPrice;

        document.getElementById('FA_price').innerHTML = "$" + FAPrice + ".00";

        return FAPrice;
    }

    // calculate first class child ticket price
    function getFCPrice(){

        //init ticket price to the standard $25
        var ticketPrice=25;

        //get day and time from php variables
        var day="<?php echo $day ?>";
        var time="<?php echo $time ?>";

        // cheaper tickets (using a loophole for the 1pm discount because there arent any 1pm screenings not on mon-fri)
        if(day == "Monday" || day == "Tuesday" || time == "1:00pm"){
            ticketPrice=20;
        }

        //init price to 0
        var FCPrice=0;

        // get the number of tickets by parsing the string value (the number of tickets selected) to an integer
        var numTickets=parseInt(document.getElementById('FC').value);

        FCPrice = numTickets * ticketPrice;

        document.getElementById('FC_price').innerHTML = "$" + FCPrice + ".00";

        return FCPrice;
    }

    // calculate beanbag 1 person ticket price
    function getB1Price(){

        //init ticket price to the standard $30
        var ticketPrice=30;

        //get day and time from php variables
        var day="<?php echo $day ?>";
        var time="<?php echo $time ?>";

        // cheaper tickets (using a loophole for the 1pm discount because there arent any 1pm screenings not on mon-fri)
        if(day == "Monday" || day == "Tuesday" || time == "1:00pm"){
            ticketPrice=20;
        }

        //init price to 0
        var B1Price=0;

        // get the number of tickets by parsing the string value (the number of tickets selected) to an integer
        var numTickets=parseInt(document.getElementById('B1').value);

        B1Price = numTickets * ticketPrice;

        document.getElementById('B1_price').innerHTML = "$" + B1Price + ".00";

        return B1Price;
    }

    // calculate beanbag 2 person ticket price
    function getB2Price(){

        //init ticket price to the standard $30
        var ticketPrice=30;

        //get day and time from php variables
        var day="<?php echo $day ?>";
        var time="<?php echo $time ?>";

        // cheaper tickets (using a loophole for the 1pm discount because there arent any 1pm screenings not on mon-fri)
        if(day == "Monday" || day == "Tuesday" || time == "1:00pm"){
            ticketPrice=20;
        }

        //init price to 0
        var B2Price=0;

        // get the number of tickets by parsing the string value (the number of tickets selected) to an integer
        var numTickets=parseInt(document.getElementById('B2').value);

        B2Price = numTickets * ticketPrice;

        document.getElementById('B2_price').innerHTML = "$" + B2Price + ".00";

        return B2Price;
    }

    // calculate beanbag 3 person ticket price
    function getB3Price(){

        //init ticket price to the standard $30
        var ticketPrice=30;

        //get day and time from php variables
        var day="<?php echo $day ?>";
        var time="<?php echo $time ?>";

        // cheaper tickets (using a loophole for the 1pm discount because there arent any 1pm screenings not on mon-fri)
        if(day == "Monday" || day == "Tuesday" || time == "1:00pm"){
            ticketPrice=20;
        }

        //init price to 0
        var B3Price=0;

        // get the number of tickets by parsing the string value (the number of tickets selected) to an integer
        var numTickets=parseInt(document.getElementById('B3').value);

        B3Price = numTickets * ticketPrice;

        document.getElementById('B3_price').innerHTML = "$" + B3Price + ".00";

        return B3Price;
    }

    // Calculate Total Price
    function calculateTotal() {
        var total= 0;
        total = getSAPrice()+getSPPrice()+getSCPrice()+getFAPrice()+getFCPrice()+getB1Price()+getB2Price()+getB3Price();
        document.getElementById('total_price').innerHTML = "$" + total + ".00";
        document.getElementById('price').value = total;
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
          <h1>Book</h1>
          <h4>confirm tickets</h4>

          

          
        <form action="cart.php" method="post" id="bookingform">

        <table>
        <tr>
            <td>Movie:</td>
            <td>
                <!-- input is disabled so that the post method does not use this value -->
                <input type="text" name="movie_title" value="<?php print $movie; ?>" disabled /> <br />
                <!-- Hidden input so that the name="movie" returns the required value instead of the name of the movie -->
                <input type="text" name="movie" value="<?php print $_GET['movie']; ?>" hidden />
            </td>
        </tr>
        <tr>
            <td>Session Day:</td>
            <td><input type="text" name="day" value="<?php print $day; ?>" readonly /></td>
        </tr>
        <tr>
            <td>Session Time:</td>
            <td><input type="text" name="time" value="<?php print $time; ?>" readonly /></td>
        </tr>
    </table><br />

    <a href="book.php" class="btn">Change Movie and Time</a><br /><br />

    <table class="fixed_table">
        <!-- Headings -->
        <tr>
            <th class="col1">Ticket Type</th>
            <th class="col2">Quantity*</th>
            <th class="col3"><div>Price</div></th>
        </tr>

        <!-- Adult Ticket -->
        <tr>
            <td>Adult</td>
            <td>
                <select id="SA" name="SA" onchange="getSAPrice();calculateTotal()">
                    <option value="0">0</option>
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                    <option value="4">4</option>
                    <option value="5">5</option>
                    <option value="6">6</option>
                </select>
            </td>
            <td><div id="SA_price" name="SA_price">$0.00</div></td>
        </tr>

        <!-- Conession Ticket -->
        <tr>
            <td>Concession</td>
            <td>
                <select id="SP" name="SP" onchange="getSPPrice();calculateTotal()">
                    <option value="0">0</option>
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                    <option value="4">4</option>
                    <option value="5">5</option>
                    <option value="6">6</option>
                </select>
            </td>
            <td><div id="SP_price">$0.00</div></td>
        </tr>

        <!-- Child Ticket -->
        <tr>
            <td>Child</td>
            <td>
                <select id="SC" name="SC" onchange="getSCPrice();calculateTotal()">
                    <option value="0">0</option>
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                    <option value="4">4</option>
                    <option value="5">5</option>
                    <option value="6">6</option>
                </select>
            </td>
            <td><div id="SC_price">$0.00</div></td>
        </tr>

        <!-- Empty Row -->
        <tr>
            <td></td>
            <td></td>
            <td></td>
        </tr>

        <!-- First Class Adult Ticket -->
        <tr>
            <td>First Class - Adult</td>
            <td>
                <select id="FA" name="FA" onchange="getFAPrice();calculateTotal()">
                    <option value="0">0</option>
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                    <option value="4">4</option>
                    <option value="5">5</option>
                    <option value="6">6</option>
                </select>
            </td>
            <td><div id="FA_price">$0.00</div></td>
        </tr>

        <!-- First Class Child Ticket -->
        <tr>
            <td>First Class - Child</td>
            <td>
                <select id="FC" name="FC" onchange="getFCPrice();calculateTotal()">
                    <option value="0">0</option>
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                    <option value="4">4</option>
                    <option value="5">5</option>
                    <option value="6">6</option>
                </select>
            </td>
            <td><div id="FC_price">$0.00</div></td>
        </tr>

        <!-- Empty Row -->
        <tr>
            <td></td>
            <td></td>
            <td></td>
        </tr>

        <!-- Beanbag 1 Person Ticket -->
        <tr>
            <td>Bean Bag - 1 Person</td>
            <td>
                <select id="B1" name="B1" onchange="getB1Price();calculateTotal()">
                    <option value="0">0</option>
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                    <option value="4">4</option>
                    <option value="5">5</option>
                    <option value="6">6</option>
                </select>
            </td>
            <td><div id="B1_price">$0.00</div></td>
        </tr>

        <!-- Beanbag 2 People Ticket -->
        <tr>
            <td>Bean Bag - 2 People</td>
            <td>
                <select id="B2" name="B2" onchange="getB2Price();calculateTotal()">
                    <option value="0">0</option>
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                    <option value="4">4</option>
                    <option value="5">5</option>
                    <option value="6">6</option>
                </select>
            </td>
            <td><div id="B2_price">$0.00</div></td>
        </tr>

        <!-- Beanbag 3 Children Ticket -->
        <tr>
            <td>Bean Bag - 3 Children</td>
            <td>
                <select id="B3" name="B3" onchange="getB3Price();calculateTotal()">
                    <option value="0">0</option>
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                    <option value="4">4</option>
                    <option value="5">5</option>
                    <option value="6">6</option>
                </select>
            </td>
            <td><div id="B3_price">$0.00</div></td>
        </tr>



        <!-- Total Price -->
        <tr>
            <td></td>
            <td><div>Total Price:</div></td>
            <td><input type="text" name="price" id="price" value="0" hidden />
                <div id="total_price">$0.00</div></td>
        </tr>

        

    </table>

    <br />
    *For bookings of more than 6 of each ticket type; please <a href="contact.php">contact us</a>. <br /><br />




    <input type="submit" value="Checkout" class="btn" /><br />

    </form><br /><br />
    <a href="pricing.php" >Click here for full list of current pricing.</a><br /><br />

    <hr />




        </div>

          <?php require('sidebar.php') ?>

        </div>
      </div>

      <?php require('footer.php') ?>

    </body>

</html>