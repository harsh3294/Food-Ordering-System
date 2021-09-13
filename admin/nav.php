<nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
  <div class="container">
	<!--<a class="navbar-brand" href="adminhome.php"><IMG src="../img/hQ04wg7.png" class="img img-responsive" style="height:40px;width:240px;"></a>-->
	<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
	  <span class="navbar-toggler-icon"></span>
	</button>
	<div class="collapse navbar-collapse" id="navbarResponsive">
	  <ul class="navbar-nav ml-auto">
		<li class="nav-item active">
		  <a class="nav-link" href="adminhome.php">Home
			<span class="sr-only">(current)</span>
		  </a>
		</li>
		<li class="dropdown nav-item">
			<a href="#" class="dropdown-toggle js-activated nav-link" data-hover="dropdown" data-toggle="dropdown" data-target="#"><i class="glyphicon glyphicon-menu-down"></i>&nbsp;Add</a>
			<ul class="dropdown-menu">
				<li><a href="foodtype.php">&nbsp;Food Type</a></li>
				<li><a href="additem.php">&nbsp;Food Item</a></li>
			</ul>
		</li>
		<li class="nav-item">
		  <a class="nav-link" href="adminhome.php">All orders</a>
		</li>
		<!--<li class="nav-item">
		  <a class="nav-link" href="#">Welcome <?php echo $_SESSION["admin_name"];?></a>
		</li>-->
		
		<li class="dropdown nav-item">
			<a href="#" class="dropdown-toggle js-activated nav-link" data-hover="dropdown" data-toggle="dropdown" data-target="#"><i class="glyphicon glyphicon-menu-down"></i>&nbsp;Setting</a>
			<ul class="dropdown-menu">
				<li><a href="AdminChangepwd.php">&nbsp;Change Password</a></li>
			</ul>
			<li class="nav-item">
		  <a class="nav-link" href="feedback.php">Comment</a>
		</li>
		</li>
		<li class="nav-item">
		  <a class="nav-link" href="logout.php">Logout</a>
		</li>
		
	  </ul>
	</div>
  </div>
</nav>