<?php
require 'config.php';

?>

<!DOCTYPE html>
<html>
<head>
	<title> Danh sach bai viet</title>
</head>
<body>
<table width="900">
	<tr>
		<th>stt</th>
		<th>tieu de</th>
		<th>Anh</th>
		<th>Noi dung</th>
		<th>trang thai</th>		
		<th>Hanh dong</th>
		
	</tr>
<?php
$sql = 'SELECT * FROM news';

$result = mysqli_query($conn, $sql);
$count = mysqli_num_rows($result); // ham tra ve so ban ghi nhan duoc
$i =1;
if ($count>0){
while ($row = mysqli_fetch_array($result)) {
?>
	</tr>
		
		<th><?php echo $i;?> </th>
		<th> <?php echo $row['new_title']; ?> </th>
		<th> <img width="50" src="uploads/<?php echo $row['new_image'];?>"> </th>
		<th> <?php echo $row['new_content']; ?></th>
		<th> <?php if ($row['new_status']==1){
			echo 'hoat dong';
		}
		else {echo 'khong hoat dong';} ?></th>
		<th>
			<a href="new_edit.php?id=<?php echo $row['new_id']; ?> ">sua</a> 
			<a href="new_delete.php?id=<?php echo $row['new_id']; ?> ">xoa</a> 
			<a href="new_detail.php?id=<?php echo $row['new_id']; ?>">Chi tiet</a> 
		</th>
	</tr>
<?php
$i++;
}
}?>
</table>

</body>
</html>