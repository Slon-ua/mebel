<?php
	abstract class ACore{

		protected $db;

		public function __construct(){
			// $b= new PDO;
			// $b->PDO();

			//parent::PDO();
			include("classes/PDO.php");
			echo '$$##$#$#$';
			/*$this ->db=mysql_connect(HOST,USER,PASSWORD);
			if (!$this->db){
				exit('Ошибка сооденения с базой данных:  '.mysql_error());
			}
			if (!mysql_select_db(DB,$this->db)){
				exit('нет такой DB');				
			}
			mysql_query("SET NAME 'UTF8'");*/
		}


		protected function get_header(){

		    $query = "SELECT id_menu, name_menu FROM menu";
	        $result = mysql_query($query);
		          
	        if (!$result){
	            exit (mysql_error());
	        }
	        $row = array();

		    echo'
		    <!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
		    <html xmlns="http://www.w3.org/1999/xhtml">
		    <head>
		    <title>КухниСмак/Контакты</title>
		    <meta http-equiv="Content-Type" content="text/html; charset=UTF8" />
		    <link href="style.css" rel="stylesheet" type="text/css" />

		    <script type="text/javascript" src="highslide/highslide-with-html.js"></script>
		    <link rel="stylesheet" type="text/css" href="highslide/highslidehtml.css" />
		    <script type="text/javascript">
		    	hs.graphicsDir = "highslide/graphics/";
		    	hs.outlineType = "rounded-white";
		    	hs.wrapperClassName = "draggable-header";
		    </script>
		    </head>
		    <body>
		    <div class="main">
		      <div class="header">
		        <div class="header_resize">
		          <div class="logo">
		            <h1><a href="index.html">Кухни<span> Смак</span></a><small> смачно на смак</small></h1>
		          </div>

		          <div class="menu_nav">
		           <ul>';
		    for ($i=0; $i<5; $i++){
		        $row=mysql_fetch_array($result, MYSQL_ASSOC);
		      // printf($row['id_menu'].'<br>'.$_GET['id_menu'].'<br>');

		        if($row['id_menu']==1){
		        	if ($_GET['id_menu']==$row['id_menu'] || !$_GET['id_menu']){
		        		print ('<li class="active">');
		        	}
		        	else{ 
		        		print ('<li>');
		        	}
		        	printf('<a href="?option=main&id_menu=%s"><span>%s</span></a></li>',$row['id_menu'],$row['name_menu'] );
		        }

		        else{
		        	if ($_GET['id_menu']==$row['id_menu']){
		        		print ('<li class="active">');
		        	}
		        	else{ 
		        		print ('<li>');
		        	}
		        	printf('<a href="?option=main&id_menu=%s"><span>%s</span></a></li>',$row['id_menu'],$row['name_menu'] );
		        } /* <li><a href="index.html"><span>Главная</span></a></li>
		            <li><a href="support.html"><span>Услуги</span></a></li>
		            <li><a href="galery.html"><span>Галерея</span></a></li>
		            <li><a href="blog.html"><span>Статьи</span></a></li>
		            <li class="active"><a href="contact.html"><span>Контакты</span></a></li>*/
		    }
		          echo '</ul>        
		            <div class="clr"></div>
		          </div>
		          <div class="clr"></div>
		          <div class="header_img"><img src="images/main_img.png" alt="image" width="400" height="234" />
		          <h2>Лучшее предложение</h2>
		          <p><strong>More beautiful templates </strong><br />
		            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam ac magna a turpis ornare aliquam id hendrerit nisl. Pellentesque adipiscing blandit mollis. Curabitur varius est et sem rhoncus et pretium massa molestie. </p>
		          <div class="clr"></div>
		          </div>
		          
		        </div>
		      </div>
		      <div class="clr"></div>';
		}


		protected function get_left_bar(){
			$query = "SELECT id_category, name_category FROM category";
			$result = mysql_query($query);

			
			if (!$result){
				exit (mysql_error());
			}
			$row = array();


			echo '
			<div class="content">
			    <div class="content_resize">
			      <div class="sidebar">

				    <!--/search -->
				    <div class="search"></div>
				    <!--/search -->

			        <div class="gadget">
			          <h2>Меню</h2>
			          <div class="clr"></div>
			          <ul class="sb_menu">';

			        	for ($i=0; $i<mysql_num_rows($result); $i++){
			        		$row=mysql_fetch_array($result, MYSQL_ASSOC);
			        		printf('<li><a href="&option=category&id_category=%s"><span>%s</span></a></li>',$row['id_category'],$row['name_category'] );
			        	}  
			       
			        echo'  </ul>
			        </div>
			       
			        <div class="gadget">
			          <h2>Мудрые слова</h2>
			          <div class="clr"></div>
			          <p>   <img src="images/test_1.gif" alt="image" width="19" height="20" /> <em>We can let circumstances rule us, or we can take charge and rule our lives from within </em>.<img src="images/test_2.gif" alt="image" width="19" height="20" /></p>
			          <p style="float:right;"><strong>Earl Nightingale</strong></p>
			        </div>
			      </div>';
			     

			

		}

		protected function get_footer(){
			echo'
			<div class="fbg">
			    <div class="fbg_resize">
			      <div class="col c1">
			        <h2><span>Наша</span> галерея</h2>
			<div class="highslide-gallery">
			<a href="images/gal11.jpg" class="highslide" onclick="return hs.expand(this)">
			    <img src="images/gal1.jpg"  alt="ДСП" title="Кликни" /></a>
			    <div class="highslide-caption">Описание картинки.</div>

			<a href="images/gal12.jpg" class="highslide" onclick="return hs.expand(this)">
			    <img src="images/gal2.jpg"  alt="ДСП" title="Кликни" /></a>
			    <div class="highslide-caption">Описание картинки.</div>

			<a href="images/gal13.jpg" class="highslide" onclick="return hs.expand(this)">
			    <img src="images/gal3.jpg"  alt="ДСП" title="Кликни" /></a>
			    <div class="highslide-caption">Описание картинки.</div>

			<a href="images/gal14.jpg" class="highslide" onclick="return hs.expand(this)">
			    <img src="images/gal4.jpg"  alt="ДСП" title="Кликни" /></a>
			    <div class="highslide-caption">Описание картинки.</div>

			<a href="images/gal15.jpg" class="highslide" onclick="return hs.expand(this)">
			    <img src="images/gal5.jpg"  alt="ДСП" title="Кликни" /></a>
			    <div class="highslide-caption">Описание картинки.</div>

			<a href="images/gal16.jpg" class="highslide" onclick="return hs.expand(this)">
			    <img src="images/gal6.jpg"  alt="ДСП" title="Кликни" /></a>
			    <div class="highslide-caption">Описание картинки.</div>

			</div>

			      </div>
			      <div class="col c2">
			        <h2><span>С нами уютно</span></h2>
			        <p>Lorem ipsum dolor<br />
			          Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Donec libero. Suspendisse bibendum. Cras id urna. <a href="#">Morbi tincidunt, orci ac convallis aliquam</a>, lectus turpis varius lorem, eu posuere nunc justo tempus leo. Donec mattis, purus nec placerat bibendum, dui pede condimentum odio, ac blandit ante orci ut diam.</p>
			      </div>
			      <div class="col c3">
			        <h2><span>Связаться</span> с нами</h2>
			        <p>Возможно здесь Вы напишете, что с вами легко связаться и удобно добраться.</p>
			        <p class="contact_info"> <span>Адрес:</span> 1458 Москва, Россия<br />
			          <span>Телефон:</span> +123-1234-5678<br />
			          <span>FAX:</span> +458-4578<br />
			          <span>Другие:</span> +301 - 0125 - 01258<br />
			          <span>E-mail:</span> <a href="#">mail@mail.ru</a> </p>
			      </div>
			      <div class="clr"></div>
			    </div>
			    <div class="footer">
			      <p class="lr">&copy; Copyright <a href="#"> КухниСмак</a>.</p>
			      <p class="lf"><a href="http://www.xn----8sb0bs2e.net" 
			target="blank"><img src="http://www.xn----8sb0bs2e.net/files/yasam.jpg" BORDER=0 alt="Мебельный портал" /></a> </p>
			      <div class="clr"></div>
			    </div>
			  </div>
			</div>
			</body>
			</html>
			';
		}
	


		public function get_body(){
			$this->get_header();
			$this->get_left_bar();
			$this->get_content();
			$this->get_footer();
		} 

		abstract function get_content(); 
		//abstract function PDO();
	}
?>