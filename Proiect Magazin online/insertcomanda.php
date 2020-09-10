<?php
$a=$_POST['nu'];
$b=$_POST['pr'];
$c=$_POST['em'];
$d=$_POST['tel'];
$e=$_POST['adr'];
$f=$_POST['com'];


include "conectare.php";
$sql_insert="INSERT INTO comenzi (nume,prenume,email,telefon,adresacompleta,comanda) VALUES ('$a','$b','$c','$d','$e','$f')";
//echo $sql_insert;
//die();
$rez_insert=mysql_query($sql_insert);
if(!$rez_insert)
{
	echo"problema la insert!!!!!";
	die();
}
else{
header("location:Project_User.php");
}
?>