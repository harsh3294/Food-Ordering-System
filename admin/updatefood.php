<?php
include("conn.php");
$product_code=$_POST["product_code"];
$product_name=$_POST["product_name"];
$category_code=$_POST["category_code"];
$product_desc=$_POST["product_desc"];
$product_cost=$_POST["product_cost"];
$stock_inhand=$_POST["stock_inhand"];
$active_status=$_POST["active_status"];
$old_image=$_POST["old_image"];
$valid_exts = array('jpeg', 'jpg', 'png', 'gif');
$max_file_size = 10 * 1024 * 1024; #10Mb

if (! $_FILES['product_image']['error'] && $_FILES['product_image']['size'] < $max_file_size) 
{
	$ext = strtolower(pathinfo($_FILES['product_image']['name'], PATHINFO_EXTENSION));
	if (in_array($ext, $valid_exts)) 
	{
		$imagename=uniqid();
		$path = '../cakeimg/' . $imagename . '.' . $ext;
		$size = getimagesize($_FILES['product_image']['tmp_name']);
		$data = file_get_contents($_FILES['product_image']['tmp_name']);
		$vImg = imagecreatefromstring($data);
		imagejpeg($vImg, $path);
		imagedestroy($vImg);				
	} 
	else 
	{
		echo 'unknown problem!';
	} 
} 
else 
{
	echo 'file is too small or large';
}
$product_image=$imagename . '.' . $ext;
$sql1="update product_details set product_name='$product_name',product_desc='$product_desc',stock_inhand=$stock_inhand,product_image='$product_image',product_cost=$product_cost,active_status='$active_status' where product_code=$product_code";
unlink("../cakeimg/".$old_image);
$result=$conn->query($sql1);
header("location:allcakes.php?category_code=".$category_code);
//echo $sql1;
?>
