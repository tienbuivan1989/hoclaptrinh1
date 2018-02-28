<?php
$a = array (9,9,2,6,4,8,3);
$dem = count ($a);
$i;
echo "In mang da cho:";
for ($i=0;$i<$dem;$i++)
{
	echo $a[$i];
	echo ", ";
}
echo "</br>";
echo "In mang dao nguoc:";
for ($i=$dem-1;$i>=0;$i--)
{
	echo $a[$i];
	echo ", ";
}
$tong=0;
echo "</br>";
echo "Tong cua mang la:";

for ($i=0;$i<$dem;$i++)
{
	$tong=$tong + $a[$i];
}
echo "$tong";
echo "</br>";
echo "Gia tri trung binh cua mang la:";
$gttb=$tong / $dem;
echo "$gttb";
echo "</br>";
$min = $a[0];
for ($i=1;$i<$dem;$i++)
{
	if ($a[$i]< $min)
	{
		$min=$a[$i];
	}

}
echo "Gia tri nho nhat cua mang la:";
echo "$min";
echo "</br>";
$second;
$flag = 0;
$j;
$tam;
for ($i=0;$i<$dem;$i++)
{
	for ($j=$i+1;$j<$dem;$j++)
	{
		if ($a[$i]<$a[$j])
		{
			$tam=$a[$i];
			$a[$i]=$a[$j];
			$a[$j]=$tam;
		}
	}
}
echo "Mang theo thu tu giam dan:";
for ($i=0;$i<$dem;$i++)
{
	echo "$a[$i]";
	echo ", ";
}
echo "</br>";
for ($i=0;$i<$dem;$i++)
{
	if ($a[$i]<$a[0])
	{
		$second = $a[$i];
		$flag = 1;
		break;
	}
	else $flag = 0;
}
if ($flag==1)
{
	echo "Gia tri lon thu 2 cua mang là: $second";
}
else echo "Mang khong co gia tri lon thu 2";
echo "</br>";
echo "Mang theo thu tu tang dan:";
for ($i=$dem-1;$i>=0;$i--)
{
	echo "$a[$i]";
	echo ", ";
}
?>