
<?php

include_once("../includes/Crud.php");
 
$crud = new Crud();
 
//getting id of the data from url
$id = $crud->escape_string($_GET['id']);
 
$result = $crud->delete($id, 'addflight');
 
if ($result) {
      header("Location:../backend/addflight.php");
}
?>