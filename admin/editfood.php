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
		 <?php
			$product_code=$_GET["product_code"];
			$sql3="select * from product_details where product_code=$product_code";
			$result3=$conn->query($sql3);
			if($result3->num_rows>0)
			{
				while($row3=$result3->fetch_assoc())
				{
					$product_name=$row3["product_name"];
					$category_code=$row3["category_code"];
					$product_desc=$row3["product_desc"];
					$product_cost=$row3["product_cost"];
					$stock_inhand=$row3["stock_inhand"];
					$product_image=$row3["product_image"];
					$active_status=$row3["active_status"];
				}
			}	
			$sql4="select * from category_details where category_code=$category_code";
			$result4=$conn->query($sql4);
			if($result4->num_rows>0)
			{
				while($row4=$result4->fetch_assoc())
				{
					$category_name=$row4["category_name"];
				}
			}	
		?>
          
         <h3 style="color:#3366CC;">UPDATE Food DETAILS</h3>
		 <?php
		 if(isset($_GET["msg"]))
		 {
			echo '<div class="alert alert-success alert-dismissable">
			<a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
			<strong>New Cake added!</strong>
			</div>';
		 }
		 ?>
			<FORM METHOD="POST" ACTION="updatecake.php" enctype="multipart/form-data">
			<INPUT TYPE="hidden" NAME="product_code" value="<?php echo $product_code; ?>">
			<TABLE style="width:60%">
			<TR>
				<TD>Cake Name</TD>
				<TD><INPUT TYPE="text" NAME="product_name" id="product_name" value="<?php echo $product_name;?>" class="form-control" required></TD>
			</TR>
			<TR>
				<TD>Cake Type</TD>
				<TD>
				<SELECT NAME="category_code" id="category_code" class="form-control" required>
					<OPTION value="<?php echo $category_code; ?>" SELECTED><?php echo $category_name;?>
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
				<TD>Cake Description</TD>
				<TD><textarea   NAME="product_desc" id="product_desc" class="form-control" required><?php echo $product_desc; ?></textarea></TD>
			</TR>
			<TR>
				<TD>Cake Cost</TD>
				<TD><INPUT TYPE="text" NAME="product_cost" id="product_cost" value="<?php echo $product_cost;?>" class="form-control" required></TD>
			</TR>
			<TR>
				<TD>Total Stock</TD>
				<TD><INPUT TYPE="number" NAME="stock_inhand" id="stock_inhand" value="<?php echo $stock_inhand;?>" class="form-control" required></TD>
			</TR>
			<TR>
				<TD>Cake Image</TD>
				<TD>
				<CENTER><IMG style="padding:5px;" SRC="../cakeimg/<?php echo $product_image; ?>" WIDTH="170" HEIGHT="200" BORDER="0" ALT=""></CENTER>
				<INPUT TYPE="file" NAME="product_image" accept="image/jpeg" id="product_image" class="form-control" required></TD>
			</TR>
			<TR>
				<TD>Active Status</TD>
				<TD><INPUT TYPE="text" NAME="active_status" id="active_status" value="<?php echo $active_status;?>" class="form-control" required></TD>
			</TR>
			<TR>
				<TD colspan="2"><CENTER><br><INPUT TYPE="submit" class="btn btn-sm btn-success" VALUE="Save Changes" ></CENTER></TD>
			</TR>
			</TABLE>
			<INPUT TYPE="hidden" NAME="old_image" value="<?php echo $product_image;?>">
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
