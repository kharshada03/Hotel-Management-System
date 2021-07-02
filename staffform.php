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
	$checkifexist = $_POST['smobile'];
	
//check user alereay exists or not
$sql=mysqli_query($conn,"Select * From staff_form Where Mobile='$checkifexist'");

$r=mysqli_num_rows($sql);

if($r==true)
{
	echo $err= "<font color='red'>This user already exists</font>";
}
else
{
$name = $_POST['sname'];
$mobile = $_POST['smobile'];
$aadhar = $_POST['saadhar'];
$gender=$_POST['gen'];
$address=$_POST['saddress'];
$age = $_POST['sage'];
$work=$_POST['swork'];			
$sql2="INSERT INTO staff_form (Name , Mobile , Aadhar ,Gender, Address,Age,Work) VALUES ('$name','$mobile','$aadhar','$gender','$address','$age','$work')";			

if(!mysqli_query($conn,$sql2))
{
	echo 'Not Inserted';
	echo("Error description: " . mysqli_error($conn));
}
else
{
	//echo "<script type='text/javascript'>alert(".mysqli_error($conn)");</script>";
	//echo("Error description: " . mysqli_error($conn));
	$message = "Data Submitted Successfully !";
	echo "<script type='text/javascript'>alert('$message');</script>";
	header('location:http://localhost/project/homepage.php?option=staffdetails');
}	
}
}
?>
<html>
<head>
<title>Staff Form</title>
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
<h1 align="center">New Staff</h1>
<br><br>
<form align="center" action="staffform.php" method="post">
<table align="center" cellpadding="6">
	<tr>
		<td align="right">Name:</td>
		<td align="left">
		<input type="text" placeholder="Name" name="sname" required />
		</td>
	</tr>
	<tr>
		<td align="right">Mobile No:</td>
		<td align="left">
		<input type="number" placeholder="Mobile no" maxlength="10" name="smobile" required />
		</td>
	</tr>
	<tr>
		<td align="right">Aadhar Card No:</td>
		<td align="left">
		<input type="number" placeholder="Aadhar Card No" maxlength="16" name="saadhar" required />
		</td>
	</tr>
	<tr>
		<td align="right">Gender:</td>
		<td align="left">
		<input type="radio" name="gen" value="Male"/>Male
		<input type="radio" name="gen" value="Female"/>Female
		</td>
	</tr>
	<tr>
		<td align="right">Address:</td>
		<td align="left">
		<input type="text" placeholder="Address" name="saddress" required />
		</td>
	</tr>
	<tr>
		<td align="right">Age:</td>
		<td align="left">
		<input type="number" placeholder="Age" name="sage" required />
		</td>
	</tr>
	<tr>
		<td align="right">Work Type:</td>
		<td align="left">
		<input type="text" placeholder="Work" name="swork" required />
		</td>
	</tr>
	<tr>
	<td colspan="2" align="center">
		<input type="submit" value="Submit" name="submit" class="button" />
	</td>
	</tr>
</table>
</form>
</body>
</html>