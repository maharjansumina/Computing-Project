<?php 
require_once('header.php');
require_once('../class/userforum.class.php');
$userforum = new userforum;

if(isset($_POST['ask']))
{
  $userforum = $userforum->save();
  if(is_integer($userforum))
  {
    $msg = 'Question Successful Ask';
  }
  else
  {
    $msg = 'Question Unsuccessful Ask';
  }
}
?>
 ?>
<section>
	<div class="container">
		<h1>User Forum</h1>
		<div class="wrapper">
			<form method="POST" class="form">
		    <?php if(isset($msg))
            echo $msg;
           ?>
				<div class="form-group">
				<div class="sizeForm">
				  <label for="a">Ask a Question:</label>
				  <textarea class="form-control" rows="5" name="question"></textarea>
					</div><br/>
				 <button class="btn btn-md btn-primary" type="submit" name="ask">Ask a Question</button> 
				</div>
			</form>
		</div>
	</div>
</section>
<?php include 'footer.php'; ?>