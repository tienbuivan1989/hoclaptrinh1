<?php
require 'config.php';
if (isset ($_GET['id'])){
	$id=$_GET['id'];
	$sql = "SELECT * FROM news WHERE new_id = $id";
	$result = mysqli_query($conn, $sql);
	if (mysqli_num_rows($result)>0)
	{
		$row = mysqli_fetch_assoc($result);
		$title = $row ['new_title'];
		$content = $row['new_content'];
		$status = $row['new_status'];
	}else {
		header ('location:new_list.php');
	}
} else {
	header ('location:new_list.php');
}
if (isset($_POST['dangky'])){
	print_r($_POST);
	$title = $_POST['title'];
	$content = $_POST['content'];
	$status = $_POST['status'];
	if ($title==''){
		$error = "Vui long nhap day du thong tin";
	}
	else {
// lu vao co so du lieu
		$sql = "UPDATE news SET new_title = '$title', new_content = '$content', new_status = '$status' WHERE new_id = $id ";
		mysqli_query($conn, $sql) ;
			header('location:new_list.php');
		
	}
}
?>
<!DOCTYPE html>
<html>
<head>
	<title> Dang ky bai viet</title>
</head>
<body>
<h1> Dang ky bai viet</h1>
<form action="", method="post">
	<table>
		<tr>
			<td> ten bai viet </td>
			<td><input type="text" name="title" value="<?php echo $title; ?> "></td>
		</tr>
		<tr>
			<td> trang thai </td>
			<td> 
				<select name = 'status'>
					<option <?php if ($status==1) {echo 'selected="selected" '; }?> value = "1" > Hien thi</option>
					<option <?php if ($status==0) {echo 'selected="selected" '; }?> value = "0" > khong Hien thi</option>

				</select>
			</td>
		</tr>
		<tr>
			<td> Noi dung </td>
			<td> 
				<textarea name="content", rows="10", cols="10"> <?php echo $content; ?> </textarea>
			</td>
		</tr>
		<tr>
			<td>Dang ky</td>
			<td> <input type="submit" name="dangky" value="dangky"></td>
		</tr>
	</table>
</form>
</body>
</html>