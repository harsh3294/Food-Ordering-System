<nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
  <div class="container">
	<!--<a class="navbar-brand" href="#"><IMG SRC="img/hQ04wg7.png" class="img img-responsive" style="height:40px;width:240px;"></a>-->
	<a class="navbar-brand" href="#">H&T Foods</a>
	<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
	  <span class="navbar-toggler-icon"></span>
	</button>
	<div class="collapse navbar-collapse" id="navbarResponsive">
	  <ul class="navbar-nav ml-auto">
		<li class="nav-item active">
		  <a class="nav-link" href="index.php">Home
			<span class="sr-only">(current)</span>
		  </a>
		</li>
		<li class="dropdown nav-item">
			<a href="#" class="dropdown-toggle js-activated nav-link" data-hover="dropdown" data-toggle="dropdown" data-target="#"><i class="glyphicon glyphicon-user"></i>&nbsp;All Food</a>
			<ul class="dropdown-menu">
			<?php
				include("admin/conn.php");
				$sql2="select * from category_details";
				$result2=$conn->query($sql2);
				if($result2->num_rows>0)
				{
					while($row2=$result2->fetch_assoc())
					{
						
						echo '<li><a href="allitems.php?category_code='.$row2["category_code"].'">&nbsp;'.$row2["category_name"].'</a></li>';
					}
				}	
				?>
				
			</ul>
		</li>

		<li class="nav-item">
		 <a href="mybasket.php" class="nav-link"><span class="glyphicon glyphicon-shopping-cart"></span>My Basket</a>
		</li>
		<?php
		if(isset($_SESSION["customer_code"]))
		{
			echo '<li class="nav-item">
		 <a href="myorders.php" class="nav-link"><span class="glyphicon glyphicon-shopping-cart"></span>My orders</a>
		</li>
		<li class="nav-item">
		 <a href="#" class="nav-link"><span class="glyphicon glyphicon-user"></span>welcome '.$_SESSION["customer_name"].'</a>
		</li>
		<li class="nav-item">
		 <a href="logout.php" class="nav-link"><span class="glyphicon glyphicon-login"></span>Logout</a>
		</li>
		<li class="dropdown nav-item">
			<a href="#" class="dropdown-toggle js-activated nav-link" data-hover="dropdown" data-toggle="dropdown" data-target="#"><i class="glyphicon glyphicon-menu-down"></i>&nbsp;Setting</a>
			<ul class="dropdown-menu">
				<li><a href="editprofile.php">&nbsp;Edit Pofile</a></li>
			</ul>
		</li>
		';
		}
		else
		{
			echo '<li class="dropdown nav-item">
			<a href="#" class="dropdown-toggle js-activated nav-link" data-hover="dropdown" data-toggle="dropdown" data-target="#"><i class="glyphicon glyphicon-user"></i>&nbsp;customer</a>
			<ul class="dropdown-menu">
				<li><a href="regcustomer.php">&nbsp;Register</a></li>
				<li><a href="customerlogin.php">&nbsp;Login</a></li>
			</ul>
		</li>
		';
		}
		?>
		
		<li class="nav-item">
		  <a class="nav-link" href="feedback.php">Feedback</a>
		</li>
		<li class="nav-item">
		  <a class="nav-link" href="contact1.php">Contact</a>
		</li>
		<li class="nav-item">
		<a href="#" class="nav-link fa fa-facebook"></a>
		</li>
		<li class="nav-item">
		<a href="#" class="nav-link fa fa-twitter"></a>
		</li>
		<li class="nav-item">
		<a href="#" class="nav-link fa fa-google-plus"></a>
		</li>
	  </ul>
	</div>
  </div>
</nav>