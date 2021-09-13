<?php
include("../admin/conn.php");
$item_code=$_POST["item_code"];
$item_qty=$_POST["item_qty"];
$item_cost=$_POST["item_cost"];

$sql="update shop_item set item_qty=$item_qty, item_cost=$item_cost where item_code=$item_code";
$result=$conn->query($sql);
?>