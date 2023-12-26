<?php

$input_existingemail  = $_POST['existingemail'];
$input_newpassword = $_POST['newpassword'];

$con = mysqli_connect("localhost","root","","db");
$sql = "UPDATE customer SET password='$input_newpassword' where email='$input_existingemail' ";

$res = mysqli_query($con,$sql);

mysqli_close($con);

?>