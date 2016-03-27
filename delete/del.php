<?php
header("Location: show.php"); 
include "../connectionSettings.php";
$link = mysqli_connect($server, $username, $password);
if (!$link) 
{
	die(mysqli_connect_error());
}	
mysqli_set_charset($link, "utf8");		
mysqli_select_db($link, $DB) or die(mysqli_error($link));
$delfiles = $_POST['check'];
var_dump($delfiles);

foreach($delfiles as $id) 
{ 
	$sel =  "SELECT * FROM Files WHERE id=$id";
	 $res = mysqli_query($link,$sel) ;
	 var_dump($res);
		$row = mysqli_fetch_assoc($res);
		var_dump($row);
        @unlink('../repository/img/icons/'.$row['icon']);     // средние фотки удаляем
        @unlink('../repository/img/images/'.$row['icon']);    // маленькие фотки удаляем
	$query = "DELETE FROM Files WHERE id = " . (int) $id; 
	mysqli_query($link,$query);
 } 
?>