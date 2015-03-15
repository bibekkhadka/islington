<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>login</title>
	<link rel="stylesheet" href="css/mycss.css">
	<link href="css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

<?php 
if(isset($_GET['msg']))
{

  if($_GET['msg']=='err')
  {

    echo "invalid login";
  }
}
?>

	<h1 align="center">Islington Library Management System</h1>
	<div class="wrapper col-md-12 col-md-offset-5">
	<form class="form-horizontal col-md-4 form-group" method="post" action="action/index.php">
  <div class="form-group">
    <label for="inputEmail3" class="col-sm-2 control-label">Username</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="inputEmail3" placeholder="Email" name="un">
    </div>
  </div>
  <div class="form-group">
    <label for="inputPassword3" class="col-sm-2 control-label">Password</label>
    <div class="col-sm-10">
      <input type="password" class="form-control" id="inputPassword3" placeholder="Password" name="pwsss">
    </div>
  </div>
  <div class="form-group">
    <div class="col-sm-offset-2 col-sm-10">
      <div class="checkbox">
        <label>
          <input type="checkbox"> Remember me
        </label>
      </div>
    </div>
  </div>
  <div class="form-group">
  	<div class="col-sm-offset-2 col-sm-10">
  		<label>
  			<a href="#">Lost your password?</a>
  		</label>
  	</div>
  </div>
  <div class="form-group">
    <div class="col-sm-offset-2 col-sm-10">
      <button type="submit" class="btn btn-default" name="login">Sign in</button>
    </div>
  </div>
</form>
</div>

</body>
</html>