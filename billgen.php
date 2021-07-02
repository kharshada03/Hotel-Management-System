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

//$name=$_GET['name'];
//echo "$name";
//$get=$_GET['id'];
$queryy=mysqli_query($conn,"select Name,Mobile,Roomno,RoomType,People,Price,CheckInDate from customer_form order by id desc limit 1");
?>
<html>
<head></head>
<body>
<?php
$row=mysqli_fetch_array($queryy)
?>
<h1 align="center">Raj(Lodging & Boarding)</h1>
<h2 align="center">Invoice</h2>
<h3 align="left">Date:</h3><?php echo $row['CheckInDate'] ?>
<div align="left">
<p align="left">

Address:<br>
Raj(Lodging & Boarding)<br>
Near Vasai Highway<br>
</p>
<p>Name:<?php echo $row['Name']; ?></p>
<p>Mobile No:<?php echo $row['Mobile']?></p>
<table border="1" align="left" width="50%">
<tr>
<td>Room No:</td>
<td>Room Type:</td>
<td>No.Of People</td>
<td>Price</td>
</tr>
<tr>
<td><?php echo $row['Roomno']?></td>
<td><?php echo $row['RoomType']?></td>
<td><?php echo $row['People']?></td>
<td><?php echo $row['Price']?></td>
</tr>
<tr>
<td colspan="2"></td>
<td>Grand Total:</td>
<td><?php echo $row['Price']?></td>
</tr>
</table>
</div>
</body>
</html>