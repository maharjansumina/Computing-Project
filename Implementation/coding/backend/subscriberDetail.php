<?php
require_once('header.php');
require_once('../class/subscribe.class.php');
$subscribe = new subscribe;
$res = $subscribe->retrieve();
 ?>
<section>
	      <div class="col-md-3">
        <div class="well">
          <div class="thumbnail">
            <a href="adminDashboard.php">Back</a>
          </div>
          <H3> View Subscriber</H3>
          <table class="table table-responsive table-striped table-bordered">
            <tbody>
              <tr>
                <th>ID</th>
                <th>Email</th>
              </tr>
      <?php
      foreach ($res as $k => $fn) { ?>
                        <tr>
                 <td> <?php echo $fn->id; ?></td>
                 <td> <?php echo $fn->email; ?></td>
                </tr>
      <?php } ?>
            </tbody>
          </table>
        </div>
</div>
</section>
<?php include 'footer.php'; ?>
