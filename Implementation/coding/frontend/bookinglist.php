<?php
require_once ('header.php'); 
require_once('../includes/crud.php');
$crud = new crud();
$query = "SELECT * FROM addflight";
$result = $crud->getData($query);

?>
<section class="image">
      <div class="container">
      	<div class="well">
    	 <div class="thumbnail" >
            <a href="userDashboard.php">Back</a>
            </div>
       	 <H3> Flight Detail</H3>

         
          <table class="table table-responsive table-striped table-bordered">
          	<tbody>
          		<tr>
               <th>Leaving From</th>
               <th>Going TO</th>
          </tr>
 
    <?php 

    foreach ($result as $key => $res) {
    //while($res = mysqli_fetch_array($result)) {         
        echo "<tr>";
          echo "<td>".$res['leaving_from']."</td>";
            echo "<td>".$res['going_to']."</td>";

          
        echo "<td><a href=\"bookingflight.php?id=$res[id]\" class=\"btn btn-sm btn-info\" >Book Now</a></td>";        
    }
    ?>
          	</tbody>
          
          </table>
        </div>
      </div>
      </div>
    </section>
<?php include 'footer.php'; ?>