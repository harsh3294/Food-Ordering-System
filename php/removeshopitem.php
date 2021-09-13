<?php
include("admin/conn.php");
$sql="delete from shop_item where item_code=".$_GET["item_code"];
$result=$conn->query($sql);
header("location:mybasket.php");
?>