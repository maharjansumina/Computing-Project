<?php 
require_once('header.php');
require_once('../class/booking.class.php');
$booking = new booking;

if(isset($_POST['bookingsubmit']))
{
  $booking = $booking->save();
  if(is_integer($booking))
  {
    $msg = 'Booking Successful';
  }
  else
  {
    $msg = 'Booking Unsuccessful';
  }
}
?>
<section class="book-form">
  <div class="container">
    <h2>User Booking</h2>
    <div>
      <form method="POST">
          <?php if(isset($msg))
            echo $msg;
           ?>
      	<div class="book-design">
      	<label>Name</label>
        <input type="text" class="form-control" name="user_name" placeholder="User Name" autofocus="" /><br/>
        
        <label>Leaving From</label>
        <div class="dropdown">
          <select class="form-control" name="leaving_from">
			      <option value="Kathmandu">Kathmandu</option>
			      <option value="Pokhara">Pokhara</option>
			      <option value="Chitwan">Chitwan</option>
            <option value="Lumbini">Lumbini</option>
  			</select>
        </div><br/>
        <label>Going To</label>
        <div class="dropdown">
          <select class="form-control" name="going_to">
            <option value="Pokhara">Pokhara</option>
            <option value="Lumbini">Lumbini</option>
            <option value="Chitwan">Chitwan</option>
            <option value="Kathmandu">Kathmandu</option>
        </select>
        </div><br/>
        <label>Date</label>
        <input type="date" name="date" class="form-control" placeholder="" required=""><br/>
         <input type="submit" name="bookingsubmit" id="submitbutton" class="btn" value="Book Flight">
          </div>
        </div>
      </form>
    </div>
  </div>
</section>

<?php include'footer.php'; ?>

