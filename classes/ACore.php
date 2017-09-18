<?php
	abstract class ACore{

		protected $db;
		public function __consract(){
			$this ->db=mysql_connect(HOST,USER,PASSWORD);
			if (!$this->db){
				exit('Ошибка сооденения с базой данных:  '.mysql_error());
			}
			if (!mysql_select_db(DB,$this->db)){
				exit('нет такой DB');				
			}
			mysql_query("SET NAME 'UTF8'");
		}

		protected function get_header(){
			include 'header.php';
		}


		public function get_body(){
			$this->get_header();
		} 
	}
?>