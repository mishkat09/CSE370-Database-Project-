<?php

$input_cemail  = $_POST['customeremail'];
$input_cpassword = $_POST['customerpassword'];
$input_repassword = $_POST['re_pass'];


$con = mysqli_connect("localhost","root","","db");


function alert($msg) {
    echo "<script type='text/javascript'>alert('$msg');</script>";
}

if ($input_cpassword !== $input_repassword) {
   alert('Password and Confirm password should match!');   
}

else
{
	$sql = "insert into customer values('$input_cemail','$input_cpassword')";

	$res = mysqli_query($con,$sql);
}

mysqli_close($con);


?>
