
<?php


$sql = "SELECT * FROM orders";
$res = mysqli_query($con, $sql);



if(mysqli_num_rows($res)>0)
  
  {
   echo '<table width=75% align="center" cellpadding=10 cellspacing=0 border=1>';

   echo '<caption><b>order<b></caption>';   

   echo '<tr><td><b>item_id</b></td></tr>';

   while( $row = mysqli_fetch_row($res) )
     {

   echo '<tr>';
   
   echo '<td>' . $row[0] .'</td>';

   echo'</tr>';

     }

   echo '</table>'; 
 }
else

 {

  echo 'NO records found!';

 }

mysqli_free_result($res);

mysqli_close($con);  // logout from db

?>


<html>  


<body>
	<h4> Make your payment</h4>

	<form action="order_out.php" method="post">
		item id: <input type="text" name="idfromitem"><br>
		
		<input type="submit">
	</form>

</body>
</html>