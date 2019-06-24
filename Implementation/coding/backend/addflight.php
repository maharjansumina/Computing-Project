<?php
require_once('header.php');
require_once('../class/flight.class.php');
$flight = new flight;

if(isset($_POST['addflightsubmit']))
{
  $flight = $flight->save();
  if(is_integer($flight))
  {
    $msg = 'FLight Successfully Added';
  }
  else
  {
    $msg = 'Unsuccessful';
  }
}
?>

<section class="class_page">
  <div class="container-fluid">
    <div class="row pt-5">
      <div class="col-md-4">
        <div class="class_form">
        <form class="form-signin " method="POST">
           <?php if(isset($msg))
            echo $msg;
           ?>
          <h2 class="form-signin-heading">ADD FLIGHT</h2>
          <label>Leaving From</label>
          <input type="text" class="form-control" name="leaving_from" placeholder="" required="" autofocus="" /><br/>
           <label>Going To</label>
          <input type="text" class="form-control" name="going_to" placeholder="" required="" autofocus="" /><br/>
                  <br>
              <input type="submit" name="addflightsubmit" id="submitbutton" class="btn" value="Add FLight">
         </form>
          </div>
		  </div>

<?php
include_once("../includes/crud.php");
 
$crud = new crud();

$query = "SELECT * FROM addflight";
$result = $crud->getData($query);
?>
      <div class="col-md-8">
        <div class="well">
          <div class="thumbnail">
            <a href="adminDashboard.php">Back</a>
          </div>
          <H3> Flight Detail</H3>
          <table class="table table-responsive table-striped table-bordered">
            <tbody>
              <tr>
                <th>Leaving From</th>
                <th>Going To</th>
                <th>Button</th>
              </tr>
           <?php
      foreach ($result as $key => $res) {
                   
        echo "<tr>";

        echo "<td>".$res['leaving_from']."</td>";
          echo "<td>".$res['going_to']."</td>";

          echo "<td><a href=\"updateflight.php?id=$res[id]\"class=\"btn btn-sm btn-info\">Edit Flight</a> | <a href=\"deleteflight.php?id=$res[id]\" onClick=\"return confirm('Are you sure you want to delete?')\" class= \"btn btn-sm btn-danger\" >Delete Flight</a></td>";
              
              }
              ?>
            </tbody>
          
          </table>
        </div>
      </div>
      </div>
    </div>
  </section>

 
 <?php
include('footer.php');
?>

