<?php

// connecting to the database
$con = mysqli_connect("localhost","root","","db");


// create and execute query

$sql = "SELECT * FROM customer";
$res = mysqli_query($con, $sql);



if(mysqli_num_rows($res)>0)
  
  {
   echo '<table width=75% align="center" cellpadding=10 cellspacing=0 border=1>';

   echo '<caption><b>customer<b></caption>';   

   echo '<tr><td><b>Email</b></td><td><b>Password</b></td></tr>';

   while( $row = mysqli_fetch_row($res) )
     {

   echo '<tr>';
   
   echo '<td>' . $row[0] .'</td>';
   echo '<td>' . $row[1] .'</td>';

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