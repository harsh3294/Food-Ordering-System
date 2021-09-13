<?php
session_start();
if(!isset($_SESSION["admin_name"]))
{
	header("location:index.php");
}
?>
<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Shop Homepage</title>

  
    <?php include("resource.php");?>
  </head>

  <body>

    <!-- Navigation -->
    <?php include("nav.php");?>

    <!-- Page Content -->
    <div class="container">

      <div class="row">

        <div class="col-lg-3">

         <?php include("sidenav.php");?>

        </div>
        <!-- /.col-lg-3 -->

        <div class="col-lg-9">
		<BR>
		<INPUT TYPE="button" VALUE="Add New" ONCLICK="addnewfoodtype()" class="btn btn-success" style="float:right;">
		 <br>
		 <div id="newcaketypediv" style="display:none;">
			<TABLE style="width:60%">
			<TR>
				<TD>New Food Type</TD>
				<TD><INPUT TYPE="text" NAME="category_name" id="category_name" class="form-control" required></TD>
			</TR>
			<TR>
				<TD colspan="2"><CENTER><br><INPUT TYPE="button" class="btn btn-sm btn-success" VALUE="Add Category" ONCLICK="insertfoodtype()"></CENTER></TD>
			</TR>
			</TABLE>
		 </div>
          
         <CENTER><h3 style="color:#3366CC;">ALL FOOD TYPES</h3></CENTER>
		 
		<div id="allcaketypediv">
		 <TABLE class="table table-bordered">
		 <TR class="bg bg-primary" style="color:white;">
			<TD>Food Type</TD>
			<TD>Edit</TD>
			<TD>Delete</TD>
		 </TR>
		<?php
		include("conn.php");
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
		</table>
		</div>
		 
        </div>
        <!-- /.col-lg-9 -->

      </div>
      <!-- /.row -->

    </div>
    <!-- /.container -->

     <?php include("footer.php");?>

    

  </body>

</html>
