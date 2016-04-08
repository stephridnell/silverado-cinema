<?php session_start(); ?>

<!DOCTYPE html>
<html lang="en">


  <head> <!-- head tag body sourced from codearchive3 from the weekly chats -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Silverado Cinema - Cart</title>
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
          <h1>Cart</h1>
          <h4>confirm tickets</h4>

          <?php 



          // instantiate num of products variable
          $numProducts = 0;

          // empty cart
          if(isset($_GET['submit']) && $_GET['submit'] == 'empty'){
            session_unset();
          }     

          // remove item
          if(isset($_GET['submit']) && $_GET['submit'] == 'remove'){
            $removeId=$_GET['id'];
            if(isset($_SESSION['cart'][$removeId])){
              unset($_SESSION['cart'][$removeId]);
            }
          }    



          // Adds the data from book tickets page to the session array, if the page is refreshed - shit will be added twice
          if(empty($_SESSION)){
            $_SESSION['cart']= array(); 
          }

          $_SESSION['priceCalc'] = 0;

          //check voucher
          if(isset($_GET['submit']) && $_GET['submit'] == 'voucher'){
            $voucherCode=$_POST['code'];
            
            $success = checkVoucher($voucherCode);
            if($success){
              $_SESSION['discount'] = 0.8;
            }
            else{
              echo '<script type="text/javascript">
              alert("Invalid Voucher Code.")
              </script>';


            }


          }

          function checkVoucher($code){
             $checkSum = array (

                'A' => 0,
                'B' => 1,
                'C' => 2,
                'D' => 3,
                'E' => 4,
                'F' => 5,
                'G' => 6,
                'H' => 7,
                'I' => 8,
                'J' => 9,
                'K' => 10,
                'L' => 11,
                'M' => 12,
                'N' => 13,
                'O' => 14,
                'P' => 15,
                'Q' => 16,
                'R' => 17,
                'S' => 18,
                'T' => 19,
                'U' => 20,
                'V' => 21,
                'W' => 22,
                'X' => 23,
                'Y' => 24,
                'Z' => 25
                
                );

             $chkSum1 = (($code[0]*$code[1]+$code[2])*$code[3]+$code[4])%26;
             $chkSum2 = (($code[6]*$code[7]+$code[8])*$code[9]+$code[10])%26;

             if($chkSum1 == $checkSum[$code[12]] && $chkSum2 == $checkSum[$code[13]]){
              return true;
             }
             else{
              return false;
             }
           }


          $id=0; //create an id for each product. loop through array to check for ids already being used so they are unique.
          foreach($_SESSION['cart'] as $product) {
            if(isset($product['id'])&&$product['id']==$id){
              $id++;
            }
          }

          $_POST['id'] = $id; //puts an id in the post array to id individual products for removal
          

          array_push($_SESSION['cart'], $_POST);


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

          			echo $movie."<br>"."Showing on ".$array['day'].", ".$array['time']."<br>";

          			print "
          			<table>
          			 <tr>
          			 <th>Ticket Type</th>
          			 <th>Qty</th>
          			  <th>Cost</th>
          			   <th>Subtotal</th>
          			   </tr>\n";

          			   $total=0;

          			   foreach ($array as $key => $value){
          			   	foreach ($prices as $priceKey => $priceValue){
          			   		if($key==$priceKey){
          			   			$cost=$priceValue;

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

          			   	$subTotal=0;

          			   	if($key=="movie" || $key=="day" || $key=="time" || $key =="price" || $key=="id"){}
          			   		else if($value=='0'){}
          			   			else{
          			   				$subTotal=$cost*$value;
          			   				print "<tr><td>$key</td>
          			   				<td><input type='number' value='$value' min='0' /></td>
          			   				<td>$$cost.00</td>
          			   				<td>$$subTotal.00</td></tr>\n";
          			   			}
          			   			$total = $total+$subTotal;
          			   		}
                      $_SESSION['priceCalc'] = $total + $_SESSION['priceCalc'];
          			   		print "<tr><td></td><td></td><td>Sub Total:</td><td>$$total.00</td></tr></table>";
          			   	}
          			   	

                    foreach($_SESSION['cart'] as $product) {                      
                      if(isset($product['day'])){
                        $numProducts++;                  
                        parseArray($product);
                        $productId=$product['id'];
                        print "<a href='?submit=remove&id=$productId'>Delete from Cart</a><br /><hr />";
                    }
                    if($numProducts==0){ //if there are no products after the array has finished iterating then the session will be unset to avoid removal problems. 
                      session_unset();
                    }
                  }

                    if($numProducts>0){

                      if(isset( $_SESSION['priceCalc'])){
                        $endTotal =  $_SESSION['priceCalc'];
                      }
                      else{
                        $endTotal=0;
                      }

                      if(isset($_SESSION['discount'])){
                        $grandTotal = $endTotal * $_SESSION['discount'];
                        $dispDiscount = "<tr>
                          <td></td><td></td>
                          <td>Voucher:</td>
                          <td>20%</td>
                        </tr>";
                      }
                      else{
                        $grandTotal= $endTotal;
                        $dispDiscount ='';

                      }

                      $_SESSION['grandTotal'] = $grandTotal;

                      
                      $dispGrandTotal = number_format((float)$grandTotal,2,'.','');


                      print                      

                      '

                          Voucher Code: <br>
                          <form action="?submit=voucher" method="post">
                          <input type="text" name="code" required pattern="^[0-9]{5}[-][0-9]{5}[-][A-Za-z]{2}$" title="Invalid Voucher Code"/>
                          <input type="submit" value="Apply"/>
                          </form>'."
                         




                      <table>

                        <tr>
                          <td></td><td></td>
                          <td>Total:</td>
                          <td>$$endTotal.00</td>
                        </tr>

                        $dispDiscount                        

                        <tr>
                          <td></td><td></td>
                          <td>Grand Total:</td>
                          <td>$$dispGrandTotal</td>
                        </tr>

                        </table>


                         ".'<a href="?submit=empty" class="btn">Empty Cart</a><br/><br/>

                         <a href="book.php" class="btn">Add Another Movie</a><br/><br/>

                         <a href="customerdeets.php" class="btn">Checkout</a>



                        ';
                    }
                      else{
                        echo "Cart is empty.<br/>";
                        echo '<a href="book.php">Click here to book tickets.</a><br/><br/>';
                      }

                      ?>
                      

                    

          
          </div>

          <?php require('sidebar.php') ?>

        </div>
      </div>

      <?php require('footer.php') ?>

    </body>

</html>