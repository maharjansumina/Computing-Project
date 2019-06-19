<?php

require_once('common.class.php');

class flight extends Common
{
	public $flight_id,$leaving_from,$going_to;
	

        public function save()
        {
                 
                   $this->leaving_from = $_POST['leaving_from'];
                   $this->going_to = $_POST['going_to'];
                    
                $sql = "insert into addflight (leaving_from, going_to) values ('$this->leaving_from','$this->going_to')"; 
                return $this->insert($sql);
        }


        public function retrieve()
        {
                $sql = "select * from addflight";
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