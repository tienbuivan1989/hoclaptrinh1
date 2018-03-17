<?php
require 'config.php';
if (isset($_POST['add'])){
	$title = $_POST['title'];
	$content = $_POST['content'];
	$status = $_POST['status'];
	$ngaythang = $_POST['ngaythang'];

if ($title =='' || $content=='' ||$status =='' || $ngaythang==''){
	
	$error = "vui long nhap day du thong tin";
} else {
	$sql = "INSERT INTO `ngs`(`ngs_title`, `ngs_content`, `ngs_status`, `ngs_ngaythang`) VALUES ('$title','$content','$status','$ngaythang')";
	if (mysqli_query($conn, $sql)) {
			echo "them moi thanh cong";
		} else {
			echo 'chua them moi duoc';
		}
}
}
?>
<!DOCTYPE html>
<html>
<head>
	<title>them san pham</title>
</head>
<body>
<form action="" method="post">
<table>
	<tr>
		<td>Ten tieu de</td>
		<td> <input type="text" name="title"</td>
	</tr>
	<tr>
		<td>Hinh anh</td>
		<td><img src="#"></td>
	</tr>
	<tr>
		<td>Noi dung</td>
		<td> <textarea rows="100", cols="100", name="content"></textarea></td>
	</tr>
	<tr>
		<td>Trang Thai</td>
		<td>
			<select name="status">
				<option value="1">Hoat dong</option>
				<option value="0">Khong hoat dong</option>
			</select>
		</td>
	</tr>
	<tr>
		<td>Ngay thang</td>
		<td> <input type="date" name="ngaythang"</td>
	</tr>
	<tr>
		<td>Them</td>
		<td> <input type="submit" name="add"</td>
	</tr>
</table>
</form>
</body>
</html>