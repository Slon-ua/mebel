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

		protected function get_left_bar(){
			$query = "SELECT id_category, name_category FROM category";
			$result = mysql_query($query);

			echo $query.'<br>&& '.$result ;
			if (!$result){
				exit ("@@@@@".mysql_error());
			}
			$row = array();


			echo '<div class="sidebar">
      <!--/search -->
      <div class="search"></div>
      <!--/search -->

        <div class="gadget">
          <h2>Меню</h2>
          <div class="clr"></div>
           <ul class="sb_menu">';

           for ($i=0; $i<mysql_num_rows($result); $i++){
           		$row=mysql_fetch_array($result, MYSql_assoc);
           		printf();
           }
              /*  <li><a href="#">Фурнитура</a></li>
                <li><a href="#">Материалы</a></li>
                <li><a href="calculator.html">Калькулятор цены кухни<br/><img src="images/132.png"  alt="" title="Калькулятор" /></a>
                </li>*/
         echo ' </ul>
        </div>';
       
		}

		public function get_body(){
			$this->get_header();
			$this->get_left_bar();

		} 
	}
?>