<?php
session_start();
date_default_timezone_set("Asia/Ho_Chi_Minh");
if (isset($_POST["login"])){
	$user = $_POST["user"];
	$password = $_POST["pass"];
	if ($user=="admin123" && $password == "123456"){
		// dung ten dang nhap va mat khau
		$_SESSION["vn_admin"] = $user; //danh dau da dang nhap session
		if ($_POST['remember']== 'on'){
			setcookie('vn_admin', $user, time ()+ 7*24*3600);
		}
		header ("location: mang.php");
	}
	else {
		$error = "ban nhap sai ten dang nhap hoac mat khau";
	}
}
?>
<!DOCTYPE html>
<html>
<head>
	<title> Dang Nhap </title>
	<meta charset="utf-8">
</head>
<body>
	<h1> Dang Nhap</h1>
	<p> <?php if (isset($error)) {echo $error ;}?> </p>
	<form action="" method="post">
		<table>
			<tr>
				<td> ten dang nhap</td>
				<td> <input type="text" name="user"></td>
			</tr>
			<tr>
				<td> Mat Khau</td>
				<td> <input type="password" name="pass"></td>
			</tr>
			<tr>
				<td>  </td>
				<td> <input type="checkbox" name="remember" checked="checked"> Ghi nho dang nhap</td>
			</tr>
			<tr>
				
				<td> <input type="submit" name="login" value="Dang Nhap"></td>
			</tr>
		</table>
	</form>
</body>
</html>