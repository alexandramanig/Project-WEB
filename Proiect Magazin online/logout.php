<?php
$_SESSION['logat']='';
$_SESSION['id']='';
session_unset();
session_destroy();
header("Location:Project.php");
?>