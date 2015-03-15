<?php 

include ('../class/class.php');
include ('../class/db.php');

if (isset($_POST['submit'])){

	$fname = $_POST['fname'];
	$lname = $_POST['lname'];
	$address = $_POST['address'];
	$contact = $_POST['contact'];
	$type = $_POST['type'];
	$gender = $_POST['gender'];
	$year_level = $_POST['year_level'];

	$data = $obj->insertData("insert into member(firstname, lastname, gender, address, contact, type, year_level) 
		values('$fname', '$lname', '$address', '$contact', '$type', '$gender', '$year_level')");
	
	header('location:addBorrower.php');


}





 ?>