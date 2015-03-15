<?php
//connect to the databases
require_once('../../functions/db_functions.php');
require_once('../../functions/user_functions.php');
//call the getAllUsers() function
$users = getAllUsers();

/*echo '<pre>';

print_r($users);
echo '</pre>';*/
?>
<table class="table table-striped table-bordered bootstrap-datatable datatable">
						  <thead>
							  <tr>
								  <th>Username</th>
								  <th>Email</th>
								 
								  <th>Status</th>
								  <th>Actions</th>
							  </tr>
						  </thead>   
						  <tbody>
                          <?php
						  //see if the $users has some data
						  if(sizeof($users) > 0){
							  //loop through the records
							  foreach($users as $key=>$value){
						  ?>
							<tr>
								<td><?php echo $value['username'] ;?></td>
								
								<td class="center"><?php echo $value['email']; ?></td>
								<td class="center">
									<span class="label label-success">Active</span>
								</td>
								<td class="center">
									<a class="btn btn-success" href="#">
										<i class="icon-zoom-in icon-white"></i>  
										View                                            
									</a>
									<a class="btn btn-info" href="index.php?page=user&action=edit&userid=<?php echo $value['user_id']; ?>">
										<i class="icon-edit icon-white"></i>  
										Edit                                            
									</a>
									<a class="btn btn-danger" href="index.php?page=user&action=delete&userid=<?php echo $value['user_id']; ?>" onclick="return confirm('Are you sure you want to delete this user?');">
										<i class="icon-trash icon-white"></i> 
										Delete
									</a>
								</td>
							</tr>
                            
                            <?php
							  }//loop ends
						  }//if ends
							?>
							
						  </tbody>
					  </table>