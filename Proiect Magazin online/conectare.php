<?php
// Informatii baza de date
$host = "localhost"; //aici numele serverului
$user = "alexandra.manig"; // aici userul
$passw = "Am600071"; //parola
$db_name = "u_alexandramanig"; // numele bazei de date
$conexiune = mysql_connect($host,$user,$passw) or die("Nu ma pot conecta la MySQL!");
mysql_select_db($db_name,$conexiune) or die("Nu gasesc baza de date!");
?>
