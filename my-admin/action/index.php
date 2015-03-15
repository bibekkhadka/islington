<?php 
session_start();
include ("../../class/class.php");
include ("../../class/db.php");



if(isset($_POST['login']))
{
$username = $_POST['un'];
$password = $_POST['pwsss'];
$enc_pw = md5($password);

$data = $obj->num_count("select * from table_login where username = '$username' and password = '$enc_pw' ");

if($data==1)
{

	$_SESSION['permission'] = "ok";
	header("location:../../theme/index.php");
}

else
{

header("location:../index.php?msg=err");
}
}



if(isset($_POST['add-post']))
{

	$title = $_POST['title'];

	$desc = $_POST['desc'];
	$data = $obj->insertData("insert into tbl_news values (NULL,'$title', '$desc', '')");
	header("location:../addpost.php");
}

if($_GET['action']=='delete' && isset($_GET['id']))
{
  $id=$_GET['id'];
	$data = $obj->deleteData("delete  from tbl_news where id='$id'");
	header("location:../post.php");
}


if ($_GET['action']=='update' && isset($_POST['update-post']))
{
	$id=$_POST['id'];
	$title = $_POST['title'];
	$cat = $_POST['category'];
	//$desc = $_POST['description'];
	$data = $obj->updateData("update tbl_news set title='$title', category='$cat' where id='$id'");

	if(($data)>0){
		header("location:../post.php");
	}
	else{

		header("location:../edit.php?id=$id");
	}
}

 ?>
