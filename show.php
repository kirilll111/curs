<?php
//Параметры
include "/connectionSettings.php";
//Соединение
$link = mysqli_connect($server, $username, $password);
if (!$link) 
{
	die(mysqli_connect_error());
}		
//utf8
mysqli_set_charset($link, "utf8");	
//Выбор базы
mysqli_select_db($link, $DB) or die(mysqli_error($link));
?>

<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="stylesheet" href="css/styles.css" type="text/css">
<link rel="stylesheet" type="text/css" href="style.css">
<title>Загрузка файлов</title>
</head>
<body class="b-page">
    <div class="b-page__head-line">
        
    </div>
    <div class="b-page__line">
        <div class="b-page__line">
        <div class="b-head">
            <div class="b-head__logo">
                <div class="b-logo">
                    <a href="#"><img class="b-logo__img" src="logo.jpg"/></a>
                </div>
            </div>
            
            </div>
        </div>
    </div>
    </div>
    <div class="b-page__line ">
         <div class="b-menu">
            <a href="download.php" class='b-link b-link_menu b-link_menu_active' >ЗАГРУЗКА</a>
            <a href="show.php" class='b-link b-link_menu' >ПРОСМОТР</a>
            <a href="delete/show.php" class='b-link b-link_menu'>УДАЛЕНИЕ</a>
            
        </div>
    </div>
	<header>
		
		
	</header>
	<article>
		
			<H1> Изображения:</H1>
			<div>
			
			
						<?php
							include "addimg.php";
						?>					
			</div>
			
			<div>
			<h1>текстовые файлы:</h1>
		
						<?php
							include "addtxt.php";
						?>				
			</div>
<div>			
			<h1>video  файлы:</h1>
			
						<?php
							include "addvid.php";
						?>
			</div>
			
			
	</article>
	
	<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
<script type="text/javascript" src="js/fliplightbox.min.js"></script>
<script type="text/javascript">$('body').flipLightBox()</script>

	</body>
	</html>