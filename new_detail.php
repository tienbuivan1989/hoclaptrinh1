<?php
require 'config.php';
if (isset($_GET['id'])){
	$id= $_GET['id'];
} else {
	header('Location: new_list.php');
}

$sql = "SELECT * FROM news WHERE new_id = $id";
$result = mysqli_query($conn, $sql);
if (mysqli_num_rows ($result)>0){
// co du lieu tra ve
while ($row = mysqli_fetch_assoc($result)) {
	$title = $row['new_title'];
	//$new_content = $row['new_content'];
}
} else {
	header('Location: new_list.php');
}
echo $title;
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

</body>
</html>