<?php
//connect to thedatabases

require_once('../../../functions/db_functions.php'); // order of execution is not an issue
require_once('../../../functions/user_functions.php');
$con = connect();
//load the form valuse
$uname = isset($_POST['uname']) ? mysqli_real_escape_string($con,$_POST['uname']) : '' ;
$password = sha1($_POST['password']);
$fname = $_POST['fname'];
$email =$_POST['email'];
$user_type = $_POST['user_type'];
$status = $_POST['staus'];
if(isset($_POST['cmdSubmit'])){
	//see if the submit button was clicked

$flag = addUser($uname, $password, $fname, $email, $user_type, $status);
if($flag){
redirect('../index.php?page=user&action=view&success=The new user has been added in the system');
}else{
	redirect('../index.php?page=user&action=view&error=The new user could not be  added in the system');
}

}else{
//security breach
echo "It seems there isa  security breach, your action is reported";	
}

?>