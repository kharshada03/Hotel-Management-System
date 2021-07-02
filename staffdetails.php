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
if(isset($_GET['submit']))

	//$checkifexist = $_POST['search'];
	
//check user alereay exists or not
// $sql=mysqli_query($conn,"Select * From staff_form");

$r=mysqli_num_rows($sql);
$queryy=mysqli_query($conn,"select * from staff_form ");

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
<h1 align="center">Staff Records</h1>
<table border="1" align="center" width="100%">
<tr>
<td align="center"><b>SrNo.</b></td>
<td align="center"><b>Name</b></td>
<td align="center"><b>Mobile No</b></td>
<td align="center"><b>Aadhar</b></td>
<td align="center"><b>Gender</b></td>
<td align="center"><b>Address</b></td>
<td align="center"><b>Age</b></td>
<td align="center"><b>Work Type</b></td>
</tr>

<?php
$i=1;
while($row=mysqli_fetch_array($queryy))
{
	?>
	<tr>
    <td align="center"><?php echo $row['Id']; ?></td>
	<td align="center" ><?php echo $row['Name']; ?></td>
	<td align="center"><?php echo $row['Mobile']; ?></td>
	<td align="center"><?php echo $row['Aadhar']; ?></td>
	<td align="center"><?php echo $row['Gender']; ?></td>
	<td align="center"><?php echo $row['Address']; ?></td>
	<td align="center"><?php echo $row['Age']; ?></td>
	<td align="center"><?php echo $row['Work']; ?></td>
	</tr>
<?php
echo "</tr>";
$i++;
}
?>
</table>
</body>
</html>