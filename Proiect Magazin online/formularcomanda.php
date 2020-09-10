<?php require_once('products_user.php');?>

<link href="style.css" rel="stylesheet" type="text/css" />

<form action="insertcomanda.php" method="POST">
    <h2>Comanda</h2>
	<label for="nume">Nume</label>
	<br>
	<input required type="text" name="nu"
	value="" placeholder="" id="nu">
    <br>
    <label for="prenume">Prenume</label>
    <br>
    <input required type="text" name="pr"
           value="" placeholder="" id="pr">
    <br>
    <label for="email">Email</label>
    <br>
	<input required type="email" name="em"
           value="" placeholder="" id="em">
    <br>
    <label for="telefon">Telefon</label>
    <br>
    <input required type="text" name="tel"
           value="" id="tel">
    <br>
    <label for="adresacompleta">Adresa Completa (Exemplu: Localitate/Judet/numar/strada)</label>
    <br>
   <input required type="text" name="adr"
           value="" placeholder="" id="adr">
    <br>
	
	<label for="comanda">Comanda dumneavostra(Exemplu: cartea/cartile , numarul de exemplare pentru fiecare carte)</label>
    <br>
    <input required type="text" name="com"
           value="" placeholder="" id="com">
    <br>
	
    <button type="submit">Send</button>
</form>



<?php ?>
