<?php
require_once ('header.php'); 
require_once('../class/user.class.php');
$user = new user();

$res = $user->retrieve();
?>
<section class="image">
      <div class="container">
      	<div class="well">
    	 <div class="thumbnail" >
            <a href="adminDashboard.php">Back</a>
            </div>
       	 <H3> User Detail</H3>

         
          <table class="table table-responsive table-striped table-bordered">
          	<tbody>
          		<tr>
               <th>User ID</th>
               <th>First Name</th>
               <th>Last Name</th>
               <th>Address</th>
               <th>Phone Number</th>
               <th>Email</th>
               <th>Username</th>
               <th>Password</th>
               <th>Button</th>
          </tr>
           <?php
			foreach ($res as $k => $fn) { ?>
                        <tr>
                 <td> <?php echo $fn->user_id; ?></td>
                 <td> <?php echo $fn->firstname; ?></td>
                 <td> <?php echo $fn->lastname; ?></td>
                 <td> <?php echo $fn->address; ?></td>
                <td> <?php echo $fn->phonenumber; ?></td>
                <td> <?php echo $fn->email; ?></td>
                <td> <?php echo $fn->username; ?></td>
               <td> <?php echo $fn->password; ?></td>
           <td>
           <a href="deleteuser.php user_id=<?php echo $r->user_id; ?>" class="btn btn-danger" name="userdeletebutton" onclick = "return confirm ('Are you sure to delete?')"> <i class="fa fa-trash"> Delete </a>
            </td>
                        </tr>
						<?php
							}
						?>
          	</tbody>
          
          </table>
        </div>
      </div>
      </div>
    </section>
<?php include 'footer.php'; ?>