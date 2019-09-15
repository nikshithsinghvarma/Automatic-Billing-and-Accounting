<form>
<center>
<table border="1">
<tr><td align="center"><h1><u>NAME OF TRADERS</h1></u></td></tr><tr><td>
<?php
$con=mysqli_connect("localhost","root","","project1") or die("could'nt connect");
$a=$_REQUEST['billno'];
$b=$_REQUEST['date'];
$c=$_REQUEST['month'];
$d=$_REQUEST['year'];
$e=$_REQUEST['village'];
$f=$_REQUEST['crop'];
$g=$_REQUEST['type'];
$h=$_REQUEST['nobags'];
$i=$_REQUEST['eptlorey'];
$j=$_REQUEST['loadlorey'];
$k=$_REQUEST['netweight'];
$m=$_REQUEST['eweight'];
$n=$_REQUEST['tkgs'];
$o=$_REQUEST['pquntal'];
$p=$_REQUEST['lcharges'];
$q=$_REQUEST['nofquntals'];
$s=$_REQUEST['tprice'];
$t=$_REQUEST['rmill'];
$u=$_REQUEST['loreyno'];
$v=$_REQUEST['gross'];
$w=$_REQUEST['tare'];
$x=$_REQUEST['net'];
$y=$_REQUEST['egc'];
$z=$_REQUEST['wbc'];
$ab=$_REQUEST['kc'];
$ac=$_REQUEST['paddu'];
$query="INSERT INTO lorey(crop,date,emptygunniescuting,emptylorey,extraweight,gross,kacchacutting,labourcharges,loadlorey,lorey_no,netweight_final,net_weight,noof_bags,noof_quntals,paddu,price_quntal,ricemill_name,serialno,tare,totalprice,total_kgs,type,userid,village,weightbridgecutting)VALUES('$f','$b$c$d','$y','$i','$m','$v','$ab','$p','$j','$u','$x','$k','$h','$q','$ac','$o','$t','$a','$w','$s','$n','$g','','$e','$z')";
$result=mysqli_query($con,$query);
echo "<table border='0' length='700' width='600'><tr><td align='left'><b>BILLNO<td align='center'>:</td></b>";
echo "<td>$a</td>";
echo "<td></td><td></td>";
echo "<td align='left'><b>DATE<td align='center'>:</td></b></td><td align='left'>$b/$c/$d</td></tr>";
echo "<tr>";
echo "<td colspan='4' align='left'><table border='1' cellpadding='1' cellspaceing='1'>";
echo "<tr><td align='right'>LOAD LOREY:</td><td align='left'>$i</td></tr>";
echo "<tr><td align='right'>EMPTY LOREY:</td><td align='left'>$j</td></tr>";
echo "<tr><td align='right'>NET WEIGHT:</td><td align='left'>$k</td></tr>";
echo "</table></td>";
echo "<td colspan='4' align='right'><table border='1' cellpadding='1' cellspaceing='1'>";
echo "<tr><td align='right'>GROSS:</td><td align='left'>$v</td></tr>";
echo "<tr><td align='right'>TARE:</td><td align='left'>$w</td></tr>";
echo "<tr><td align='right'>NET WEIGHT:</td><td align='left'>$x</td></tr>";
echo "</table></td></tr>";
echo "<tr><td align='left'><b>VILLAGE<td align='center'>:</td></b></td><td align='left'>$e</td><td><br><br></td>";
echo "<td align='left'><b>CROP<td align='center'>:</td></b></td><td align='left'>$f</td></tr>";
echo "<tr><td align='left'><b>TYPE<td align='center'>:</td></b></td><td align='left'>$g</td><td><br><br></td>";
echo "<td align='left'><b>NO OF BAGS<td align='center'>:</td></b></td><td align='left'>$h</td></tr>";
echo "<tr><td align='left'><b>empty gunnies cutting<td align='center'>:</td></b></td>";
echo "<td align='left'>$y</td><td><br><br></td>";
echo "<td align='left'><b>weight bridge cutting<td align='center'>:</td></b></td><td align='left'>$z'kgs'</td></tr>";
echo "<tr><td align='left'><b>kacha cutting<td align='center'>:</td></b></td><td align='left'>$ab'kgs'</td><td><br><br></td>";
echo "<td align='left'><b>PADDU<td align='center'>:</td></b></td><td align='left'>$ac</td></tr>";
echo "<tr><td align='left'><b>EXTRA WEIGHT TO(-)<td align='center'>:</td></b></td><td align='left'>$m'kgs'</td><td><br><br></td>";
echo "<td align='left'><b>TOTAL KG'S<td align='center'>:</td></b></td><td align='left'><h2>$n</h2></td></tr>";
echo "<tr><td align='left'><b>PRICE PER QUNTAL<td align='center'>:</td></b></td><td align='left'><h2>$o</h2></td><td><br><br></td>";
echo "<td align='left'><b>LABOUR CHARGES<td align='center'>:</td></b></td><td align='left'><h3>$p</h3></td></tr>";
echo "<tr><td align='left'><b>NO OF QUNTAL<td align='center'>:</td></b></td><td align='left'><h2>$q</h2></td><td><br><br></td>";
//echo "<td align='left'><b>PRICE<td align='center'>:</td></b></td><td align='left'><h3>$r</h3></td></tr>";
echo "<tr><td align='left'><b>TOTAL PRICE<td align='center'>:</td></b></td><td align='left'><h2>$s</h2></td><td><br><br></td>";
echo "<td align='left'><b>RICE MILL<td align='center'>:</td></b></td><td align='left'><h3>$t</h3></td></tr>";
echo "<tr><td align='left'><b>LOREY NO<td align='center'>:</td></b></td><td align='left'><h2>$u</h2></td><td><br><br></td>";
echo "<td align='left'><b><td align='center'>:</td></b></td><td align='left'><h3></h3></td></tr>";
echo "<tr><td></td><td></td><td></td><td></td><td align='right' colspan='3'><table border='0' align='right'><tr><br><br><br><td align='center'><b>name</b></td></tr><tr><td align='center'><b>mobile no</b></td></tr></table></td></tr></table>";
echo "<center><input type='button' id='p1' value='PRINT' onclick='window.print()'></center>";
?>
</td></tr>
</table>
</center>
</form>