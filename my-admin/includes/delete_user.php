<?php
///database connectivity
require_once('../../functions/db_functions.php');
require_once('../../functions/user_functions.php');
//fetch the URL parameter : userid
$userid = isset($_GET['userid']) ? (int) $_GET['userid'] : '';

//call the deleteUsers function
$flag = deleteUser($userid);

//locate to appropriate page
if($flag){
redirect('index.php?page=user&action=view&success=The user has been deleted');	
}else{
	redirect('index.php?page=user&action=view&error=The user could not be deleted');
}
?>