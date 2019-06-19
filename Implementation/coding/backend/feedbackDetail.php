<?php
require_once('header.php');
require_once('../class/feedback.class.php');
$feedback = new feedback;
$res = $feedback->retrieve();
 ?>
<section>
	      <div class="col-md-3">
        <div class="well">
          <div class="thumbnail">
            <a href="adminDashboard.php">Back</a>
          </div>
          <H3> View FeedBack</H3>
          <table class="table table-responsive table-striped table-bordered">
            <tbody>
              <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Description</th>
              </tr>
      <?php
      foreach ($res as $k => $fn) { ?>
                        <tr>
                 <td> <?php echo $fn->feedback_id; ?></td>
                 <td> <?php echo $fn->name; ?></td>
                 <td> <?php echo $fn->description; ?></td>
                </tr>
      <?php } ?>
            </tbody>
          </table>
        </div>
</div>
</section>
<?php include 'footer.php'; ?>
