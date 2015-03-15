<?php
$page=  isset($_GET['page']) ? $_GET['page'] : '';
$action = isset($_GET['action']) ? $_GET['action']: '';
//for menu
switch($page){
	
	case 'menu':
	if($action == 'add'){
	$page_to_load = "includes/add_page.php";	
	}
	if($action == 'view'){
	$page_to_load = "includes/view_page.php";	
	}
	if($action == 'edit'){
	$page_to_load = "includes/edit_page.php";	
	}
	if($action == 'delete'){
	$page_to_load = "includes/delete_page.php";	
	}	
	break;
	
	case 'user':
	if($action == 'add'){
	$page_to_load = "includes/add_user.php";	
	}else 	if($action == 'view'){
	$page_to_load = "includes/view_user.php";	
	}else 	if($action == 'delete'){
	$page_to_load = "includes/delete_user.php";	
	}
	else 	if($action == 'edit'){
	$page_to_load = "includes/edit_user.php";	
	}
	break;
	
	default:
	$page_to_load = "includes/welcome.php";
	
	break;
}//switch ends


//for pages



?>