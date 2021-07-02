<html>
<head>
<script src="jquery.js"></script>
<script>
function GenerateBill($name)
	{
		alert('Called');
		
		window.location.href="http://localhost/project/billgen.php?name="+name;
		
	}
</script>
</head>
<body>
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
if(isset($_POST['submit']))
{
	$checkifexist = $_POST['cumobile'];
	
//check user alereay exists or not
$sql=mysqli_query($conn,"Select * From customer_form Where Mobile='$checkifexist'");

$r=mysqli_num_rows($sql);
if($r==true)
{
	echo $err= "<font color='red'>This user already exists</font>";
}
else
{
$room=$_POST['croom'];
$name = $_POST['cuname'];
$mobile = $_POST['cumobile'];
$nation=$_POST['cunation'];
$aadhar = $_POST['cuaadhar'];
$people=$_POST['cpeople'];
$roomtype=$_POST['rooms'];
$datein=$_POST['cindate'];
$timen=$_POST['timein'];
$dateout=$_POST['coutdate'];
$timeo=$_POST['timeout'];
$total=$_POST['price'];

$sql2="INSERT INTO customer_form (Roomno,Name , Mobile ,Nation, Aadhar ,People, Roomtype,CheckInDate,CheckinTime,CheckoutDate,CheckoutTime,Price) VALUES ('$room','$name','$mobile','$nation','$aadhar','$people','$roomtype','$datein','$timen','$dateout','$timeo','$total')";
echo "<script type='text/javascript'>GenerateBill(name);</script>";
?>
<script>


</script>
<?php


if(!mysqli_query($conn,$sql2))
{
	echo 'Not Inserted';
	echo("Error description: " . mysqli_error($conn));
}
else
{
	
	
	//echo "<script type='text/javascript'>alert(".mysqli_error($conn)");</script>";
	//echo("Error description: " . mysqli_error($conn));
	// $message = "Data Submitted Successfully !";
	// echo "<script type='text/javascript'>alert('$message');</script>";
	

	//header('location:http://localhost/project/homepage.php?option=staffdetails');
}	
}
}
?>
<html>
<head>
</head>
<title>Customer Form</title>
<style>
.button
{
	background-color:#4CAF50;
	color:white;
	border: none;
	cursor: pointer;
	padding: 10px 15px;
}
body{
	background-color:#F8F1EF ;
}
</style>
</head>
<body>
<br>
<div >
<h1 align="center">New Customer</h1>
<br><br>
<form align="center" method="post" action="customerform.php">
<table align="center" cellpadding="6">
	<tr>
		<td align="right">Room No:</td>
		<td align="left">
		<select name="croom" >
		<option value="101">101</option>
		<option value="102">102</option>
		<option value="103">103</option>
		<option value="104">104</option>
		</select>
		</td>
	</tr>
	<tr>
		<td align="right">Name:</td>
		<td align="left">
		<input type="text" placeholder="Name" name="cuname" required />
		</td>
	</tr>
	<tr>
		<td align="right">Mobile No:</td>
		<td align="left">
		<input type="number" placeholder="Mobile no" maxlength="10" name="cumobile" required />
		</td>
	</tr>
	<tr>
		<td align="right">Nationality:</td>
		<td align="left">
		<input type="text" placeholder="Nation Name" name="cunation" required />
		</td>
	</tr>
	<tr>
		<td align="right">Aadhar Card No:</td>
		<td align="left">
		<input type="number" placeholder="Aadhar Card No" maxlength="12" name="cuaadhar" required />
		</td>
	</tr>
	<tr>
		<td align="right">Total No.of People:</td>
		<td align="left">
		<input type="number" placeholder="People" maxlength="2" name="cpeople" required />
		</td>
	</tr>
	<tr>
		<td align="right">Room type:</td>
		<td align="left">
		<select name="rooms">
		<option value="2Bed">2Bed</option>
		<option value="4Bed">4Bed</option>
		</select>
		</td>
	</tr>
	<tr>
		<td align="right">Check in Date:</td>
		<td align="left">
		<input type="date" placeholder="Date" name="cindate" required />
		</td>
	</tr>
	<tr>
		<td align="right">Check in Time:</td>
		<td align="left">
		<input type="time" placeholder="Time" name="timein" required />
		</td>
	</tr>
	<tr>
		<td align="right">Check out Date:</td>
		<td align="left">
		<input type="date" placeholder="Date" name="coutdate" required />
		</td>
	</tr>
	<tr>
		<td align="right">Check out Time:</td>
		<td align="left">
		<input type="time" placeholder="Time" name="timeout" required />
		</td>
	</tr>
	<tr>
		<td align="right">Price</td>
		<td align="left">
		<input type="number" placeholder="Price" id="price" name="price" required />
		</td>
	</tr>
	<tr>
	<td colspan="2" align="center">
		<input type="submit"  class="button" name="submit"/>
	</td>
	</tr>
</table>
</form>
</div>
</body>

</html>