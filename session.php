<?php
session_start(); 
// khao bao dau trang 1 lan
$_SESSION["user"]= "admin";
echo $_SESSION["user"];
$a =array (
	"name"  => "vn",
	"id" => 1
);
$_SESSION["info"] = $a;
unset($_SESSION["user"]); // huy 1 session
session_destroy(); //huy tat ca session
?>