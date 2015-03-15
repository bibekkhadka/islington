<?php
//connect to the database
session_start();
require_once('../../../functions/db_functions.php');
require_once('../../../functions/user_functions.php');
//load the form values
$username = $_POST['username'];
$password = sha1($_POST['password']);

//call the validate function
$flag = validate($username, $password);
//redirect to the appropriate page
if($flag){
redirect('../index.php');	
}else{
redirect('../login.php');	
}

?>