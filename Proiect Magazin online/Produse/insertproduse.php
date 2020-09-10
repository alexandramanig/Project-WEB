<?php
$a=$_POST['poza'];
$b=$_POST['denumire'];
$c=$_POST['cantitate'];
$id=$_POST['id_p'];

include "conect.php";
$sql_insert="INSERT INTO produse (poza,denumire,cantitate) VALUES ('$a','$b','$c')";
$rez_insert=mysql_query($sql_insert);
if(!$rez_insert)
{
	echo"problema la insert!!!!!";
	die();
}
else{
header("location:products_admin.php");
}
?>