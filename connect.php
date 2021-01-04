<?php
$firstName = $_POST['firstName'];
$lastName = $_POST['lastName'];
$email = $_POST['email'];
$password = $_POST['password'];
$number = $_POST['number'];

// Database connectio
$conn = new mysqli('localhost', 'root', '', 'log');
$sql_query = "select * from demo_login where first_name = '$firstName' and last_name = '$lastName' and email ='$email' and phn = '$number' and pass='$password'";
$start = mysqli_query($conn, $sql_query);
$output = mysqli_num_rows($start);
if ($output > 0) {
	echo " login successfull ";
} else {
	echo " login  not successfull ";
}
$conn->close();
