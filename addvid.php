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

//Запрос
$strSQL = "SELECT * FROM Files WHERE type='vid'";
$res = mysqli_query($link, $strSQL);
$number=0;
		

while($row = mysqli_fetch_array($res)) 
{
	if ($row['id']!=0)
	{

		echo'<video id="n'. $row['id'] .'"  width="400" height="240" controls src="'."repository/vid/".$row['icon'].'" alt="IconInBase" >';
		
	}
	
}

mysqli_close($link);
?>