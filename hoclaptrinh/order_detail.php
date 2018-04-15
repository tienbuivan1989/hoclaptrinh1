<?php
require 'config.php';
$sql ="SELECT * FROM dathang";
$result = mysqli_query($conn,$sql);
if (mysqli_num_rows($result)>0){
	while ($row=mysqli_fetch_assoc($result)) {
		$order=$row['order_id'];
		echo $name=$row['name'];
		echo $phonenumber=$row['phonenumber'];
		echo $address=$row['address'];
		echo '<br>';
		echo 'danh sah san pham da mua';
		$sql2="SELECT * FROM chitietdathang WHERE id_order=$order";
		$result2=mysqli_query($conn,$sql2);
		if (mysqli_num_rows($result2)){
			while ($row2=mysqli_fetch_assoc($result2)) {
				echo '<br>';
				echo $row2['product_id'];
				echo '<br>';
				echo $row2['qty'];
				echo '<br>';
				echo $row2['price'];
			}
		}
	}
}
?>