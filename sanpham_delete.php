<?php
require 'config.php';
if (isset($_GET['id'])){
	$id = $_GET['id'];
	$sql = "DELETE FROM sanpham where id = $id";
		if (mysqli_query($conn, $sql)){
	
			header ('location:sanpham_list.php');
		}

}
?>