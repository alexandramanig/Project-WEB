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
			include "meniu_admin.php"; 
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
			<td>Cantitate</td>
			<td>Stergere</td>
			<td>Modificare</td>
			
		
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
			<td>".$rand_student['cantitate']."</td>
			<td><form action=stergere.php method=post>
				<input type=hidden name=i value=".$rand_student['id_p'].">
				<input class='btn' type=submit value=Sterge>
			</form>
			</td>
		</tr>";
		$i++;
		}
			
	
	?>

	<?php $a=$_POST['id_p']; 
		include "conectare.php";
		$sql="SELECT * FROM student WHERE id='$a'";
		$rez=mysqli_query($link,$sql);
		$row=mysqli_fetch_array($rez);
	
	?>	

	
			<form action=update.php method=post>
			<label>Denumire:</label><input type=text name=nu value=<?php echo $row['denumire'];?>><br>
			<label>Cantitate:</label><input type=text name=pr value=<?php echo $row['cantitate'];?>><br>
			<input type=hidden name=i value=<?php echo $a;?>>
			<input type=submit value=Modifica!!>
			</form>
	
	</tbody>
</table>
		
</body>
</html>
