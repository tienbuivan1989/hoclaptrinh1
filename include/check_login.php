<?php
if (isset($_COOKIE['vn_admin'])){
	echo $_COOKIE['vn_admin'];
}
else {
	echo 'ko co cookei';
}
?> 
<?php if (isset($_SESSION["vn_admin"])) 
	{
		echo "xin chao: " .$_SESSION["vn_admin"];
		echo '<a href = "logout.php"> Dang Xuat </a>';
	}
	else {
		if (isset($_COOKIE['vn_admin'])){
			$_SESSION['vn_admin']= $_COOKIE['vn_admin'];
			echo $_SESSION['vn_admin'];
			echo " <a href='login.php'> Dang nhap </a> " ;
		} else {
		header ('location: login.php');
		}
	}
?>
