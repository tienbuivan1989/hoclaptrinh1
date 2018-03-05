<?php
require 'config.php';
if (isset($_POST['dangky'])){
	print_r($_POST);
	$new_tile = $_POST['new_tile'];
	$content = $_POST['content'];
	$status = $_POST['status'];
	if ($new_tile==''){
		$error = "Vui long nhap day du thong tin";
	}
	else {
// lu vao co so du lieu
		$sql = "INSERT INTO news (new_tile, new_content, new_status) VALUES ('$new_tile', '$content','$status')";
		mysqli_query($conn, $sql) ;
			header('location:news_list.php');
		
	}
}
?>
<!DOCTYPE html>
<html>
<head>
	<title> Dang ky bai viet</title>
</head>
<body>
<h1> Dang ky bai viet</h1>
<form action="", method="post">
	<table>
		<tr>
			<td> ten bai viet </td>
			<td><input type="text" name="new_tile"></td>
		</tr>
		<tr>
			<td> trang thai </td>
			<td> 
				<select name = 'status'>
					<option> Hien thi</option>
					<option> khong Hien thi</option>

				</select>
			</td>
		</tr>
		<tr>
			<td> Noi dung </td>
			<td> 
				<textarea name="content", rows="10", cols="10"></textarea>
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