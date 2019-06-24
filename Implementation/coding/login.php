<?php 
require_once('header.php');
?>
<?php
require_once('class/user.class.php');
$user = new User();
session_start();
if (isset($_POST['submit'])) { 
    extract($_POST);   
      $login = $user->check_login($emailusername, $password);
      if ($login) {
          // Registration Success
         header("location:frontend/userDashboard.php");
      } else {
          // Registration Failed
          echo 'Wrong username or password';
      }
  }
?>
  <div class="wrapper">
    <form action="" class="form-signin" method="POST">       
      <h2 class="form-signin-heading">Login</h2>
      <label>Username</label>
      <input type="text" class="form-control" name="emailusername" placeholder="" required="" autofocus="" /><br/>
      <label>Password</label>
      <input type="password" class="form-control" name="password" placeholder="" required=""/>      
     <br/>

     <div class="register"><i class="fa fa-user" aria-hidden="true"></i> Not Registed? 
      <a href="signup.php">Register</a><br/>
      <br/>
      <div class="form-group">
                <div class="col-md-12">
                   <button type="submit" class="btn btn-primary  py-2 px-4 rounded-0" name="submit" value="Login" onclick="return(submitlogin());">Login</button>
                </div>
              </div> 
    </form>
  </div>
<br/>
<?php include'footer.php'; ?>
