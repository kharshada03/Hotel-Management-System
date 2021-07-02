<?php
$conn=mysqli_connect('localhost','root','');
if(!$conn)
{
	echo 'Not Connected To Server';
}
if(!mysqli_select_db($conn , 'rajhotel'))
{
	echo 'Database Not Selected';
}
?>
<html>
<head></head>
<body>
<h1 align="center">Raj(Lodging & Boarding)</h1>
<h2 align="center">Invoice</h2>
<h3 align="right">Date:10-11-2019</h3>
<div align="left">
<p align="left">
Address:<br>
Raj(Lodging & Boarding)<br>
Near Vasai Highway<br>
</p>
<p>Name:Harshada</p>
<p>Mobile No:7710803201</p>
<table border="1" align="left" width="50%">
<tr>
<td>Room No</td>
<td>Room Type</td>
<td>No.Of People</td>
<td>Price</td>
</tr>
<tr>
<td>101</td>
<td>4Bed</td>
<td>4</td>
<td>2000</td>
</tr>
<tr>
<td colspan="2"></td>
<td>Grand Total:</td><td>2000</td></tr>
</table>
</div>
</body>
</html>