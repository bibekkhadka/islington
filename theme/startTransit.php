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
                            <small>Book Transit Manager</small>
                        </h1>
                        <ol class="breadcrumb">
                            <li>
                                <i class="fa fa-dashboard"></i>  <a href="index.php">Dashboard</a>
                            </li>
                            <li class="active">
                                <i class="fa fa-file"></i> Book Transit Manager
                            </li>
                        </ol>
                    </div>
                </div>
                <!-- /.row -->
			<div class="row">
				<div class="col-lg-12">
                <div class="col-lg-4">
                    <div class="panel panel-primary">
                            <div class="panel-heading">
                                <h3 class="panel-title">Borrow</h3>
                            </div>
                            <div class="panel-body">
                                
                            </div>
                             <a href="borrow.php">
                                <div class="panel-footer">
                                    <span class="pull-left">Proceed</span>
                                    <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                    <div class="clearfix"></div>
                                </div>
                            </a>
                        </div>
                </div>

                 <div class="col-lg-4">
                     <div class="panel panel-primary">
                            <div class="panel-heading">
                                <h3 class="panel-title">View Returned Books</h3>
                            </div>
                            <div class="panel-body">
                                
                            </div>
                             <a href="searchBorrower.php">
                                <div class="panel-footer">
                                    <span class="pull-left">Proceed</span>
                                    <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                    <div class="clearfix"></div>
                                </div>
                            </a>
                        </div>
                </div>

                 <div class="col-lg-4">
                    <div class="panel panel-primary">
                            <div class="panel-heading">
                                <h3 class="panel-title">View Borrowed Books</h3>
                            </div>
                            <div class="panel-body">
                                
                            </div>
                             <a href="memberList.php">
                                <div class="panel-footer">
                                    <span class="pull-left">Proceed</span>
                                    <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                    <div class="clearfix"></div>
                                </div>
                            </a>
                        </div>
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
