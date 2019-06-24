<?php
require_once('header.php')
?><?php
// including the database connection file
include_once("../includes/crud.php");
 
$crud = new crud();
 
//getting id from url
$id = $crud->escape_string($_GET['id']);
 
//selecting data associated with this particular id
$result = $crud->getData("SELECT * FROM addflight WHERE id=$id");
 
foreach ($result as $res) {

    $leaving_from = $res['leaving_from'];
    $going_to = $res['going_to'];
}
?>
<section class="class_page">
	<div class="container-fluid">
    <div class="row pt-5">
      <div class="col-md-4">
        <div class="class_form">
        <form class="form-signin " method="POST">
      <div class="thumbnail">
            <a href="addflight.php">Back</a>
     </div>
          <h2 class="form-signin-heading">Update Flight</h2>
          <label>Leaving From</label>
          <input type="text" name="leaving_from" class="form-control "value="<?php echo $leaving_from;?>" required>
          <div class="form-group">
          	<label>Going To</label>
           <input type="text" name="going_to" class="form-control "value="<?php echo $going_to;?>" required>
          </div>
         <input type="hidden" name="id" value=<?php echo $_GET['id'];?>>
         <input type="submit" name="update" value="Update Flight">
        </form>
        </div>
      </div>
    </div>
  </div>
  </div>
</section>

<?php
include_once("../includes/Validation.php");
$validation = new Validation();
if(isset($_POST['update']))
{    
    $id = $crud->escape_string($_POST['id']);
    
    $leaving_from = $crud->escape_string($_POST['leaving_from']);
     $going_to = $crud->escape_string($_POST['going_to']);
  
    $msg = $validation->check_empty($_POST, array('leaving_from', 'going_to'));
   
    
    // checking empty fields
    if($msg) {
        echo $msg;        
        //link to the previous page
        echo "<br/><a href='javascript:self.history.back();'>Go Back</a>";    
    } else {    
        //updating the table
        $result = $crud->execute("UPDATE addflight SET leaving_from='$leaving_from', going_to='$going_to' WHERE id=$id");
        
        //redirectig to the display page. In our case, it is index.php
       echo $msg='Successful';
    }
  }
?>
<?php include'footer.php'; ?>