<?php
require 'config.php';
if (isset ($_GET['id'])){
	$id=$_GET['id'];
	$sql = "SELECT * FROM sanpham WHERE id = $id";
	$result = mysqli_query($conn, $sql);
	if (mysqli_num_rows($result)>0)
	{
	$row = mysqli_fetch_assoc($result);
	$list_of_products = $row['list_of_products'];
	$model = $row['model'];
	$old_price = $row['old_price'];
	$new_price = $row['new_price'];
	$short = $row['short'];
	$detail = $row['detail'];
	$ngaythang = $row['ngaythang'];
	}else {
		header ('location:sanpham_list.php');
	}
} else {
	header ('location:sanpham_list.php');
}
if (isset($_POST['dangky'])){
	print_r($_POST);
	$list_of_products = $_POST['list_of_products'];
	$model = $_POST['model'];
	$old_price = $_POST['old_price'];
	$new_price = $_POST['new_price'];
	$short = $_POST['short'];
	$detail = $_POST['detail'];
	$ngaythang = $_POST['ngaythang'];
	if ($list_of_products=='' || $model =='' || $old_price =='' || $new_price =='' || $short =='' || $detail =='' || $ngaythang ==''){
		$error = "Vui long nhap day du thong tin";
	}
	else {
// lu vao co so du lieu
		$sql = "UPDATE sanpham SET list_of_products = '$list_of_products', model = '$model', old_price = '$old_price', new_prcie = '$new_prcie', short = '$short', detail = '$detail', ngaythang = '$ngaythang' WHERE id = $id ";
		mysqli_query($conn, $sql) ;
			header('location:sanpham_list.php');
		
	}
}
?>
<!DOCTYPE html>
<html>
<head>
	<title> San Pham </title>
</head>
<body>
<h1> San pham</h1>
<form action="", method="post">
	<table>
		<tr>
			<td> danh sach san pham </td>
			<td><input type="text" name="list_of_products" value="<?php echo $list_of_products; ?> "></td>
		</tr>
		<tr>
			<td> model </td>
			<td><input type="text" name="model" value="<?php echo $model; ?> "></td>
		</tr>
		<tr>
			<td> Gia cu </td>
			<td><input type="number" name="old_price" value="<?php echo $old_price;?>"></td>
		</tr>
		<tr>
			<td> Gia moi </td>
			<td><input type="number" name="new_prcie" value="<?php echo $new_price;?>"></td>
		</tr>
		<tr>
			<td> Gioi thieu qua </td>
			<td><textarea name ="short", cols="5", rows="5"  > <?php echo $short; ?></textarea> </td>
		</tr>
		<tr>
			<td>Gioi thieu chi tiet</td>
			<td> 
				<textarea name ="detail", cols="20", rows="20" > <?php echo $detail; ?></textarea>
			</td>
		</tr>
		<tr>
			<td> Ngay Thang</td>
			<td> <input type="date" name="ngaythang" value="<?php echo $ngaythang;?>"></td>
		</tr>
		<tr>
			<td>Dang ky</td>
			<td> <input type="submit" name="dangky" value="dangky"></td>
		</tr>
	</table>
</form>
</body>
</html>