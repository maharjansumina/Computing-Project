<?php

require_once('common.class.php');

class booking extends Common
{
	public $id,$user_name,$leaving_from,$going_to,$date;
	

        public function save()
        {
                 $this->user_name = $_POST['user_name'];
                  $this->leaving_from = $_POST['leaving_from'];
                   $this->going_to = $_POST['going_to'];
                   $this->date = $_POST['date'];
                    
                $sql = "insert into bookingflight (user_name, leaving_from, going_to,date) values ('$this->user_name','$this->leaving_from','$this->going_to','$this->date')";
                return $this->insert($sql);
        }


        public function retrieve()
        {
                $sql = "select * from bookingflight";
                return $this->select($sql);
        }


        public function destroy()
        {
                
        }


        public function edit()
        {
                
        }

       
}




?>