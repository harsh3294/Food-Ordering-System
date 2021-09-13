<?php
session_start();
if(!isset($_SESSION["session_code"]))
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
		<?php
		include("admin/conn.php");
		$sql="select* from shop_item where session_code=".$_SESSION["session_code"];
		$result=$conn->query($sql);
		?><BR><BR><BR>
		<FORM METHOD="POST" ACTION="ordernow.php">
		<TABLE class="table table-bordered">
		<TR class="bg-primary" style="color:white;">
			<TD>Food Name</TD>
			<TD>Food</TD>
			<TD>Cost(Rs)</TD>
			<TD>Select Quantity</TD>
			<TD>Total Cost(Rs)</TD>
			<TD>Action</TD>
		</TR>
		<?php
			$payable_amt=0;
			$x=0;
			while($row=$result->fetch_assoc())
			{
				$x=$x+1;
				echo "<tr>";
				$sql1="select * from product_details where product_code=".$row["product_code"];
				$result1=$conn->query($sql1);
				while($row1=$result1->fetch_assoc())
				{
					echo '<TD>'.$row1["product_name"].'</TD>
						<TD><img src="cakeimg/'.$row1["product_image"].'" width="100" height="100"></TD>
						<TD><INPUT TYPE="hidden" id="product_cost'.$x.'" NAME="product_cost" value="'.$row1["product_cost"].'">Rs.'.$row1["product_cost"].'</TD>
						<TD><INPUT TYPE="number" NAME="item_qty" id="item_qty'.$x.'" value="'.$row["item_qty"].'" class="form-control" onchange="updateqty('.$row["item_code"].',this.value,'.$x.')"></TD>
						<TD><INPUT TYPE="text" NAME="total_amt" id="total_amt'.$x.'" value="'.$row1["product_cost"]*$row["item_qty"].'" class="form-control"></TD>
						<TD><A HREF="removeshopitem.php?item_code='.$row["item_code"].'"><span class="glyphicon glyphicon-trash"></span>Remove</A></TD>';
						$payable_amt=$payable_amt+($row1["product_cost"]*$row["item_qty"]);

				}
				echo "</tr>";
			}
		?>
		<tr>
		<td colspan="2" align="right"><B>Total Payable Amount Rs.</B></td>
		<td colspan="4" align="right">
		<INPUT TYPE="text" NAME="payable_amt" id="payable_amt" class="form-control" value="<?php echo $payable_amt;?>"></td>
		</tr>
		<tr>
		<td colspan="6" align="right"><INPUT TYPE="submit" value="order now" class="btn btn-sm btn-success"></td>
		</tr>
		</TABLE>
		</FORM>
        </div>
        <!-- /.col-lg-9 -->

      </div>
      <!-- /.row -->

    </div>
    <!-- /.container -->

    <!-- Footer -->
	<BR><BR>
    <?php include("footer.php");?>

   
    <script src="js/jquery.min.js"></script>

  </body>

</html>
