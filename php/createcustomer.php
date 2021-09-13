<?php
include("admin/conn.php");
$customer_name=$_POST["customer_name"];
$customer_email=$_POST["customer_email"];
$customer_contact=$_POST["customer_contact"];
$customer_shipaddress=$_POST["customer_shipaddress"];
$customer_address=$_POST["customer_address"];
$customer_location=$_POST["customer_location"];
$customer_password=$_POST["customer_password"];
$sql="insert into customer_details(customer_name,customer_email,customer_contact,customer_shipaddress,customer_address,customer_location,customer_password)values('$customer_name','$customer_email','$customer_contact','$customer_shipaddress','$customer_address','$customer_location','$customer_password')";
//echo $sql;
$result=$conn->query($sql);
header("location:customerlogin.php");
?>