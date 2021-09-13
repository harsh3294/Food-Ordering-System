<?php
session_start();
include("conn.php");

$admin_password=$_POST["admin_password"];

$sql1="update admin_details set admin_password='$admin_password' where admin_code=".$_SESSION["admin_code"];

$result=$conn->query($sql1);
header("location:adminhome.php");
//echo $sql1;
?>
