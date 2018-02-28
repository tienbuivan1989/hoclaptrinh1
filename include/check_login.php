<p> <?php if (isset($_SESSION["vn_admin"])) 
	{
		echo "xin chao: " .$_SESSION["vn_admin"];
		echo '<a href = "logout.php"> Dang Xuat </a>';
	}
	else {
		echo " <a href='login.php'> Dang nhap </a> " ;
		header ('location: login.php');
	}
	?>
</p>