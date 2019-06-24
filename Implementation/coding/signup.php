<?php
require_once('header.php');
require_once('class/user.class.php');
$user = new User;

if (isset($_POST['submit'])){
        extract($_POST);
        $register = $user->reg_user($firstname, $lastname, $address, $phonenumber, $email, $username, $password);
        if ($register) {
            // Registration Success
            echo "<div style='text-align:center'>Registration successful <a href='login.php'>Click here</a> to login</div>";
        } else {
            // Registration Failed
            echo "<div style='text-align:center'>Registration failed. Email or Username already exits please try again.</div>";
        }
    }
?>

  <div class="wrapper">
    <form class="form-signin" method="POST"> 
          <?php if(isset($msg))
            echo $msg;
           ?>
         <h2 class="form-signin-heading">Register</h2>
      <label>First Name</label>
      <input type="text" class="form-control" name="firstname" placeholder="" required="" autofocus="" /><br/>
      <label>Last Name</label>
      <input type="text" class="form-control" name="lastname" placeholder="" required=""/><br/>
      <label>Address</label>
      <input type="text" class="form-control" name="address" placeholder="" required=""/><br/>
      <label>Phone Number</label>
      <input type="number" class="form-control" name="phonenumber" placeholder="" required=""/><br/>
      <label>Email</label>
      <input type="text" class="form-control" name="email" placeholder="" required="" autofocus="" /><br/>
      <label>Username</label>
      <input type="text" class="form-control" name="username" placeholder="" required="" autofocus="" /><br/>
      <label>Password</label>
      <input type="password" class="form-control" name="password" placeholder="" required=""/>      
     <br/>
      <div class="newuser"><i class="fa fa-user" aria-hidden="true"></i> Already a Member? 
      <a href="login.php">Login Here</a>
      </div>
      <input type="submit" name="submit" id="submitbutton" class="btn" value="Register">
      </div>

      </form>
</div>
<?php
include('footer.php');
?>

