<?php
session_start();
echo $_SESSION["user"];
$name = $_SESSION["info"]["name"];
echo $name;
if (isset($_SESSION["user"]))
{
	echo $_SESSION["user"];
}
else  {
	echo "Session chua duoc sinh ra";
}
?>