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
if(isset($_POST['login']))
{
	$checkifusernamenotnull = $_POST['username'];
	$checkifpasswrdnotnull = $_POST['password'];
	$sql=mysqli_query($conn,"Select * From admin_registration Where Username='$checkifusernamenotnull' and Password='$checkifpasswrdnotnull'");
	$r=mysqli_num_rows($sql);
	$result = mysqli_fetch_assoc($sql);
	header('location:http://localhost/project/homepage.php?option=home');
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
	height:420px;
	margin:0 auto;	
}
</style>
</head>
<body background="wallpaper1.jpg">
<br><br>
<br><br>
<form action="AdminLogin.php" method="post">
<div align="center" >
<img src="admin.png" alt="admin" style="position:relative;top:-40px;border-radius: 50%;height:100px">
<h3>Login here</h3>
<table align="center" cellspacing="15">
<tr>
<td><input type="text" placeholder="Username" border="none" name="username" required /></td><br>
</tr>
<tr>
<td><input type="password" placeholder=" Password" name="password" required /></td>
</tr>
<tr>
<td align="center">
<input type="submit" onclick="" name="login" value="Login"class="button"></button>
</td>
</tr>
<tr>
<td align="center"><a href="Signin.php">Dont'have a account?</td>
</tr>
</table>
</div>
</form>
</body>
</html>