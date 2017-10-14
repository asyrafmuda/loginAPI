<?php

$username = $_POST['username'];
$password = $_POST['password'];

//DB Credential

$user = '';
$pass = '';
$db = '';
$host ='';

//connect to mysql

$connection = mysqli_connect($host, $user, $pass, $db ) or die('Connection Error:' . mysqli_error($connection));

//fetch data

$sql = "SELECT * FROM user WHERE username='$username' and password='$password'";
$result = mysqli_query($connection, $sql) or die('Error in selecting' . mysqli_error($connection));
$rows = mysqli_num_rows($result);

if ($rows == 1){
	$response['success']= true;
	$response['message'] = 'Login Successful';
}else{
	$response['success']= false;
	$response['message']='login Failed';

	}

	echo json_encode($response);

?>
