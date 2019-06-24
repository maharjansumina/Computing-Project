
<?php

include_once("Crud.php");
 
$crud = new Crud();
 
//getting id of the data from url
$id = $crud->escape_string($_GET['id']);
 
$result = $crud->delete($id, 'user_detail');
 
if ($result) {
      header("Location:../backend/userDetail.php");
}
?>