<?php
require 'config.php';
if (isset($_POST['dangky'])){
	$name = $_POST['user'];
	$password = md5 ($_POST['password']);
	$email = $_POST['email'];
	$status = $_POST['status'];
	if ($name=='' || $password ==''){
		$error = "Vui long nhap day du thong tin";
	} else {
// lu vao co so du lieu
		$sql = "INSERT INTO user (user, password, email, status) VALUES ('$name', '$password', '$email', '$status')";
		if (mysqli_query($conn, $sql)) {
			echo "thanh cong";
		} else {
			echo 'chua thuc hien duoc';
		}
	}
}
?>
<!DOCTYPE html>
<html>
<head>
	<title> Dang ky</title>
</head>
<body>
<h1> Dang ky thanh vien</h1>
<form action="" method="post">
	<p> <?php if (isset($error)) {echo $error;}?></p>
	<table>
		<tr>
			<td>Ten dang nhap</td>
			<td> <input type="text" name="user"></td>
		</tr>
		<tr>
			<td>Mat khau</td>
			<td> <input type="password" name="password"></td>
		</tr>
		<tr>
			<td>Email</td>
			<td> <input type="email" name="email"></td>
		</tr>
		<tr>
			<td>Trang thai</td>
			<td> 
				<select name="status">
					<option value="1">Hoat dong</option>
					<option value="0">khong Hoat dong</option>

				</select>
			</td>
		</tr>
		<tr>
			<td>Dang ky</td>
			<td> <input type="submit" name="dangky" value="dangky"></td>
		</tr>
	</table>
</form>

</body>
</html>