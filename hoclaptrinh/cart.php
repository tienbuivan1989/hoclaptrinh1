<?php
session_start();
require 'config.php';
if (isset($_GET['id'])){
	$id=$_GET['id'];
	$sql = "SELECT id, model, new_price FROM sanpham WHERE id = $id";
	$result = mysqli_query($conn,$sql);
	if (mysqli_num_rows($result)>0){
		$row=mysqli_fetch_assoc($result);
		$model=$row['model'];
		$price=$row['new_price'];
	} else {
		header ('Location:sanpham_list.php');
	}
	if ($_SESSION['cart'][$id]){
		$_SESSION['cart'][$id] ['qty']= $_SESSION['cart'][$id] ['qty'] +1;
	} else {
		//mua lan 1
		$product =array (
		'id'=> $id,
		'model' => $model,
		'price'=>$price,
		'qty' => 1
	);
		$_SESSION['cart'][$id] = $product;
		
	}
	
	header ('location:cart.php');
}
// het them moi gio hang
// cap nhat gio hang
if (isset($_POST['update'])){
	foreach ($_SESSION['cart'] as $cart) {
		$id=$cart['id'];
		$qty=$_POST['qty'][$id];
		$_SESSION['cart'][$id]['qty']=$qty;//cap nhat so luong
		header('cart.php');
	}
}
//HET CHAP NHAT
echo 'gio hang';

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
<form method="post" action="">
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
		<td> <input type="number" name="qty[<?php echo $item['id'];?>]" value="<?php echo $item['qty'];?>"></td>
		<td> <?php echo $sub =  $item['price']*$item['qty'];?> </td>

		<td>
			<a href="del_cart.php?id=<?php echo $item['id'];?>">Xoa san pham</a>
		</td>
	</tr>
<?php $i++; } ?>
<tr>
	<td colspan="7">
		<a href="sanpham_list.php">Tiep tuc mua hang</a>
		<input type="submit" name="update" value="cap nhat">
		<a href="order.php">Dat hang</a>
	</td>
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
