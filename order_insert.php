<?php

$input_itemid  = $_POST['idfromitem'];
$input_itemlocation  = $_POST['locationfromitem'];
$input_itemcontact  = $_POST['contactfromitem'];
$input_itememail  = $_POST['emailfromitem'];


$con = mysqli_connect("localhost","root","","db");

$output = "select * from delivery_man where availability='yes' limit 1";
$re = mysqli_query($con, $output);

$priceoutput = "select price from item where id_item='$input_itemid'";
$price_res = mysqli_query($con, $priceoutput);

$money = 0;
while( $row = mysqli_fetch_row($price_res) )
     {
   	$money=$row[0];
   	break;
     }



$id = 0;
$name = 0;
 
if(mysqli_num_rows($re)>0)
{
  
   while( $row = mysqli_fetch_row($re) )
     {
   
   	$id=$row[0];
	$name=$row[1];
   	break;
     }

}
 
else
{

  echo 'NO records found!';

} 
 
 
 

$sql = "insert into orders(id_item,location,contact,email,reg_no,delivery_man, price) values('$input_itemid', '$input_itemlocation', '$input_itemcontact' , '$input_itememail', '$id', '$name', '$money')";


$res = mysqli_query($con,$sql);
mysqli_close($con);

?>
