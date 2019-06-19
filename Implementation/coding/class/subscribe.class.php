<?php

require_once('common.class.php');

class subscribe extends Common
{
	public $id,$email;
	

        public function save()
        {
                 
                   $this->email = $_POST['email'];
                                      
                $sql = "insert into subscribe_table (email) values ('$this->email')"; 
                return $this->insert($sql);
        }


        public function retrieve()
        {
                $sql = "select * from subscribe_table";
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