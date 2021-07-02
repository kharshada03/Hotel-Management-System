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
	$checkifexist = $_POST['cmobile'];
	
//check user alereay exists or not
$sql=mysqli_query($conn,"Select * From admin_registration Where MobileNo='$checkifexist'");

$r=mysqli_num_rows($sql);

if($r==true)
{
	echo $err= "<font color='red'>This user already exists</font>";
}
else
{
$name = $_POST['cname'];
$mobile = $_POST['cmobile'];
$email_id = $_POST['cemail'];
$username=$_POST['username'];
$password = $_POST['password'];			
$sql2="INSERT INTO admin_registration (Name , MobileNo , Emailid ,Username, Password ) VALUES ('$name','$mobile','$email_id','$username','$password')";			


if(!mysqli_query($conn,$sql2))
{
	echo 'Not Inserted';
	
	//echo("Error description: " . mysqli_error($conn));
	//echo "<script type='text/javascript'>alert(Error description: " . mysqli_error($conn));</script>";
}
else
{
	//echo "<script type='text/javascript'>alert(".mysqli_error($conn)");</script>";
	//echo("Error description: " . mysqli_error($conn));
	$message = "Data Submitted Successfully !";
	echo "<script type='text/javascript'>alert('$message');</script>";
	header('location:http://localhost/project/AdminLogin.php');
}	
}
}
?>
<html>
<head>
<style>
body{
	background-repeat: no-repeat;
	background-size: cover;	
}
.button{
	background-color:#0040ff;
	color:white;
	border: none;
	cursor: pointer;
	padding: 10px 25px;
}
div{
	background-color:f2edec;
	width:320px;
	height:500px;
	margin:0 auto;
}
</style>
<script type="text/javascript">
    function Validate() {
        var password = document.getElementById("txtPassword").value;
        var confirmPassword = document.getElementById("txtConfirmPassword").value;
        if (password != confirmPassword) {
            alert("Passwords do not match.");
            return false;
        }
        return true;
    }
	function redirectPage()
	{
		window.location.href = 'http://localhost/project/AdminLogin.php';
	}
</script>
</head>
<body background="wallpaper1.jpg">
<br><br>
<form action="Signin.php" method="post">
<div align="center">
<img src="signup.jpg" style="position:relative;top:-40px;border-radius: 50%;height:100px">
<h2>SignUp</h2>
<table align="center" cellpadding="6">
<tr>
<td align="right">Name:</td>
<td><input type="text" placeholder="Enter Name" name="cname" required /></td>
</tr>
<tr>
<td align="right">Mobile Number:</td>
<td><input type="number" placeholder="Enter Moblie No" maxlength="10" name="cmobile" required /></td>
</tr>
<tr>
<td align="right">Email Id:</td>
<td><input type="email" placeholder="Enter Email Id" name="cemail" required /></td>
</tr>
<tr>
<td align="right">Username:</td>
<td><input type="text" placeholder="Enter Username" name="username" required /></td>
</tr>
<tr>
<td align="right">Password:</td>
<td><input type="password" placeholder="Enter Password" id = "txtPassword" required /></td>
</tr>
<tr>
<td align="right">Confirm Password:</td>
<td><input type="password" placeholder="Enter Confirm Password" id = "txtConfirmPassword" name="password" required /></td>
</tr>
<tr>
<td colspan="2"align="center">
<input type= "submit" onclick = "return Validate();" class="button" name="submit"></button>
</td>
</tr>
<tr>
<td colspan="2" align="center">
<button class="button" onclick = "redirectPage();">Login</button>
</td>
</tr>
</table>
</form>

</body>
</html>