<?php
///database connectivity
require_once('../../functions/db_functions.php');
require_once('../../functions/menu_functions.php');
//fetch the URL parameter : pageid
$pageID = isset($_GET['pageid']) ? (int) $_GET['pageid'] : '';

//call the deleteUsers function
$flag = deleteMenu($pageID);

//locate to appropriate page
if($flag){
redirect('index.php?page=menu&action=view&success=The menu has been deleted');	
}else{
redirect('index.php?page=menu&action=view&error=The menu could not be deleted');
}
?>