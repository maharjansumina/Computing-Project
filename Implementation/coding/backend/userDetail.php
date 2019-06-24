<?php
require_once ('header.php'); 
require_once('../includes/crud.php');
$crud = new crud();
$query = "SELECT * FROM user_detail";
$result = $crud->getData($query);

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

    foreach ($result as $key => $res) {
    //while($res = mysqli_fetch_array($result)) {         
        echo "<tr>";
          echo "<td>".$res['firstname']."</td>";
            echo "<td>".$res['lastname']."</td>";
              echo "<td>".$res['address']."</td>";
                echo "<td>".$res['phonenumber']."</td>";
                echo "<td>".$res['email']."</td>";
                  echo "<td>".$res['username']."</td>";
                  echo "<td>".$res['password']."</td>";
          
        echo "<td><a href=\"../includes/deleteuser.php?id=$res[id]\" onClick=\"return confirm('Are you sure you want to delete?')\" class=\"btn btn-sm btn-danger\" >Delete</a></td>";        
    }
    ?>
          	</tbody>
          
          </table>
        </div>
      </div>
      </div>
    </section>
<?php include 'footer.php'; ?>