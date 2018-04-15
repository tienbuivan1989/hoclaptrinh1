<?php
require 'config.php';
?>
<!DOCTYPE html>
<html>
<head>
	<title>ngs</title>
</head>
<body>
<table width="500" border="1px">
	<tr>
		<td>Stt</td>
		<td>Tieu de</td>
		<td>Noi dung</td>
		<td>Hinh anh</td>
		<td>Trang thai</td>
		<td>Ngay thang</td>
	</tr>
	<?php
	$i=1;
	$sql = 'SELECT * FROM ngs';
	$result = mysqli_query($conn,$sql);
	$count= mysqli_num_rows($result);
	if ($count>0)
	while ($row = mysqli_fetch_array($result)){
	?>
	<tr>
		<td> <?php echo $i; ?> </td>
		<td> <?php echo $row['ngs_title'];?> </td>
		<td> <?php echo $row['ngs_image'];?> </td>
		<td> <?php echo $row['ngs_content'];?> </td>
		<td> <?php if( $row['ngs_status']==1){ echo 'hoat dong';} else {echo 'khong hoat dong';}?> </td>
		<td> <?php echo $row['ngs_ngaythang']?> </td>
		<th> 
			<a href="sanpham_add.php?id=<?php echo $row['ngs_id'];?>"> them </a>
			<a href="#"> sua </a>
			<a href="#"> xoa </a>
		</th>
	</tr>
	<?php
	$i++;
	}

	?>
</table>
</body>
</html>