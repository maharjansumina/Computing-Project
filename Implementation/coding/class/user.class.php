<?php

require_once('common.class.php');

class User extends Common
{
	public $user_id,$firstname,$lastname,$address,$phonenumber,$email,$username,$password;
	


        public function save()
        {
                 $this->firstname = $_POST['firstname'];
                  $this->lastname = $_POST['lastname'];
                   $this->address = $_POST['address'];
                   $this->phonenumber = $_POST['phonenumber'];
                   $this->email = $_POST['email'];
                   $this->username = $_POST['username'];
                    $this->password = $_POST['password'];

                $sql = "insert into user_detail (firstname,lastname,address,phonenumber,email,username,password) values ('$this->firstname','$this->lastname','$this->address','$this->phonenumber','$this->email','$this->username','$this->password')"; 
                return $this->insert($sql);
        }


        public function retrieve()
        {
                $sql = "select * from user_detail";
                return $this->select($sql);
        }
       public function destroy()
{
    $sql = "delete from news where user_id = $this->user_id";
        return $this->delete($sql);
}


        public function edit()
        {
         $sql = "update user_detail set firstname = '$this->firstname', lastname = '$this->lastname',address = '$this->address',phonenumber = '$this->phonenumber','$this->email',username = '$this->username',password = '$this->password' where user_id = '$this->user_id' ";
        return $this->update($sql);       
        }

        public function getuserByID()
{
    $sql= "select * from user_detail where user_id = '$this->user_id'";
        return $this->select($sql);

}


       public function check_login()
       {
        $this->username = $_POST['username'];
        $this->password = $_POST['password'];
        $sql = "select * from user_detail where username='$this->username' and password='$this->password";
        $data=mysqli_fetch_array($sql);
      $_SESSION['user_id']=$data['user_id'];
      $_SESSION['username']=$data['username'];
        return $this->select($sql);
       }
   }

?>