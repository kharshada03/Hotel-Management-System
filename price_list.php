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

$room=$_POST['rooms'];
$sql = "SELECT Price FROM rooms where Room='$room'";  //$coffee_name
$result = $conn->query($sql);


while($row = $result->fetch_assoc()) {
        echo $row["Price"];
    }

?>