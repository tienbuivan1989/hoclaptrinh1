<?php
$host = 'localhost';
$user = 'root';
$password = '';
$database = 'vn_24';
$conn = mysqli_connect($host, $user, $password, $database);
if ($conn){
	echo 'ket noi thanh cong';
} else {
	echo 'chua ket noi duoc';
}

?>