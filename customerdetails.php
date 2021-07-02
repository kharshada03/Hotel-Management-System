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
$queryy=mysqli_query($conn,"select * from customer_form ");
?>
<html>
<head>
<style>
body{
	background-color:#F8F1EF ;
}
</style>
</head>
<body>
<h1 align="center">Customer Records</h1>
<table border="1" align="center" width="100%">
<tr>
<td align="center">SrNo.</td>
<td align="center">Room No</td>
<td align="center">Name</td>
<td align="center">Mobile No</td>
<td align="center">Nationality</td>
<td align="center">AaddharCardNo.</td>
<td align="center">No.of people</td>
<td align="center">Room Type</td>
<td align="center">Check-in Date</td>
<td align="center">Check-in Time</td>
<td align="center">Check-out date</td>
<td align="center">check-out Time</td>
<td align="center">Price</td>
</tr>
<?php
$i=1;
while($row=mysqli_fetch_array($queryy))
{
	?>
	<tr>
    <td align="center"><?php echo $row['Id']; ?></td>
	<td align="center"><?php echo $row['Roomno']; ?></td>
	<td align="center" ><?php echo $row['Name']; ?></td>
	<td align="center"><?php echo $row['Mobile']; ?></td>
	<td align="center"><?php echo $row['Nation']; ?></td>
	<td align="center"><?php echo $row['Aadhar']; ?></td>
	<td align="center"><?php echo $row['People']; ?></td>
	<td align="center"><?php echo $row['Roomtype']; ?></td>
	<td align="center"><?php echo $row['CheckInDate']; ?></td>
	<td align="center"><?php echo $row['CheckinTime']; ?></td>
	<td align="center"><?php echo $row['CheckoutDate']; ?></td>
	<td align="center"><?php echo $row['CheckoutTime']; ?></td>
	<td align="center"><?php echo $row['Price']; ?></td>
	</tr>
<?php
echo "</tr>";
$i++;
}
?>
</table>
</body>
</html>