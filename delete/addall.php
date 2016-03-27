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
$number=0;
		

while($row = mysqli_fetch_array($res)) 
{
	if ($row['id']!=0)
	{
		
		echo'<div id="slide">';
		
		echo'<a  href="'."../repository/img/icons/".$row['icon'].'"  "><img id="im" width="150px" height="150px" src="'."../repository/img/icons/".$row['icon'].'"></a>';
		echo'<input type="checkbox" name="check[]" value="'.$row['id'].'">';
		echo'</div>';
	}
	
}

$strSQL1 = "SELECT * FROM Files WHERE type='vid'";
$res1 = mysqli_query($link, $strSQL1);
$number1=0;

while($row1 = mysqli_fetch_array($res1)) 
{
	if ($row1['id']!=0)
	{
		echo'<video id="n'. $row['id'] .'"  width="400" height="240" controls src="'."../repository/vid".$row['icon'].'" alt="IconInBase" >';
		echo'</video>';
	}
	
}

$strSQL2 = "SELECT * FROM Files WHERE type='txt'";
$res2 = mysqli_query($link, $strSQL2);
$number=0;
		

while($row2 = mysqli_fetch_array($res2)) 
{
	if ($row2['id']!=0)
	{
		
		
		echo'<img id="n'. $row['id'] .'"  src="'."../repository/2D/icons/".$row['2Dicon'].'" alt="IconInBase" onclick="iconClick(this)">';
		
	}
	
}







mysqli_close($link);
?>