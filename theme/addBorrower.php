<?php 

include "../include/head.php";
include "../include/navigation.php";

 ?>
<!DOCTYPE html>
<html lang="en">



<body>

    <div id="wrapper">

        <!-- Navigation -->
      

        <div id="page-wrapper">

            <div class="container-fluid">

                <!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">
                            Library
                            <small>Add Member</small>
                        </h1>
                        <ol class="breadcrumb">
                            <li>
                                <i class="fa fa-dashboard"></i>  <a href="index.php">Dashboard</a>
                            </li>
                            <li class="active">
                                <i class="fa fa-file"></i> Add Member
                            </li>
                        </ol>
                    </div>
                </div>
                <!-- /.row -->
			
			<div class="row">
				<div class="col-lg-12">
					<form method="POST" action="member_save.php">
  <div class="form-group">
    <label for="fname">First Name</label>
    <input type="text" class="form-control" id="fname" name="fname" placeholder="Please enter first name here">
  </div>
    <div class="form-group">
    <label for="lname">Last Name</label>
    <input type="text" class="form-control" id="lname" name="lname" placeholder="Please enter last name here">
  </div>
  
    <div class="form-group">
    <label for="address">Address</label>
    <input type="text" class="form-control" id="address" name="address" placeholder="Please enter address here">
  </div>
  <div class="form-group">
    <label for="cont">Contact Number</label>
    <input type="number" class="form-control" id="cont" name="contact" placeholder="Please enter contact no. here">
  </div>
  <div class="form-group">
  <label for="sel1">Member Type:</label>
  <select class="form-control" name="type">
    <option>--Select Type--</option>
    <option>Student</option>
    <option>Teacher</option>
    </select>
</div>
<div class="form-group">
  <label for="sel2">Gender:</label>
  <select class="form-control" name="gender">
    <option>--Select Gender--</option>
    <option>Male</option>
    <option>Female</option>
    <option>Other</option>
  </select>
</div>

<div class="form-group">
  <label for="year">Year Level:</label>
    <select name="year_level">
        <option></option>
        <option>First Year</option>
        <option>Second Year</option>
        <option>Third Year</option>
        <option>Faculty</option>

    </select>
</div>
  <button type="submit" class="btn btn-default" name="submit">Add Member</button>
  <button type="submit" class="btn btn-default">Clear</button>
</form>
				</div>
			</div>

            </div>
            <!-- /.container-fluid -->

        </div>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->

    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

</body>

</html>
