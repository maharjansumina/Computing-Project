<?php 
require_once('header.php');
?>
<?php
session_start();
require_once('class/user.class.php');
$user = new User();

if (isset($_POST['login']))
{
  $user =$user->check_login();
      //user login
      if($_SESSION['user_id']>=2){//user login
          header('Location:frontend/userDashboard.php');
      }
      elseif($_SESSION['username']=="admin"){//admin login

          header('Location:backend/admindashboard.php');

      }else
      {
        header('location:login.php?msg=incorrected username or password');
      }

  }
?>
  <div class="wrapper">
    <form class="form-signin" method="POST">       
      <h2 class="form-signin-heading">Login</h2>
      <label>Username</label>
      <input type="text" class="form-control" name="username" placeholder="" required="" autofocus="" /><br/>
      <label>Password</label>
      <input type="password" class="form-control" name="password" placeholder="" required=""/>      
     <br/>

     <div class="register"><i class="fa fa-user" aria-hidden="true"></i> Not Registed? 
      <a href="signup.php">Register</a><br/>
      <br/>
      <input class="btn btn-lg btn-primary btn-block" type="submit" name="login"></button>   
    </form>
  </div>
<br/>
<?php include'footer.php'; ?>
