<?php

$input_payment  = $_POST['moneyfrom'];
$input_email  = $_POST['emailfrom'];


$con = mysqli_connect("localhost","root","","db");

$output = "select bill from Payment";
$re = mysqli_query($con, $output);

$money = 0;
$input_payment = $input_payment+1-1;



while( $row = mysqli_fetch_row($re) )
     {
   	$money=$row[0];
   	break;
     }

function alert($msg) {
    echo "<script type='text/javascript'>alert('$msg');</script>";
}
if(intval($money) != intval($input_payment) )
{
    alert('Give sufficient money'); 
}
else
{
	echo "match";
	$check_output = "UPDATE Payment SET status='paid' where email='$input_email'";
       $res = mysqli_query($con,$check_output);
} 
 


mysqli_close($con);

?>
