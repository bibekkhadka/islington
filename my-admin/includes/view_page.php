<?php
//connect to the databases
require_once('../../functions/db_functions.php');
require_once('../../functions/menu_functions.php');
//call the getAllMenu() function
$pages = getAllmenu();


/*echo '<pre>';
print_r($pages);
echo '</pre>';*/
?>

<table class="table table-striped table-bordered bootstrap-datatable datatable">
						  <thead>
							  <tr>
								  <th>Page Title</th>
								  <th>Page Order</th>
                                  <th>Page Keyword</th>								 
								  <th>Status</th>
								  
							  </tr>
						  </thead>   
						  <tbody>
                          <?php
						  //see if the $pages has some conatins 
						  if(sizeof($pages) > 0){
							  //loop through the records
							  foreach($pages as $key=>$value){
						  ?>
							<tr>
								<td><?php echo $value['pageTitle'] ;?></td>								
								<td><?php echo $value['pageOrder']; ?></td>
                                <td><?php echo $value['pageKeyword']; ?></td>
                               
								<td class="center">
									<span class="label label-success">
									<?php if ($value['status']==1){
										 echo "Active";
										 } 
										 else{
											 echo "Inactive";
											 };
								   ?></span>
								</td>
								<td class="center">
									<a class="btn btn-success" href="#">
										<i class="icon-zoom-in icon-white"></i>  
										View                                            
									</a>
									<a class="btn btn-info" href="index.php?page=menu&action=edit&pageid=<?php echo $value['pageID']; ?>">
										<i class="icon-edit icon-white"></i>  
										Edit                                            
									</a>
									<a class="btn btn-danger" href="index.php?page=menu&action=delete&pageid=<?php echo $value['pageID']; ?>" onclick="return confirm('Are you sure you want to delete this page?');">
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
