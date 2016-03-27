
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
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
    <div class="b-page__line ">
           		
		
	
		
		<form id='form1' action='create.php' method='post' enctype='multipart/form-data'  target='iframe-name'>
				Выберите тип файла:<br />
				<input type="radio" name="type" value="txt" onchange="typefile(this)">Текст</input>
				<input type="radio" name="type" value="img" onchange="typefile(this)">Изображение</input>
				<input type="radio" name="type" value="vid" onchange="typefile(this)">Видео</input></br>
				<div id='blank'></div>
		</form>
	</article></div> 
	<script type="text/javascript" src="js/script.js"></script></br>
	
	
</body>
</html>