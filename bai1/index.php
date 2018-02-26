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
	<?php


$v=6;
$i;
for ($i=1;$i<=7;$i++)
{
if ($v==$i);
break;
}
echo "hom nay la thu: .$v";
echo "</br>";

$i=1;
while($i<=20)
{
if($i%2==0)
	echo $i;
	$i++;
}
echo "</br>";

$i=1;
echo "boi so chung cua 4 va 6 la:";
while ($i<=30)
{
	if ($i%4==0&&$i%6==0)
	{
	echo $i;
	echo ", ";
}

	$i++;
}
echo "</br>";
$i=1;
$j=1;
$kq;
$dong=1;
for ($i=1;$i<=10;$i++)
{
	echo "day la bang nhan:".$i;
echo "</br>";
	for ($j=1;$j<10;$j++)
	{
	
	$kq=$i*$j;
	echo $i."x".$j."=".$kq.",";
echo "</br>";
}
$dong++;
echo "</br>";
}
?>
</body>
</html>