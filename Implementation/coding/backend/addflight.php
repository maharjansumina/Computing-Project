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
$flight = new flight();

$res = $flight->retrieve();
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
                <th>GOing To</th>
                <th>Button</th>
                <th>Button</th>
              </tr>
           <?php
      foreach ($res as $k => $fn) { ?>
                        <tr>
                 <td> <?php echo $fn->leaving_from; ?></td>
                 <td> <?php echo $fn->going_to; ?></td>
                 <td>
                    <a class="btn btn-sm btn-info"  name="edit" href="updateflight.php?id='<?php echo $data['flight_id'];?>'">Edit</button></a> </td>
                  <td>
                    <a class="btn btn-sm btn-danger"  name="delete" class="delete" onclick="deleteme(<?php echo $data['event_id']; ?>)">Delete</a></td>
                </tr>
                <?php
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

