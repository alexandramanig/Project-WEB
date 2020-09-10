<?php
$a=$_POST['poza'];
$b=$_POST['denumire'];
$c=$_POST['cantitate'];
$id=$_POST['i'];
include "conectare.php";

$sql_update="UPDATE student SET poza ='$a',denumire ='$b',cantitate ='$c' WHERE id_p ='$id'";
//echo $sql_update;
//die();
$rez_update=mysqli_query($link,$sql_update);
if(!$rez_update)
{
	echo"problema la update!!!!!";
	die();
}
else{
header("location:products_admin.php");
}
?>