<form>
<center>
<table border="1" length="700" width="550">
<tr><td align="center"><h1><u>NAME OF TRADERS</h1></u></td></tr><tr><td>
<?php
$con=mysqli_connect("localhost","root","","project1") or die("couldnt connect");
$t=$_REQUEST['type'];
$p=$_REQUEST['paddu'];
$c=$_REQUEST['crop'];
$b=$_REQUEST['billno'];
$d=$_REQUEST['day'];
$m=$_REQUEST['month'];
$y=$_REQUEST['year'];
$x=$_REQUEST['name'];
$mb=$_REQUEST['mobile'];
$v=$_REQUEST['village'];
$nbags=$_REQUEST['nbags'];
$kgspbag=$_REQUEST['kgspbag'];
$e=$_REQUEST['extraweight'];
$totalkg=$_REQUEST['tkgs'];
$ppq=$_REQUEST['pricepquntal'];
$labcharges=$_REQUEST['lcharges'];
$nofq=$_REQUEST['nofquntals'];
$price=$_REQUEST['price'];
$totalprice=$_REQUEST['tprice'];
$query="INSERT INTO bill(billno,crop,crop_type,date,extra_weight,kgs_per_bag,labor_charges,mobile_no,name,noof_quntals,paddu,price_quntals,total_kgs,total_price,userid,village)VALUES('$b','$c','$t','$d$m$y','$e','$kgspbag','$labcharges','$mb','$x','$nofq','$p','$ppq','$totalkg','$totalprice','','$v')";
$result=mysqli_query($con,$query);
str_repeat('&nbsp;',5);
echo "<table border='0' length='700' width='600'><tr><td align='left'><b>BILLNO<td align='center'>:</td></b></td>";
echo "<td align='left'>";
echo $b;
echo "</td><td><br><br></td>";
echo "<td align='left'><b>DATE<td align='center'>:</td></b></td><td align='left'>$d/$m/$y</td></tr>";
echo "<tr><td align='left'><b>NAME<td align='center'>:</td></b></td><td align='left'>$x</td><td><br><br></td>";
echo "<td align='left'><b>VILLAGE<td align='center'>:</td></b></td><td align='left'>$v</td></tr>";
echo "<tr><td align='left'><b>NO OF BAGS<td align='center'>:</td></b></td><td align='left'>$nbags</td><td><br><br></td>";
echo "<td align='left'><b>KG'S/PER BAG<td align='center'>:</td></b></td><td align='left'>$kgspbag</td></tr>";
echo "<tr><td align='left'><b>EXTRA WEIGHT TO(-)<td align='center'>:</td></b></td><td align='left'>$e</td><td><br><br></td>";
echo "<td align='left'><b>LABOUR CHARGES<td align='center'>:</td></b></td><td align='left'>$labcharges</td></tr>";
echo "<tr><td align='left'><b>PRICE/QUNTAL<td align='center'>:</td></b></td><td align='left'>$ppq</td><td><br><br></td>";
echo "<td align='left'><b>TOTAL KG'S<td align='center'>:</td></b></td><td align='left'>$totalkg</td></tr>";
echo "<tr><td align='left'><b>PRICE<td align='center'>:</td></b></td><td align='left'>$price</td><td><br><br></td>";
echo "<td align='left'><b>TOTAL QUANTAL'S<td align='center'>:</td></b></td><td align='left'><h2>$nofq</h2></td></tr>";
echo "<tr><td align='left'><b>TOTAL PRICE<td align='center'>:</td></b></td><td align='left'><h2>$totalprice</h2></td><td><br><br></td>";
echo "<td align='left'><b>MOBILE NO<td align='center'>:</td></b></td><td align='left'><h3>$mb</h3></td></tr>";
echo "<tr><td></td><td></td><td></td><td></td><td align='right' colspan='3'><table border='0' align='right'><tr><br><br><br><td align='center'><b>trader name</b></td></tr><tr><td align='center'><b>mobile no</b></td></tr></table></td></tr></table>";
echo "<center><h5>*note: crop is $c($t)</h5>";
echo "<h4>paddu is $p days</h4></center>";
echo "<center><input type='button' id='p1' value='PRINT' onclick='window.print()'></center>";
?>
</td></tr>
</table>
</center>
</form>