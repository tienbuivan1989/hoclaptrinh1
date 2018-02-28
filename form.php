<?php

if (isset($_POST["dangky"])){
	echo $_POST["hoten"];
	echo $_POST["dieukhoan"];
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Bài 2</title>
	<meta name="desription" content="Mô tả về bài 2">
	<meta name="keyword" content="keyword của trang">
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<link rel="stylesheet" href="font-awesome/css/font-awesome.min.css">

</head>
<body>



<form method="post" action="">
	Họ Tên: <input type="text" name="hoten">
	Tuổi: <input type="number" name="tuoi">
	Ngày sinh: <input type="date" name="ngaysinh">
	Mật khẩu: <input type="password" name="matkhau">
	<br>
	<textarea rows="10" cols="20">Giới thiệu</textarea>
	<br>
	<select name="tinh">
		<option value="HN">Hà Nội</option>
		<option value="HCM">Hồ Chí Minh</option>
		<option value="DN">Đà Nẵng</option>
	</select> <!-- end select -->
	<br>
	<input type="checkbox" name="dieukhoan">
	<input type="submit" name="dangky" value="Đăng Ký">

</form> <!-- end form -->


</body>
</html>