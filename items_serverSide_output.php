<?php

// connecting to the database
$con = mysqli_connect("localhost","root","","db");


// create and execute query

$sql = "SELECT * FROM item";
$res = mysqli_query($con, $sql);



if(mysqli_num_rows($res)>0)
  
  {
   echo '<table width=75% align="center" cellpadding=10 cellspacing=0 border=1>';

   echo '<caption><b>item<b></caption>';   

   echo '<tr><td><b>id</b></td><td><b>groceries</b></td><td><b>availability</b></td><td><b>price</b></td></tr>';
   

   while( $row = mysqli_fetch_row($res) )
     {

   echo '<tr>';
   
   echo '<td>' . $row[0] .'</td>';
   echo '<td>' . $row[1] .'</td>';
   echo '<td>' . $row[2] .'</td>';
   echo '<td>' . $row[3] .'</td>';

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



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title></title>

    <!-- Font Icon -->
    <link rel="stylesheet" href="fonts/material-icon/css/material-design-iconic-font.min.css">

    <!-- Main css -->
    <link rel="stylesheet" href="css/style.css">
</head>
<body>

    <div class="main">

        <!-- Sign up form -->
        <section class="signup">
            <div class="container">
                <div class="signup-content">
                    <div class="signup-form">
                        <h2 class="form-title">Add item</h2>
                        <form action="order_insert.php" method="POST">
                            
                             
			
				 <div class="form-group">
				  <label for="email"><i class="zmdi zmdi-email"></i></label>
                                 <input type="text" name="idfromitem" id="idfromitem" placeholder="item id"/>
                                </div>
                                <div class="form-group">
                                 <label for="email"><i class="zmdi zmdi-email"></i></label>
                                 <input type="text" name="locationfromitem" id="locationfromitem" placeholder="Location"/>
                                </div>
                                <div class="form-group">
                                 <label for="email"><i class="zmdi zmdi-email"></i></label>
                                 <input type="text" name="contactfromitem" id="contactfromitem" placeholder="Contact"/>
                                </div>
				 <div class="form-group">
				   <label for="email"><i class="zmdi zmdi-email"></i></label>
                                  <input type="text" name="emailfromitem" id="emailfromitem" placeholder="Email"/>
                                </div>
		
				<div class="form-group form-button">
                                 <input type="submit"  class="form-submit" value="add item"/>
                               </div>
                                
                        </form>
                    </div>
                    	<div class="signup-image">
		                <figure><img src="images/signup-image.jpg" alt="sing up image"></figure>
		                <a href="http://localhost/order_output.php" class="signup-image-link">Confirm order</a>
                       </div>
                </div>
            </div>
        </section>

       

    </div>

    <!-- JS -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="js/main.js"></script>
</body>
</html>
