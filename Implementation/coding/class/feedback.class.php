<?php

require_once('common.class.php');

class feedback extends Common
{
	public $id,$name,$description;
	

        public function save()
        {
                 
                   $this->name = $_POST['name'];
                   $this->description = $_POST['description'];
                    
                $sql = "insert into feedback_table (name, description) values ('$this->name','$this->description')"; 
                return $this->insert($sql);
        }


        public function retrieve()
        {
                $sql = "select * from feedback_table";
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