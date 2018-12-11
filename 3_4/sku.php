<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <link href="styles/site.css" rel="stylesheet">
    <!-- подключен медиа файл 16.02.2018 -->
    <link href="styles/media.css" rel="stylesheet">
    <title>Онлайн магазин</title>
</head>
<body>
<header>
	<div class="container">
		<div class="header">
		</div>
		<div class="menu">
			<span><a href="index.php">Главная</a></span>
			<span><a href="catalogue.php">Каталог</a></span>
			<span><a href="contacts.html">Контакты</a></span>
		</div>		 
	</div>
</header>
	<div class="sku">
		<?php 
			$id = $_GET['id'];
			// echo $id; 
			$config3 = require 'config/db.php';        		   
        	$conDB3 = mysqli_connect($config3['host'], $config3['user'], $config3['password'], $config3['db']); 
        	$query3 = "SELECT * FROM directory WHERE id=$id";
    		$resDB3 = mysqli_query($conDB3, $query3);
    		$data3 = mysqli_fetch_all($resDB3, MYSQLI_ASSOC);
    			if (count($data3) > 0) {				
        			foreach ($data3 as $row) {
            			$fileOriginal1 = $row['path'] . $row['file_name1'];  
            			$title = $row['title'];                			
            			$descr = $row['description'];               		
            			echo '<div class="skus"><img class="Image" src="'.$fileOriginal1.'" alt="book"  title="'.$title.'"/></div>';
            			echo '<div><span>"'.$descr.'"</span></div>';       			
            		}
            	}
            mysqli_close($conDB3);  
		?>
		<!--все прриведено в соответствии с макетом 15.02.2018 
		<div class="skus"><img class="Image" src="images/book.jpg" alt="book"  title="Книга Г.Уэльса Человек-невидимка""/></div>
		<div><span>Научно-фантастическое произведение «Человек-невидимка», написанное английским писателем Гербертом Джорджем Уэллсом, рассказывает об экспериментах человека над своим телом. Английский учёный-медик Гриффин изобрёл механизм, который делал живое существо невидимым. Но он не хотел представить миру своё открытие. Но материальные проблемы вынудили учёного применить свое открытие на себе. Гриффин стал невидимым и решил начать новую жизнь. Для начала он разрушил механизм и спрятал свои записи. Затем стал невидимым и поджог дом, в котором жил. Вначале учёный торжествовал, чувствуя своё превосходство над другими людьми. Но последующие события показали, что он не до конца продумал свою жизнь. Без своего изобретения мужчина не мог сделать невидимками одежду и пищу. Вскоре он стал опасаться, что узнав о его изобретении, люди поймают его и посадят в клетку на всеобщее обозрение. Все эти обстоятельства заставляли учёного избегать людей. Он продолжил свои исследования для того, чтобы вернуть себе прежний вид. Но отсутствие денежных средств вынудило его снова бежать от людей. Гриффин решил начать деятельность по захвату власти. Он обратился к своему другу Кемпу и поделился с ним своими планами. Но Кемп отказался участвовать в этой авантюре и обратился к полицейским. Действия друга обозлили невидимку, и он решил убить Кемпа. Но это привело к тому, что люди узнали, что Гриффин невидим, и начали за ним охоту. Разъярённые люди выследили и убили исследователя. Мёртвое тело снова стало видимым.</span></div> -->
		<div class="below">
			<p>Характеристики:</p>
			<table>
				<tr>
					<td>200 рублей</td>
					<td>Издательство McMillan</td>
					<td>2008 год</td>
				</tr>
			</table>
		</div>	
		<div>
			<form action="">
				<button class="button1">Купить</button>  	
			</form>
		</div>		
	</div>
<footer>
	<div class="footer"> 	
		<div class="social">
			<a href="#"></a>
			<a href="#"></a>
			<a href="#"></a>
			<a href="#"></a>			
		</div>	
		<div class="footer_text"><span>Все права защищены <sup>&copy;</sup></span></div>
	</div>
</footer>
</body>
</html>