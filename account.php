<?php
$con=mysqli_connect("localhost","root","","project1");
$name=$_REQUEST['name'];
$date=$_REQUEST['date'];
$month=$_REQUEST['month'];
$year=$_REQUEST['year'];
$amount=$_REQUEST['amount'];
$query="INSERT INTO acccount(name,date,amount)VALUES('$name','$date$month,$year','$amount')";
$result=mysqli_query($con,$query);
header('location: http://localhost/deepak/account.html');
?>