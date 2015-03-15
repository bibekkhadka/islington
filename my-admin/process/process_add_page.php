<?php
//call the db and menu functions
require_once('../../../functions/db_functions.php');
require_once('../../../functions/menu_functions.php');

$con=connect();

//load the form values
$pageTitle=$_POST['title'];
$pageDescp=$_POST['page_description'];
$pageOrder=$_POST['page_order'];
$pageKeyword=$_POST['keyword'];
$metaDescp=$_POST['meta_description'];
$tags=$_POST['tags'];
$status=$_POST['status'];

//see if the submit button was clicked
$flag=addMenu($pageTitle,$pageDescp,$pageOrder,$pageKeyword,$metaDescp,$tags,$status);
if($flag){
redirect('../index.php?page=menu&action=view&success=The new page has been added in the system');	
}
else{
redirect('../index.php?page=menu&action=view&error=The new page could not be  added in the system');	
}


?>