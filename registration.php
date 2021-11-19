<?php

$name=$_POST['name'];
$mobile=$_POST['mob'];
$address=$_POST['address'];


echo("Your first Name is  ".$name."Your mobile no. is  ".$mobile." your address is  ".$address);

$connection=mysqli_connect("127.0.0.1","root","","mydatabase2");

$insert="INSERT INTO table02 SET name='$name',mobile='$mobile',address='$address'";

$connection->query($insert);




?>