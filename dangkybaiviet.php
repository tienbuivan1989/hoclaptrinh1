<?php
require 'config.php';
if (isset($_POST['dangky'])){
	//print_r($_FILES);die;
	$image = $_FILES['image']['name'];
	$tmp = $_FILES['image']['tmp_name']; // duong dan bo nho tam
	$dir = './uploads/'; // duong dan thu muc
	if ($image!=""){
		move_uploaded_file($tmp,$dir.$image);
	}
	$title = $_POST['title'];
	$content = $_POST['content'];
	$status = $_POST['status'];
	if ($title==''){
		$error = "Vui long nhap day du thong tin";
	}
	else {
// lu vao co so du lieu
		$sql = "INSERT INTO news (new_title, new_content, new_status, new_image) VALUES ('$title', '$content','$status', '$image')";
		mysqli_query($conn, $sql) ;
			header('location:new_list.php');
		
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
<form action="" method="post" enctype="multipart/form-data">
	<table>
		<tr>
			<td> ten bai viet </td>
			<td><input type="text" name="title"></td>
		</tr>
		<tr>
			<td> Anh dai dien </td>
			<td><input type="file" name="image"></td>
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