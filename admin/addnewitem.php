<?php
include("conn.php");
$product_name=$_POST["product_name"];
$category_code=$_POST["category_code"];
$product_desc=$_POST["product_desc"];
$product_cost=$_POST["product_cost"];
//$stock_inhand=$_POST["stock_inhand"];
$active_status="a";

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
$sql1="insert into product_details(product_name,category_code,product_desc,product_image,product_cost,active_status)values('$product_name',$category_code,'$product_desc','$product_image',$product_cost,'$active_status')";

$result=$conn->query($sql1);
header("location:additem.php?msg=added");
//echo $sql1;
?>
