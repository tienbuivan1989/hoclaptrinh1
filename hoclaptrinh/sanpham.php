<?php
require 'config.php';
if (isset($_POST['submit'])){
	//print_r($_POST);
	$list_of_products = $_POST['list_of_products'];
	$model = $_POST['model'];
	$old_price = $_POST['old_price'];
	$new_price = $_POST['new_price'];
	$short = $_POST['short'];
	$detail = $_POST['detail'];
	$ngaythang = $_POST['ngaythang'];
	$status = $_POST['status'];
	if ($list_of_products=='' || $model =='' || $old_price =='' || $new_price =='' || $short =='' || $detail =='' || $ngaythang ==''){
		$error = "Vui long nhap day du thong tin";
	} else {
// lu vao co so du lieu
		$sql = "INSERT INTO sanpham (list_of_products, model, old_price, new_price, short, detail, ngaythang, status ) VALUES ('$list_of_products', '$model', '$old_price', '$new_price' , '$short', '$detail', '$ngaythang', '$status')";
		//echo $sql; die;
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
	<title> San Pham</title>
</head>
<body>
<h1> SAN PHAM</h1>
<form action="" method="post">
	<p> <?php if (isset($error)) {echo $error;}?></p>
	<table>
		<tr>
			<td>Loai san pham</td>
			<td > 
				<select name ="list_of_products">
					<option value="tivi"> Tivi </option>
					<option value="tulanh"> Tu Lanh </option>
					<option value="dieuhoa"> Dieu Hoa </option>
				</select>
			</td>
		</tr>
		<tr>
			<td>Ma san pham</td>
			<td> <input type="text" name="model"></td>
		</tr>
		<tr>
			<td>gia cu</td>
			<td> <input type="number" name="old_price"></td>
		</tr>
		<tr>
			<td>gia moiw</td>
			<td> <input type="number" name="new_price"></td>
		</tr>
		<tr>
			<td>Gioi thieu tong quan san pham</td>
			<td> 
				<textarea name ="short", cols="5", rows="5"></textarea>
			</td>
		</tr>
		<tr>
			<td>Gioi thieu chi tiet</td>
			<td> 
				<textarea name ="detail", cols="20", rows="20"></textarea>
			</td>
		</tr>
		<tr>
			<td> Ngay Thang</td>
			<td> <input type="date" name="ngaythang"></td>
		</tr>
		<tr>
			<td>Trang thai</td>
			<td> 
				<select name="status">
					<option value="1">Hien thi</option>
					<option value="0">khong Hien thi</option>

				</select>
			</td>
		</tr>
		<tr>
			<td>Nhap</td>
			<td> <input type="submit" name="submit" value="submit"></td>
		</tr>
	</table>
</form>

</body>
</html>