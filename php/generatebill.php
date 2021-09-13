<?php
session_start();
if(!isset($_SESSION["customer_code"]))
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
		$sqlc="select * from customer_details where customer_code=".$_SESSION["customer_code"];
		$resultc=$conn->query($sqlc);
		while($rowc=$resultc->fetch_assoc())
		{
			$customer_name=$rowc["customer_name"];
			$customer_contact=$rowc["customer_contact"];
			$customer_shipaddress=$rowc["customer_shipaddress"];
		}

		$sql="select* from shop_item where session_code in(select session_code from shop_sessions where session_code in(select session_code from order_details where order_code=".$_GET["order_code"]."))";
		$result=$conn->query($sql);
		//echo $sql;
		?>
		<BR><BR><BR>
		<div id="HTMLtoPDF">
		
		<TABLE>
		<TR>
			<TD><B>Order Date:</B><?php echo $_GET["order_date"];?><br></TD>
		</TR>
		<TR>
			<TD><B>Customer Name:</B><?php echo $customer_name;?><br></TD>
		</TR>
		<TR>
			<TD><B>Customer Contact:</B><?php echo $customer_contact;?><br></TD>
		</TR>
		<TR>
			<TD><B>Ship Address:</B><?php echo $customer_shipaddress;?><br></TD>
		</TR>
		</TABLE>
		<br>
		<TABLE width="900px" border="1">
		<TR>
			<TD>Food Name</TD>
			<TD>Food</TD>
			<TD>Cost(Rs)</TD>
			<TD>Quantity</TD>
			<TD>Total Cost(Rs)</TD>
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
						<TD><img src="cakeimg/'.$row1["product_image"].'" style="width:100px;height:90px;padding:10px;"></TD>
						<TD>Rs.'.$row1["product_cost"].'</TD>
						<TD>'.$row["item_qty"].'</TD>
						<TD>'.$row1["product_cost"]*$row["item_qty"].'</TD>';
						$payable_amt=$payable_amt+($row1["product_cost"]*$row["item_qty"]);

				}
				echo "</tr>";
			}
		?>
		</TABLE>
		<TABLE width="900px">
		<tr>
		<td align="right"><B>Total Payable Amount Rs.</B></td>
		<td align="right">Rs.<?php echo $payable_amt;?></td>
		</tr>
		</TABLE>
		</div>
		<br>
		<TABLE width="900px">
		<tr>
		<td colspan="6" align="right"><a href
		"dldbill/orderbill/generatebill.php?order_code=<?php echo $_GET["order_code"];?>&order_date=<?php echo $_GET["order_date"];?>" class="btn btn-sm btn-success" target="_blank"></a></td>
		</tr>
		</TABLE>
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
