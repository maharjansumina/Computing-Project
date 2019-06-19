<?php

require_once('common.class.php');

class userforum extends Common
{
	public $q_id,$question,$q_by;
	

        public function save()
        {
                 $this->question = $_POST['question'];
                    
                $sql = "insert into question_table (question) values ('$this->question')";
                return $this->insert($sql);
        }


        public function retrieve()
        {
                $sql = "select * from question_table";
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