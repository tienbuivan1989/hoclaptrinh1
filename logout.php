<?php
session_start();
if (isset($_SESSION['vn_admin'])){
	unset ($_SESSION['vn_admin']);
	header ('Location: login.php');
}
else {
	header('location: index.php');
}
?>