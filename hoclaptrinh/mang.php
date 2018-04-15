<?php
session_start();
require'include/check_login.php';
$a = array( );
$b= array (2,3,5,6,"abc",9);
// ko dung echo cho mang
echo $b[0];
$dem=count($b);
echo "</br>";
echo $dem;
echo "</br>";
$i;
for ($i=0;$i<=$dem-1;$i++)
{
echo $b[$i];
}
echo "</br>";
print_r($b);
$c=array(
	"name"=> "nguyen van A",
	"birthday" => "1989",
	"address" => "Ha Noi"
);
echo "</br>";
echo $c["name"];
echo "</br>";
echo $c["birthday"];
echo "</br>";
echo $c["address"];
$d=array(
array(
	"name"=> "nguyen van A",
	"birthday" => "1989",
	"address" => "Ha Noi"
),
array(
	"name"=> "nguyen van A",
	"birthday" => "1989",
	"address" => "Ha Noi")
	,
array(
	"name"=> "nguyen van A",
	"birthday" => "1989",
	"address" => "Ha Noi")
);


foreach ($c as $key => $value) {
	echo "</br>";
	echo $key;
	echo ":";
	echo $value;
}
?>

<table>
	<tr>
		<th>STT</th>
		<th>Ho Ten</th>
		<th>Nam sinh</th>
		<th>Dia chi</th>
	</tr>
	<tr>
		<td>0</td>
		<td>BUi Van Tien</td>
		<td>1989</td>
		<td>Ha Noi</td>ch
	</tr>
	<?php
	$i=1;
	foreach ($d as $item) {
		?>
		<tr>
			<td> <?php echo $i ;?> </td>
			<td> <?php echo $item["name"]; ?> </td>
			<td> <?php echo $item["birthday"];?> </td>
			<td> <?php echo $item["address"]; ?> </td>
		</tr>
		<?php
		$i++;
	}
	?>
</table>
Danh sach tin tuc
<?php
$f = array(
	array(
		"title" => "tin 1",
		"content" => "noi dung tin 1",
		"status" => "1"
	),
	array(
		"title" => "tin 2",
		"content" => "noi dung tin 2",
		"status" => "0"
	),
	array(
		"title" => "tin 3",
		"content" => "noi dung tin 3",
		"status" => "1"
	)
);

?>

<table>
	<tr>
		<th>STT</th>
		<th>Tieu de</th>
		<th>Noi dung</th>
		<th>Trang thai</th>
	</tr>
	
	<?php
	$i=1;
	foreach ($f as $items) {
		?>
		<tr>
			<td> <?php echo $i ;?> </td>
			<td> <?php echo $items["title"]; ?> </td>
			<td> <?php echo $items["content"];?> </td>
			<td> <?php if ($items["status"]==1){echo "Hien Thi";} else {echo "Khong Hien Thi";}; ?> </td>
		</tr>
		<?php
		$i++;
	}
	?>
</table>