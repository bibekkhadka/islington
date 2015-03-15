<?php
//connect to thedatabases
require_once('../../functions/db_functions.php');
require_once('../../functions/user_functions.php'); 
// order of execution is not an issue
$con = connect();
//load the form valuse
$uname = isset($_POST['uname']) ? mysqli_real_escape_string($con,$_POST['uname']) : '' ;
$user_id = $_POST['user_id'];//hidden user id
$fname = $_POST['fname'];
$email = $_POST['email'];
$user_type = $_POST['usertype'];
$status = $_POST['staus'];


if(isset($_POST['cmdSubmit'])){	
//see if the submit button was clicked

$flag = updateUser($fname, $email, $user_type, $status);
if($flag){
redirect('../index.php?page=user&action=view&success=The new user has been modified');
}else{
redirect('../index.php?page=user&action=view&error=The new user could not be modified');
}

}else{
//security breach
echo "It seems there isa  security breach, your action is reported";	
}

?>