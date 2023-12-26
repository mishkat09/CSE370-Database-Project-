
<?php

// connecting to the database
$con = mysqli_connect("localhost","root","","db");


// create and execute query

$sql = "SELECT * FROM orders";
$res = mysqli_query($con, $sql);

$original_price = "select sum(price) from orders";
$original_price_res = mysqli_query($con, $original_price);

$email = ' ';
$offerprice = 0;
if(mysqli_num_rows($res)>0)
  {
   echo '<table width=75% align="center" cellpadding=10 cellspacing=0 border=1>';

   echo '<caption><b>order<b></caption>';   

   echo '<tr><td><b>order_id</b></td><td><b>id_item</b></td><td><b>location</b></td><td><b>contact</b></td><td><b>email</b></td><td><b>reg_id</b></td><td><b>delivery_man_id</b></td><td><b>price</b></td></tr>';

   while( $row = mysqli_fetch_row($res) )
     {

	   $email = $row[4]; 
	   echo '<tr>';
	   
	   echo '<td>' . $row[0] .'</td>';
	   echo '<td>' . $row[1] .'</td>';
	   echo '<td>' . $row[2] .'</td>';
	   echo '<td>' . $row[3] .'</td>';
	   echo '<td>' . $row[4] .'</td>';
	   echo '<td>' . $row[5] .'</td>';
	   echo '<td>' . $row[6] .'</td>';
	   echo '<td>' . $row[7] .'</td>';

	   echo'</tr>';

     }

   echo '</table>'; 
   
   while( $row = mysqli_fetch_row($original_price_res) )
     {
          $offerprice = $row[0]-($row[0]*20)/100;
	   echo '<tr>';
	   echo "Total Price: " . $row[0] ."<br>";
	   echo "Offer Price: " . $offerprice ."<br>";
	   echo'</tr>';
     }
 
     
     
     $insert_status = "insert into Payment(email, bill, status) values('$email', '$offerprice', 'pending')";
     $st = mysqli_query($con, $insert_status);

     
 }
else

 {

  echo 'NO records found!';

 }
 mysqli_close($con);  // logout from db

?>


<html>  

<body>
	<h4> Make your payment</h4>

	<form action="paymentfunction.php" method="post">
		money: <input type="text" name="moneyfrom"><br>
		email: <input type="text" name="emailfrom"><br>
		<input type="submit">
	</form>

</body>
</html>
