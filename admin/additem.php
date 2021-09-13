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
		<BR>
          
         <h3 style="color:#3366CC;">ADD NEW FOOD ITEM</h3>
		 <?php
		 if(isset($_GET["msg"]))
		 {
			echo '<div class="alert alert-success alert-dismissable">
			<a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
			<strong>New Item added!</strong>
			</div>';
		 }
		 ?>
			<FORM METHOD="POST" ACTION="addnewitem.php" enctype="multipart/form-data">
				<TABLE style="width:60%">
			<TR>
				<TD>Food Name</TD>
				<TD><INPUT TYPE="text" NAME="product_name" id="product_name" class="form-control" required></TD>
			</TR>
			<TR>
				<TD>Food Type</TD>
				<TD>
				<SELECT NAME="category_code" id="category_code" class="form-control" required>
					<OPTION VALUE="" SELECTED>Select Food type
					<?php
						$sql2="select * from category_details";
						$result2=$conn->query($sql2);
						if($result2->num_rows>0)
						{
							while($row2=$result2->fetch_assoc())
							{
								echo '<OPTION VALUE="'.$row2["category_code"].'">'.$row2["category_name"];
							}
						}	
					?>
					
				</SELECT>
				</TD>
			</TR>
			<TR>
				<TD>Type</TD>
				<td>
				<select name="product_desc">
					<option value="" selected>--none--
					<option value="Veg">Veg
					<option value="Non-Veg">Non-Veg
				</select>
				</td>
				<!-- <TD><textarea   NAME="product_desc" id="product_desc" class="form-control" required></textarea></TD> -->
			</TR>
			<TR>
				<TD>Food Cost</TD>
				<TD><INPUT TYPE="text" NAME="product_cost" id="product_cost" class="form-control" required></TD>
			</TR>
			<!-- <TR>
				<TD>Total Stock</TD>
				<TD><INPUT TYPE="number" NAME="stock_inhand" id="stock_inhand" class="form-control" required></TD>
			</TR> -->
			<TR>
				<TD>Food Image</TD>
				<TD><INPUT TYPE="file" NAME="product_image" accept="image/jpeg" id="product_image" class="form-control" required></TD>
			</TR>
			<TR>
				<TD colspan="2"><CENTER><br><INPUT TYPE="submit" class="btn btn-sm btn-success" VALUE="Add Item" ></CENTER></TD>
			</TR>
			</TABLE>
			</FORM>
        </div>
        <!-- /.col-lg-9 -->

      </div>
      <!-- /.row -->

    </div>
    <!-- /.container -->

     <?php include("footer.php");?>

    <!-- Bootstrap core JavaScript -->

  </body>

</html>
