
<?php 
session_start();
include ("../class/class.php");
include ("../class/db.php");

 ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>post</title>
	<link href="css/bootstrap.min.css" rel="stylesheet">
	<link rel="stylesheet" href="css/mycss.css">
</head>
<body>
	<div class="container">
		<div class="col-md-12 header">
			<p><h1>Welcome Admin</h1></p>
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
			<p><h2>List of Post</h2></p>
<table class="table-striped" border="1">
				<thead>
				<tr>
					<th>Title</th>
					<th>Category</th>
					<!-- <th>Date</th> -->
					<th>Action</th>
				</tr>
				</thead>
				<tbody>

				<?php

				$query="select * from tbl_news";
				$dd =  $obj->loopselect($query);// 

					 foreach($dd as $data)
					{

						?>
							<tr>
						<td><?php echo $data['title']; ?></td>
						<td><?php echo $data['category']; ?></td>
					<!-- 	<td><?php echo $data['desc']; ?></td> -->
						<td>
							<a href="action/index.php?action=delete&id=<?php echo $data['id']; ?>" onclick="return confirm('are y?')">Delete</a>
							<?php echo "/"; ?>
							<a href="edit.php?action=update&id=<?php echo $data['id']; ?>">Update</a>
						</td>
					</tr>

<?php					
					}
				 ?>

			
					
					
				</tbody>
			</table>
			<div class="col-md-10">
			<a href="addpost.php"><h3>Add new Books</h3></a>
		</div>
		</div>
	</div>

	

	

	
</body>
</html>