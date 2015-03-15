<?php 

include "../include/head.php";
include "../include/navigation.php";
include "dbcon.php";

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
                            <small>View all members</small>
                        </h1>
                        <ol class="breadcrumb">
                            <li>
                                <i class="fa fa-dashboard"></i>  <a href="index.php">Dashboard</a>
                            </li>
                            <li class="active">
                                <i class="fa fa-file"></i> Member List
                            </li>
                        </ol>
                    </div>
                </div>
                <!-- /.row -->

                <div class="row">
                    <div class="col-lg-12">
                   <table cellpadding="0" cellspacing="0" border="0" class="table  table-bordered" id="example">
                             
                                <thead>
                                    <tr>
                       
                                        <th>Name</th>                                 
                                        <th>Gender</th>
                                        <th>Address</th>
                                        <th>Contact</th>
                                        <th>Type</th>
                                        <th>Year level</th>
                                        <th>Status</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                 
                                  <?php  $user_query=mysql_query("select * from member")or die(mysql_error());
                                    while($row=mysql_fetch_array($user_query)){
                                    $id=$row['member_id'];  ?>
                                    <tr class="del<?php echo $id ?>">
                                    
                                                                  
                                    <td><?php echo $row['firstname']." ".$row['lastname']; ?></td>
                                    <td><?php echo $row['gender']; ?> </td> 
                                    <td><?php echo $row['address']; ?> </td>
                                    <td><?php echo $row['contact']; ?></td>
                                    <td><?php echo $row['type']; ?></td> 
                                    <td><?php echo $row['year_level']; ?></td> 
                                    <td><?php echo $row['status']; ?></td> 
                                    <?php include('toolttip_edit_delete.php'); ?>
                                    <td width="100">
                                        <a rel="tooltip"  title="Delete" id="<?php echo $id; ?>" href="#delete_student<?php echo $id; ?>" data-toggle="modal"    class="btn btn-danger"><i class="icon-trash icon-large"></i></a>
                                        <?php include('delete_student_modal.php'); ?>
                                        <a  rel="tooltip"  title="Edit" id="e<?php echo $id; ?>" href="edit_member.php<?php echo '?id='.$id; ?>" class="btn btn-success"><i class="icon-pencil icon-large"></i></a>
                                        
                                    </td>
                                    
                                    </tr>
                                    <?php  }  ?>
                           
                                </tbody>
                            </table>
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
