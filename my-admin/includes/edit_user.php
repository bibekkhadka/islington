<?php
//connect to the database 
require_once('../../../functions/db_functions.php');
require_once('../../../functions/user_functions.php');
// order of execution is not an issue
$con = connect();// db call
//Load the URl parameter of userid
$userid = isset($_GET['userid'])? (int) $_GET['userid']:''; 
//find the single record matching the iserid:call the fucntion getAllUswer($userid)
$users = getAllUsers($userid);

echo "<pre>";
print_r($users);
echo "</pre>";
exit;


?>

<form id="form1" name="form1" method="post" action="process/process_add_user.php">
  <fieldset>
    <legend>Add New User</legend>
    <table width="100%" border="1" cellspacing="0" cellpadding="0">
      <tr>
        <th width="31%" align="left" valign="top" scope="row">Username</th>
        <td width="69%" align="left" valign="top"><label for="uname"></label>
        <input type="text" name="uname" id="uname" /></td>
      </tr>
      <tr>
        <th align="left" valign="top" scope="row">Password</th>
        <td align="left" valign="top"><label for="password"></label>
        <input type="password" name="password" id="password" /></td>
      </tr>
       <tr>
        <th align="left" valign="top" scope="row">Full Name</th>
        <td align="left" valign="top"><label for="fname"></label>
        <input type="text" name="fname" id="fname" /></td>
      </tr>
      <tr>
        <th align="left" valign="top" scope="row">Email</th>
        <td align="left" valign="top"><label for="email"></label>
        <input type="text" name="email" id="email" /></td>
      </tr>
     
      
      <tr>
        <th align="left" valign="top" scope="row">User Type</th>
        <td align="left" valign="top"><label for="user_type"></label>
          <select name="user_type" id="user_type">
            <option value="2">Administrator</option>
            <option value="1">Moderator</option>
        </select></td>
      </tr>
       <tr>
        <th align="left" valign="top" scope="row">Status</th>
        <td align="left" valign="top"><label for="staus"></label>
          <select name="staus" id="staus">
            <option value="1" selected="selected">Activate</option>
            <option value="0">Inactivate</option>
         </select></td>
      </tr>
      <tr align="left" valign="top">
        <th colspan="2" align="center" scope="row"><input type="submit" name="cmdSubmit" id="cmdSubmit" value="Add User" />
        <input type="reset" name="cmdReset" id="cmdReset" value="Clear" /></th>
      </tr>
    </table>
    <p>&nbsp;</p>
  </fieldset>
</form>

