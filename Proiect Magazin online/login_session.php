<?php
session_start();

include "conectare.php";
$user=$_POST['username'];
$parola=$_POST['password'];

$sql="SELECT * FROM clienti WHERE username='$user' AND password='$parola'";
$rez=mysql_query($sql);

if (mysql_num_rows($rez) == 1) {
    $row = mysql_fetch_array($rez);
    $id=$row['id'];
    $_SESSION['logat']='da';
    $_SESSION['id']=$id;
    if($row['tip']==1){
        header("Location:Project_Admin.php");
    }
    else{
        header("Location:Project_User.php");
    }
}
else{
    header("Location:signup.php");
}
?>