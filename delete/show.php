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
<link rel="stylesheet" type="text/css" href="../style.css">
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
            <a href="../show.php" class='b-link b-link_menu' >ПРОСМОТР</a>
            <a href="delete/show.php" class='b-link b-link_menu'>УДАЛЕНИЕ</a>
            
        </div>
    </div>
	<header>
		
		
	</header>
	<article>
		
			<p> Изображения:</p>
			<div>
			<form action="del.php" name="table" method="POST">
			<div>
			
						<?php
							include "addall.php";
						?>					
			</div>
			<input type="submit" value="Удалить" />
			</form>
			</div>

			
			
	</article>
	
	


	</body>
	</html>