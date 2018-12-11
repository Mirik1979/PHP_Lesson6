<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <link href="styles/site.css" rel="stylesheet">
    <title>Онлайн магазин</title>
</head>
<body>
<header>
	<div class="container">
		<div class="header">
		</div>
		<!--добавлены хлебные крошки 15.02.2018 -->
		<div class="menu">
			<span><a href="index.php">Главная</a></span>
			<span>Каталог</span>
			<span><a href="contacts.html">Контакты</a></span>
		</div>		 
	</div>
</header>
	<article>
		<div class="pics">
			<!--добавлены дополнительные превью 15.02.2018 -->
			<div><a href="index.html">Главная</a> / Каталог книг</div>
			<br>
			<?php 
				$config2 = require 'config/db.php';        		   
        		$conDB2 = mysqli_connect($config2['host'], $config2['user'], $config2['password'], $config2['db']); 
        		$query2 = "SELECT * FROM directory";
    			$resDB2 = mysqli_query($conDB2, $query2);
    			$data2 = mysqli_fetch_all($resDB2, MYSQLI_ASSOC);
    			if (count($data2) > 0) {
        			foreach ($data2 as $row) {
            			$fileOriginal1 = $row['path'] . $row['file_name1'];    
            			$fileOriginal2 = $row['path'] . $row['file_name2'];  
            			$title = $row['title'];    
            			$href = "sku.php?id=".$row['id'];
            			echo '<div class="skus"><a href="'.$href.'" target="_blank"><img class="sImage" src="'.$fileOriginal1.'" alt="book"  title="'.$title.'"/></a></div>';
            			echo '<div class="skusadd"><a href="'.$href.'" target="_blank"><img class="sImageadd" src="'.$fileOriginal2.'" alt="book"  title="'.$title.'"/></a></div>';          			
            		}
            	}
            	mysqli_close($conDB2);  
			?>			
		</div>
	</article>
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