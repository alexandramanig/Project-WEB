<?php require_once('Project.php');?>

<link href="style.css" rel="stylesheet" type="text/css" />

<form action="insert.php" method="POST">
    <h2>Sign up</h2>
<label for="lastnameField">Nume</label>
<br>
<input required type="text" name="nu"
value="" placeholder="" id="nu">
    <br>
    <label for="firstnameField">Prenume</label>
    <br>
    <input required type="text" name="pr"
           value="" placeholder="" id="pr">
    <br>
    <label for="emailField">Email</label>
    <br>
<input required type="email" name="em"
           value="" placeholder="" id="em">
    <br>
    <label for="usernameField">Nume de utilizator</label>
    <br>
    <input required type="text" name="us"
           value="" id="us">
    <br>
    <label for="passwordField">Parola</label>
    <br>
    <input required type="password" name="pa"
           value="" id="pa">
    <br>
    <button type="submit">Send</button>
</form>



<?php ?>
