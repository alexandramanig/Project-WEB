<?php
$a=$_POST['nu'];
$b=$_POST['pr'];
$c=$_POST['em'];
$d=$_POST['us'];
$e=$_POST['pa'];



include "conectare.php";
$sql_insert="INSERT INTO clienti (name,firstName,email,username,password) VALUES ('$a','$b','$c','$d','$e')";
$rez_insert=mysql_query($sql_insert);
if(!$rez_insert)
{
	echo"problema la insert!!!!!";
	die();
}
else{
header("location:Project.php");
}
?>