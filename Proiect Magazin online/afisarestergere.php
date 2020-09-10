<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<title>Tabelul actualizat</title>
	<head>

	<body>
		<table>
			<tr>
				<td>Nr. crt.</td>
				<td></td>
				<td>Denumire</td>
				<td>Cantitate</td>
			</tr>
<?php
	include "conectare.php";
	$i=1;
	$interogare_student= "SELECT * FROM produse";
	$student=mysql_query($interogare_student);
	
	
	while ($afis_st=mysql_fetch_array($student))
	{
		
		echo"<tr>
				<td>$i</td>
				<td>".$afis_st['poza']."</td>
				<td>".$afis_st['denumire']."</td>
				<td>".$afis_st['cantitate']."</td>
				<td><a href=sterge.php?idul=".$afis_st['id'].">Sterge!!!!</a></td>
			</tr>";
			$i++;
	}
	

	
?>

		</table>
		</html>