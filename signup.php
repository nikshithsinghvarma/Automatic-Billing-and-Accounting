<?php
$con=mysqli_connect("localhost","root","","project1") or die("could'nt connect");
$name=$_REQUEST['name'];
$userid=$_REQUEST['userid'];
$password=$_REQUEST['password'];
$tcname=$_REQUEST['tcname'];
$adharno=$_REQUEST['uid'];
$mobileno=$_REQUEST['mno'];
$country=$_REQUEST['country'];
$state=$_REQUEST['state'];
$query="INSERT INTO signup_details(country,mno,name,password,state,tcname,uid,userid) VALUES('$country','$mobileno','$name','$password','$state','$tcname','$adharno','$userid')";
$result=mysqli_query($con,$query);
echo "sucessfully signed up please login";
echo "<input type='button' name='login'  value='LOGIN' onclick=window.location.href='login.html'>";
?>