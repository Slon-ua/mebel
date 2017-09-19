<?php
	class main extends ACore {
		 public function get_content(){
		 	$query = "SELECT text_menu FROM menu";
	        $result = mysql_query($query);
		          
	        if (!$result){
	            exit (mysql_error());
	        }
	        $row = mysql_fetch_array($result, MYSQL_ASSOC);

	        print_r($row['text_menu']);

		echo'
			<div class="clr"></div>
	      </div>
	    </div>';



		}
	}
?>