<?php
include("../conn.php");
$category_name=$_POST["category_name"];
$sql1="insert into category_details(category_name)values('$category_name')";
$result=$conn->query($sql1);
?>
 <TABLE class="table table-bordered">
 <TR>
	<TD>Cake Type</TD>
	<TD>Edit</TD>
	<TD>Delete</TD>
 </TR>
 <?php
	$sql2="select * from category_details";
	$result2=$conn->query($sql2);
	if($result2->num_rows>0)
	{
		while($row2=$result2->fetch_assoc())
		{
			echo '<TR>
					<TD>'.$row2["category_name"].'</TD>
					<TD><A HREF="">Edit</A></TD>
					<TD><A HREF="">Delete</A></TD>
					 </TR>';
		}
	}	
	?>
</TABLE>