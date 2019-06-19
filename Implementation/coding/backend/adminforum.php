<?php 
require_once('header.php');
require_once('../class/userforum.class.php');

$userforum = new userforum();
$res = $userforum->retrieve();

if(isset($_POST['answer']))
{
  $userforum = $userforum->save();
  if(is_integer($userforum))
  {
    $msg = 'User Register';

  }
  else
  {
    $msg = 'User Not Register';
  }
}

?>
<section>
	<div class="container">
		<div class="wrapper">
				<h3>User Question</h3>
				<div class="user-question">
					<?php foreach ($res as $k=>$fn) { ?>
					<h5><?php echo $fn->question; ?></h5>
					<form method="POST" class="form">
			            <?php if(isset($msg))
			            echo $msg;
			           ?>						
						<div class="form-group">
						<div class="sizeForm">
						<input type="text" name="q_id" value="<?php echo $fn->q_id ?>" hidden /><?php } ?>
						  <textarea class="form-control" rows="2" name="answers"></textarea>
							</div><br/>
						 <button class="btn btn-md btn-primary" type="submit" name="answer">Answer</button> 
				</div>
			</form>
				</div>
					</div>
	</div>
</section>

<?php
$userforum = new userforum();

$res = $userforum->retrieve();
?>
      <div class="col-md-8">
        <div class="well">
          <div class="thumbnail">
            <a href="adminDashboard.php">Back</a>
          </div>
          <H3>Your Question & Answer</H3>
          <table class="table table-responsive table-striped table-bordered">
            <tbody>
              <tr>
              	<th>Question ID</th>
                <th>Question</th>
                <th>Answer</th>
              </tr>
           <?php
      foreach ($res as $k => $fn) { ?>
                        <tr>
                 <td> <?php echo $fn->q_id; ?></td>
                 <td> <?php echo $fn->question; ?></td>
                 <td> <?php echo $fn->answer; ?></td>
                <?php
                 }
                ?>
            </tbody>
          
          </table>
          </div>
      </div>

<?php include 'footer.php'; ?>


