<?php
$a=$_POST['i'];


include "conectare.php";
$sql_del="DELETE FROM produse WHERE id_p=$a";
//echo $sql_del;
//die();
$rez_del=mysql_query($sql_del);
if(!$rez_del)
{ 
	echo"problema!!!!!";
	die();
}
else{
header("location:products_admin.php");
}
?>
