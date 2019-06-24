<?php include'header.php'; ?>
<section class="profile-image">
	<div class="container">
		<h2>Profile</h2>
		 <?php
		 include_once("../includes/crud.php");
 
$crud = new crud();
$query = "SELECT * FROM user_detail";
$res = $crud->getData($query);

            ?>
           <a href="editProfile.php" class="btn btn-primary">Edit Profile</a>
		<div class="profile-design">
			<div class="row">
			<div class="col-md-4">
			<h6>First Name</h6>
			</div>
			<div class="col-md-4">
			<p class="profile-date"><?php echo $res['firstname']; ?></p>
			</div>
			</div>
			<div class="row">
			<div class="col-md-4">
			<h6>Last Name</h6>
			</div>
			<div class="col-md-4">
			<p class="profile-date"><?php echo $res['lastname']; ?></p>
			</div>
			</div>
			<div class="row">
			<div class="col-md-4">
			<h6>Address</h6>
			</div>
			<div class="col-md-4">
			<p class="profile-date"><?php echo $res['address']; ?></p>
			</div>
			</div>
			<div class="row">
			<div class="col-md-4">
			<h6>Phone Number</h6>
			</div>
			<div class="col-md-4">
			<p class="profile-date"><?php echo $res['phonenumber']; ?></p>
			</div>
			</div>
			</div>
		</div>
	</div>
</section>
<?php include'footer.php'; ?>