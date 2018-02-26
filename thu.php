<?php
if (isset($_POST["kiemtra"])){
	$thu=$_POST["thu"];
	echo "hôm nay là thứ: ".$thu;
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
	Nhập thứ: <input type="number" name="thu" value="">
	<input type="submit" name="kiemtra" value="Kiểm tra">
</form> <!-- end form -->


</body>
</html>