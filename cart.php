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
echo 'gio hang';
echo '<pre>';
print_r($_SESSION['cart']);
echo '</pre>';
foreach ($product as $key => $value) {
	?>
	<table border="1">
		<tr>
			<td> <?php echo $value; ?></td>
		</tr>
	</table>
	<?php 
}
?>
