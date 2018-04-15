<?php
require 'config.php';
if (isset($_GET['id'])){
	$id = $_GET['id'];
	$sql = "DELETE FROM news where new_id = $id";
		if (mysqli_query($conn, $sql)){
	
			header ('location:new_list.php');
		}

}
?>