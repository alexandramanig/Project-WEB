<?php
$a=$_POST['denumire'];
$b=$_POST['cantitate'];
$id=$_POST['id_p'];
include "conectare.php";

$sql_update="UPDATE student SET den ='$a',can ='$b', WHERE id_p ='$id'";
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