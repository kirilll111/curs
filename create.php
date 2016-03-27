<?php

ini_set('max_file_uploads', "50");
ini_set("upload_max_filesize","1000M");
ini_set("post_max_size","1000M");


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

echo '<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />';
echo '<link rel="stylesheet" href="css/styles.css" type="text/css">';
echo '<div id="backgroundResult">';


if($_POST['type']=='txt')
{
	if (isset($_FILES))
	{	
		//Старое имя
		$oldname=$_FILES['txt']['name'];
		//директория загрузки
		$uploaddir = "repository/";
		
		if($_FILES['txt']['type'] == "application/vnd.openxmlformats-officedocument.wordprocessingml.document" )
		{$newName=date('YmdHis').rand(10,100).'.docx';}
		else if ($_FILES['txt']['type'] == "text/plain")
		{$newName=date('YmdHis').rand(10,100).'.txt';}
		//путь к изображению
		$uploadfile = "$uploaddir$newName";
		
		//Проверка расширений загружаемых изображений
		if($_FILES['txt']['type'] == "application/vnd.openxmlformats-officedocument.wordprocessingml.document" || $_FILES['txt']['type'] == "text/plain")
		{
			//перемещаем файл из временного хранилища
			if (move_uploaded_file($_FILES['txt']['tmp_name'], $uploadfile))
			{
				$newPage = "repository/" . $newName;
				copy($uploadfile, $newPage);
				echo "<center><br>Файл (".$oldname.") успешно загружен.</center>";
			}
			else
			{
				echo "<center><br>Файл (".$oldname.") не загружен.</center>";
				echo '</div>';
				exit;
			}
		}
		else
		{
			echo "<center><br>Можно загружать файлы только  в форматах txt и docx. Файл (" . $oldname . ") не подходит.</center>";
			echo '</div>';
			exit;
		}
	}
	

	//Замена символов
	$message = str_replace("\r\n",'</br>',$_POST['message']);
	//$message = str_replace("\n",'</br>',$_POST['message']); 
	//Добавляем запись в базу
	$strSQL = "INSERT INTO Files(type, name, icon) VALUES('".$_POST['type']."','".$_POST['name']."', '".$newName."')"; 
	mysqli_query($link, $strSQL) or die(mysqli_error($link));
	//Закрытие соединения
	mysqli_close($link);
}
elseif($_POST['type']=='img')
{
	if (isset($_FILES))
	{	
		//Старое имя
		$oldname=$_FILES['img']['name'];
		//директория загрузки
		$uploaddir = "repository/img/icons/";
		//имя изображения
		$newName=date('YmdHis').rand(10,100).'.png';
		//путь к изображению
		$uploadfile = "$uploaddir$newName";
		
		//Проверка расширений загружаемых изображений
		if($_FILES['img']['type'] == "image/png" || $_FILES['img']['type'] == "image/jpg" || $_FILES['img']['type'] == "image/jpeg")
		{
			//перемещаем файл из временного хранилища
			if (move_uploaded_file($_FILES['img']['tmp_name'], $uploadfile))
			{
				$newPage = "repository/img/images/" . $newName;
				copy($uploadfile, $newPage);
				echo "<center><br>Файл (".$oldname.") успешно загружен.</center>";
			}
			else
			{
				echo "<center><br>Файл (".$oldname.") не загружен.</center>";
				echo '</div>';
				exit;
			}
		}
		else
		{
			echo "<center><br>Можно загружать только изображения в форматах jpg, jpeg и png. Файл (" . $oldname . ") не подходит.</center>";
			echo '</div>';
			exit;
		}
	}
	

	//Замена символов
	$message = str_replace("\r\n",'</br>',$_POST['message']);
	//$message = str_replace("\n",'</br>',$_POST['message']); 
	//Добавляем запись в базу
	$strSQL = "INSERT INTO Files(type, name, icon, pic) VALUES('".$_POST['type']."','".$_POST['name']."', '".$newName."','".$newName."')"; 
	mysqli_query($link, $strSQL) or die(mysqli_error($link));
	//Закрытие соединения
	mysqli_close($link);
}
elseif($_POST['type']=='vid')
{
	if (isset($_FILES))
	{	
		//Старое имя
		$oldname=$_FILES['vid']['name'];
		//директория загрузки
		$uploaddir = "repository/vid/";
		//имя изображения
		$newName=date('YmdHis').rand(10,100).'.mp4';
		//путь к изображению
		$uploadfile = "$uploaddir$newName";
		
		//Проверка расширений загружаемых изображений
		
			//перемещаем файл из временного хранилища
			if (move_uploaded_file($_FILES['vid']['tmp_name'], $uploadfile))
			{
				$newPage = "repository/vid/" . $newName;
				copy($uploadfile, $newPage);
				echo "<center><br>Файл (".$oldname.") успешно загружен.</center>";
			}
			else
			{
				echo "<center><br>Файл (".$oldname.") не загружен.</center>";
				echo '</div>';
				exit;
			}
		
	}
	

	//Замена символов
	$message = str_replace("\r\n",'</br>',$_POST['message']);
	//$message = str_replace("\n",'</br>',$_POST['message']); 
	//Добавляем запись в базу
	$strSQL = "INSERT INTO Files(type, name, icon, pic) VALUES('".$_POST['type']."','".$_POST['name']."', '".$newName."','".$newName."')"; 
	mysqli_query($link, $strSQL) or die(mysqli_error($link));
	//Закрытие соединения
	mysqli_close($link);
}

//Сообщение об успехе и ссылки
echo "<center><br><H2>Файл на сервере успешно сформирован.</H2></center>";
echo '<p>&nbsp;</p>';
echo '</div>';
?>