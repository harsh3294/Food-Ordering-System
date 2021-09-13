<h2 class="my-4" style="color:#3366FF;">FOODS MENU</h2>
<?php
include("conn.php");
$sql2="select * from category_details";
$result2=$conn->query($sql2);
if($result2->num_rows>0)
{
	while($row2=$result2->fetch_assoc())
	{
		echo '<a href="allitems.php?category_code='.$row2["category_code"].'" class="list-group-item">'.$row2["category_name"].'</a>';
	}
}	
?>