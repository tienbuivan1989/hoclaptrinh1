<?php
session_start();
require 'config.php';
date_default_timezone_set("Asia/Ho_Chi_Minh");
// neu nguoi dung nhap thong tin dat hang
if (isset($_POST)){
	$name = $_POST['name'];
	$phonenumber = $_POST['phonenumber'];
	$address = $_POST['address'];
	if ($name!=""&& $phonenumber!=""&& $address!=""){
		//them vao db
		$date =date('d/m/y h:i:s',time());
		$sql="INSERT INTO dathang(name, phonenumber, address, ngaythang) VALUES ('$name','$phonenumber','$address','$date')";
		$result= mysqli_query($conn,$sql);
		$id_order=mysqli_insert_id($conn);
		$cart1=$_SESSION['cart'];
		foreach ($cart1 as $item) {
			$product_id=$item['id'];
			$price=$item['price'];
			$qty=$item['qty'];
			$sql="INSERT INTO chitietdathang(id_order,product_id,price,qty) VALUES ($id_order,$product_id,$price,$qty)";
			mysqli_query($conn,$sql);
			header('location:order_detail.php');
	}
		}
}
?>

<!DOCTYPE html>
<html>
<head>
	<title>Hien thi gio hang</title>
</head>
<body>
<h1>Gio hang cua ban</h1>
	<?php
	if (isset($_SESSION['cart'])){?>
<table border="1" width="1000">
	<tr>
		<th>Stt</th>
		<th>ID</th>
		<th>Ten</th>
		<th>Gia</th>
		<th>So luong</th>
		<th>Thanh tien</th>
		<th>HOan tac</th>
	</tr>
	<?php 
	$i=1;
	$cart=$_SESSION['cart'];
	
foreach ($cart as $item){ ?>
	<tr>
		<td><?php echo $i;?></td>
		<td><?php echo $item['id'];?> </td>
		<td> <?php echo $item['model']; ?> </td>
		<td> <?php echo $item['price']; ?> </td>
		<td> <?php echo $item['qty'];?></td>
		<td> <?php $sub =  $item['price']*$item['qty']; echo number_format($sub);?> </td>
	</tr>
<?php $i++; } ?>
<tr>
	<td colspan="7">
		<a href="cart.php">quay lai gio hang</a>
	</td>
</tr>
</table>
<h2>Thong tin dat hang</h2>
<form method="post" action="">
	<table width="1000" border="1">
		<tr>
			<td>Ho ten</td>
			<td><input type="text" name="name" required></td>
		</tr>
		<tr>
			<td>Dien thoai</td>
			<td><input type="number" name="phonenumber" required></td>
		</tr>
		<tr>
			<td>Dia chi</td>
			<td><input type="text" name="address" required></td>
		</tr>
		<tr>
			<td colspan="2"><input type="submit" name="order" value="Dat Hang"></td>
		</tr>
	</table>
</form>
<?php }  else {
	echo 'ban chua mua san pham nao';
}
?>
</body>
</html>
<?php
?>
