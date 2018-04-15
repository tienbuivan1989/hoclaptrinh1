<?php
require 'connect.php';
if (isset($_GET['id'])){
	$id = $_GET['id'];
	$sql = "DELETE FROM user where id = $id";
		if (mysqli_query($conn, $sql)){
	
			header ('location:list_admin.php');
		}

}
?>