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
                            <small>Member Search Panel</small>
                        </h1>
                        <ol class="breadcrumb">
                            <li>
                                <i class="fa fa-dashboard"></i>  <a href="index.php">Dashboard</a>
                            </li>
                            <li class="active">
                                <i class="fa fa-file"></i> Search Member
                            </li>
                        </ol>
                    </div>
                </div>
                <!-- /.row -->
			<div class="row">
				<div class="col-lg-12">
					<form class="form-inline">
  <div class="form-group">
    <label for="memID">Member ID</label>
    <input type="text" class="form-control" id="memID" placeholder="eg: BIK100">
  </div>
  <div class="form-group">
    <label for="memName">Member Name</label>
    <input type="text" class="form-control" id="memName" placeholder="eg: Bibek Khadka">
  </div>
   <div class="form-group">
  <label for="sel1">Member Category:</label>
  <select class="form-control" id="sel1">
    <option>--Select Category--</option>
    <option>2</option>
    <option>3</option>
    <option>4</option>
  </select>
</div>
  <br>
  <br>
  <button type="submit" class="btn btn-default">Search</button>
  <button type="submit" class="btn btn-default">Cancel</button>
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
