<?php
$userid=$_REQUEST['userid'];
$pass=$_REQUEST['password'];
$con=mysqli_connect("localhost","root","","project1") or die(mysql_query());
$query="SELECT * FROM signup_details where userid='$userid' and password='$pass'";
$result=mysqli_query($con,$query);
$numrows=mysqli_num_rows($result);
while($numrows!=0)
{
if($row=mysqli_fetch_array($result))
{
$val1=$row['userid'];
$val2=$row=['password'];
}
if($val1=$userid && $val2=$pass)
{
header('location: http://localhost/deepak/home1.html');
}
else
{
echo "invalid username/password";
}
}
echo "invalid";
?>
