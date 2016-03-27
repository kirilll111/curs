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
$strSQL = "SELECT * FROM Files WHERE type='txt'";
$res = mysqli_query($link, $strSQL);
$number=0;
		

while($row = mysqli_fetch_array($res)) 
{
	if ($row['id']!=0)
	{

		echo '<div class="txtfile" id="fileInput">';
		echo'<img id="n'. $row['id'] .'"  src="repository/sym.png" alt="IconInBase" onclick="iconClick(this)">';
		echo '<p class="filename">'.$row['name'].'</p>';
		echo '</div>';
	}
	
}

mysqli_close($link);
?>