<?php session_start(); ?>

<!DOCTYPE html>
<html lang="en">


  <head> <!-- head tag body sourced from codearchive3 from the weekly chats -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Silverado Cinema - Tickets</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="Description" lang="en" content="Silverado Cinema - Silverado">
    <meta name="author" content="Steph Ridnell">

    <!-- icons -->
    <link rel="apple-touch-icon" href="img/sc_apple.png">
    <link rel="shortcut icon" href="img/favicon.ico">

    <link rel="stylesheet" href="css/stylesheet.css" type="text/css">

    <style type="text/css">

    table 
{
  width: 100%;
  background-color: #fff;
  color: #000; 
  font-family: 'Courier New', Courier, 'Lucida Sans Typewriter', 'Lucida Typewriter', monospace; 
}

/* need to make the td inputs 100% so that they dont get cut off when the view is smaller */
td > input, td > select
{
  width:100%;
}

td > div
{
  text-align: right;
  overflow: hidden;
}

th > div
{
  text-align: right;
}

td, table, th
{
  border: none;
}

.bottomRow {
    border-bottom: 2px solid #000;
    }




    </style>
    
  </head>
  <body>

    <!-- header -->

    <?php require('header.php') ?>    


    <!-- body / main content -->

    <div class="content">
      <div class="container">
        <div class="main">
          <h1>Tickets</h1>
          <h4>reservation complete</h4>

          <?php

          if(!isset($_SESSION['customerDetails'])){
            $_SESSION['customerDetails'] = array();
          }
          array_push($_SESSION['customerDetails'], $_POST);

          function parseArray($array){

              $cheapPrices = array (

                'SA' => 12,
                'SP' => 10,
                'SC' => 8,
                'FA' => 25,
                'FC' => 20,
                'B1' => 20,
                'B2' => 20,
                'B3' => 20

                );

              $normalPrices = array (

                'SA' => 18,
                'SP' => 15,
                'SC' => 12,
                'FA' => 30,
                'FC' => 25,
                'B1' => 30,
                'B2' => 30,
                'B3' => 30

                );

              if($array['day'] == 'Monday' || $array['day'] == 'Tuesday' || $array['time'] == '1:00pm'){
                $prices = $cheapPrices;
                }
                else {
                  $prices = $normalPrices;
                }

                switch($array['movie']){
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

                $name = $_SESSION['customerDetails'][0]['fullname'];
                $mob = $_SESSION['customerDetails'][0]['mob'];
                $email = $_SESSION['customerDetails'][0]['email'];

                $day = $array['day'];
                $time = $array['time'];

                print "
                <table>
                 <tr>
                 <td>$name <br/> $mob <br /> $email <br/></td>
                 <td>Silverado <br /> $movie <br /> $day, $time </td>

                 </tr>


                  ";
                   $priceCalc = 0;
                   $ticketString = '';

                   foreach ($array as $key => $value){
                    foreach ($prices as $priceKey => $priceValue){
                      if($key==$priceKey){
                        $cost=$priceValue*$value;
                        $priceCalc = $priceCalc + $cost;

                      }

                    }

                    switch($key){
                      case 'SA':
                      $key = 'Adult';
                      break;

                      case 'SP':
                      $key = 'Concession';
                      break;

                      case 'SC':
                      $key = 'Child';
                      break;

                      case 'FA':
                      $key = 'First Class - Adult';
                      break;

                      case 'FC':
                      $key = 'First Class - Child';
                      break;

                      case 'B1':
                      $key = 'Beanbag (1 Person)';
                      break;

                      case 'B2':
                      $key = 'Beanbag (2 People)';
                      break;

                      case 'B3':
                      $key = 'Beanbag (3 Children)';
                      break;

                    }

                    if($key=="movie" || $key=="day" || $key=="time" || $key =="price" || $key=="id"){}

                      else if($value=='0'){}

                        else{
                          print "<tr><td>$value x $key</td>
                          <td>$$cost.00</td>
                         </tr>\n";

                         $ticket = '<tr>
                         <td>Silverado <br/> '."$movie  <br/>  $day $time".'</td>
                         <td></td>
                         </tr>
                         <tr>
                         <td class="bottomRow">'."$key".'</td>
                         <td class="bottomRow"></td>
                         </tr>';

                         $ticketRep = str_repeat($ticket, $value);

                         $ticketString = $ticketString . $ticketRep;

                        }

                      }

                       if(isset($_SESSION['discount'])){
                        $priceCalc = $priceCalc * $_SESSION['discount']; 
                        print 
                        "

                        <tr>
                        <td>Voucher Discount (20%)</td>
                        <td></td>
                        </tr>


                        ";
                      }



                      $dispGrandTotal = number_format((float)$priceCalc,2,'.','');

                      print '

                      <tr>
                      <td class="bottomRow">Total:</td>
                      <td class="bottomRow">'."$$dispGrandTotal".'</td>


                      </tr>

                      <tr>
                      <td></td>
                      <td></td>
                      </tr>


                      ';


                      print "$ticketString </table>";



                    }


                    foreach($_SESSION['cart'] as $product) {                      
                      if(isset($product['day'])){               
                        parseArray($product);
                        }
                      }


                      $path = 'files/cart.json';
                      $myJson = json_encode($_SESSION);
                      file_put_contents($path, serialize($myJson));

                      session_unset();

                      ?>

        
        </div>

          <?php require('sidebar.php') ?>

        </div>
      </div>

      <?php require('footer.php') ?>

    </body>

</html>