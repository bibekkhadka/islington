<?php
session_start();
if(!isset($_SESSION['permission']))
{

	header("location:index.php");
}

 ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>dashboard</title>
	<link href="css/bootstrap.min.css" rel="stylesheet">
	<link rel="stylesheet" href="css/mycss.css">
</head>
<body>
	<div class="container">
		<div class="col-md-12 header">
			<nav class="navbar navbar-default">
  				<div class="container-fluid">
   				 <div class="navbar-header">
     			
    </div>
  </div>
</nav>
		</div>
	</div>

	<div class="container">
		<div class="col-md-4 left-side">
			<p><a href="dashboard.php"><h1>Dashboard</h1></a></p>
			<p><a href="addpost.php"><h1>Library Books Manager</h1></a></p>
			<p><a href="#"><h1>Borrower Manager</h1></a></p>
			<p><a href="#"><h1>Search Terminal</h1></a></p>
		
		</div>
		<div class="col-md-8 right-side">
			<p><h2>Welcome to the Dashboard!</h2></p>
			<img src="image/pro.jpg" 
   			class="img-circle" height="200px" width="200px">

		</div>
	</div>

	

	
</body>
</html>