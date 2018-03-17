<?php
require 'config.php';

?>

<!DOCTYPE html>
<html>
<head>
	<title> Danh sach san pham</title>
</head>
<body>
<table width="1200">
	<tr>
		<th>stt</th>
		<th>Danh sach san pham</th>
		<th>Model</th>
		<th>Gia cu</th>
		<th>Gia moi</th>
		<th>Gioi thieu qua</th>
		<th>Gioi thieu chi tiet</th>
		<th>Ngay thang</th>
	</tr>
<?php
$sql = 'SELECT * FROM sanpham';

$result = mysqli_query($conn, $sql);
$count = mysqli_num_rows($result); // ham tra ve so ban ghi nhan duoc
$i =1;
if ($count>0){
while ($row = mysqli_fetch_array($result)) {
?>
	</tr>
		
		<th><?php echo $i;?> </th>
		<th> <?php echo $row['list_of_products']; ?> </th>
		<th> <?php echo $row['model']; ?> </th>
		<th> <?php echo $row['old_price']; ?> </th>
		<th> <?php echo $row['new_price']; ?> </th>
		<th> <?php echo $row['short']; ?> </th>
		<th> <?php echo $row['detail']; ?> </th>
		<th> <?php echo $row['ngaythang']; ?> </th>
		
		<th>
			<a href="cart.php?id=<?php echo $row['id']; ?>">mua ngay</a> 
			<a href="sanpham_edit.php?id=<?php echo $row['id']; ?>">sua</a> 
			<a href="sanpham_delete.php?id=<?php echo $row['id']; ?>">xoa</a> 
			<a href="sanpham_add.php?id=<?php echo $row['id']; ?>">Them</a> 
		</th>
	</tr>
<?php
$i++;
}
}?>
</table>

</body>
</html>