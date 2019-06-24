<?php 
require_once("header.php");
require_once('../class/booking.class.php');
$booking = new booking();

$res = $booking->retrieve();
?>
<section class="event_page">
 <div class="col-md-12">
        <div class="well">
          <div class="thumbnail">
            <a href="adminDashboard.php">Back</a>
          </div>
          <H3> Booking Detail</H3>
          <table class="table table-responsive table-striped table-bordered">
            <tbody>
              <tr>
                <th>Booking ID</th>
                <th>User Name</th>
                <th>Leaving From</th>
                <th>Going To</th>
                <th>Date</th>
              </tr>
              <?php
                foreach ($res as $k => $fn) { ?>
                        <tr>
                 <td> <?php echo $fn->id; ?></td>
                 <td> <?php echo $fn->user_name; ?></td>
                 <td> <?php echo $fn->leaving_from; ?></td>
                 <td> <?php echo $fn->going_to; ?></td>
                <td> <?php echo $fn->date; ?></td>
                <?php
                                          }
                                    ?>
            </tbody>

          </table>
        </div>
      </div>
</section>
 
<?php include 'footer.php'; ?>