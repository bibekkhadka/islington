<?php
//connect to the database 
require_once('../../../functions/db_functions.php');
require_once('../../../functions/menu_functions.php');
// order of execution is not an issue
$con = connect();// db call
//Load the URl parameter of userid
$userid = isset($_GET['pageID'])? (int) $_GET['pageID']:''; 
//find the single record matching the iserid:call the fucntion getAllUswer($userid)
$pages = getAllMenu($pageID);

echo "<pre>";
print_r($pages);
echo "</pre>";
exit;


?>





<form name="form1" method="post" action="process/process_add_page.php">
  <fieldset>
    <legend>Edit <b><?php  ?>New Page</b></legend>
    <p>
      <strong>
      <label>Page Title Name: </label>
      &nbsp;
      <label for="title"></label>
      <input type="text" name="title" id="title">
      </strong></p>
    <p><strong>Page Description:</strong></p>
    <p><strong>
      <label for="description"></label>
      </strong>
      <label for="page_description"></label>
      <textarea name="page_description" id="page_description" cols="45" rows="5"></textarea>
    </p>
    <p><strong>Page Order: 
      <label for="page_order"></label>
      <input type="text" name="page_order" id="page_order">
    </strong></p>
    <p><strong>Page Keyword:</strong></p>
    <p><strong>
  <label for="keyword"></label>
      </strong>
      <label for="keyword"></label>
      <textarea name="keyword" id="keyword" cols="45" rows="5"></textarea>
      <br>
    </p>
    <p><strong>Meta Description:</strong></p>
    <p><strong>
  <label for="meta_description"></label>
      </strong>
      <label for="meta_description"></label>
      <textarea name="meta_description" id="meta_description" cols="45" rows="5"></textarea>
    </p>
    <p><strong>Tages:</strong></p>
    <p><strong>
  <label for="tag"></label>
      </strong>
      <label for="tags"></label>
      <textarea name="tags" id="tags" cols="45" rows="5"></textarea>
    </p>
    <p><strong>Status:
      <label for="status"></label>
    </strong>
      <label for="status"></label>
      <select name="status" id="status">
        <option value="1" selected="selected">Active</option>
        <option value="0">Inactive</option>
      </select>
    </p>
    <p>	
      <input type="submit" name="cmdSubmit" id="cmdSubmit" value="Add Page">
      <input type="reset" name="cmdCancel" id="cmdCancel" value="Clear">
    </p>
  </fieldset>
</form>
