<?php
require_once('header.php');
require_once('../class/feedback.class.php');
$feedback = new feedback;

if(isset($_POST['feedbacksubmit']))
{
  $feedback = $feedback->save();
  if(is_integer($feedback))
  {
    $msg = 'Feedback Successfully Added';
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
          <h2 class="form-signin-heading">Add Feedback</h2>
          <label>Name</label>
          <input type="text" class="form-control" name="name" placeholder="" required="" autofocus="" /><br/>
          <div class="form-group">
            <label>Description</label>
            <textarea class="form-control" rows="5" name="description" placeholder=""></textarea>
          </div>
              
              <input type="submit" name="feedbacksubmit" id="submitbutton" class="btn" value="Add Feedback"> 

              </form>
          </div>
		  </div>
      </div>
 
   </div>

</section>

 <?php
include('footer.php');
?>

