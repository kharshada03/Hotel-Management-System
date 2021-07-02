
<html>
<head>
<script src="jquery.js"></script>
</head>
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
$room=$_POST['croomC'];
$name = $_POST['cunameC'];
$mobile = $_POST['cumobileC'];
$nation=$_POST['cunationC'];
$aadhar = $_POST['cuaadharC'];
$people=$_POST['cpeopleC'];
$roomtype=$_POST['roomsC'];
$datein=$_POST['cindateC'];
$timen=$_POST['timeinC'];
$dateout=$_POST['coutdateC'];
$timeo=$_POST['timeoutC'];
$total=$_POST['priceC'];

$sql2="INSERT INTO customer_form (Roomno,Name , Mobile ,Nation, Aadhar ,People, Roomtype,CheckInDate,CheckinTime,CheckoutDate,CheckoutTime,Price) VALUES ('$room','$name','$mobile','$nation','$aadhar','$people','$roomtype','$datein','$timen','$dateout','$timeo','$total')";

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
	//header('location:http://localhost/project/homepage.php?option=staffdetails');
}	
}
}
?>
</html>