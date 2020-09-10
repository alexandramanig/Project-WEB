<!DOCTYPE html>
<html>
<head>
	<title>Cărțile noastre</title>
	<meta charset=utf-8>
	<link href="stilproducts.css" rel="stylesheet" type="text/css" />
</head>
<body>

<div class="bg-img">
  <div class="container">
    <div class="topnav">
		<?php 
			include "meniu_user.php"; 
		?>

	</div>
  </div>
</div>
<br><br><br><br>
<h1>Cărțile noastre</h1>
<br><br><br><br>
<table>
	<thead>

		<tr><td>Nr. crt.</td>
			<td></td>
			<td>Denumire</td>
			
		
		</tr>
	</thead>
	<tbody>
	<?php
		include "conectare.php";
		$sql_student="SELECT * FROM produse";
		$rez_student=mysql_query($sql_student);
		$i=1;
		while($rand_student=mysql_fetch_array($rez_student)){
		echo"<tr><td>$i</td>
			<td><img src=Pozesite/".$rand_student['poza']."></td>
			<td>".$rand_student['denumire']."</td>
		</tr>";
		$i++;
		}
			
	
	?>
	
	</tbody>
</table>
		
		</div>
	</div>
</body>
</html>
</body>
</html>