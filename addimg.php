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
$strSQL = "SELECT * FROM Files WHERE type='img'";
$res = mysqli_query($link, $strSQL);
while($row = mysqli_fetch_array($res)) 
{
	if ($row['id']!=0)
	{
		echo'<a  href="'."repository/img/icons/".$row['icon'].'" class="flipLightBox "><img id="im" width="250px" height="150px" src="'."repository/img/icons/".$row['icon'].'"><span>Optional Lightbox Text</span></a>';
	}
}
mysqli_close($link);
?>