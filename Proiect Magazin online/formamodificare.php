<!DOCTYPE html>
<html>
<head>
	<title> Exemplu sit</title>
	<meta charset=utf-8>
	<link href=stil.css rel=stylesheet>
</head>
<body>
	<div id=container>
		<header>
		
		</header>
		<nav>
		<?php include "meniu_admin.php"; ?>
		</nav>
		<div id=continut>
			
	<?php $a=$_POST['i']; 
		include "conectare.php";
		$sql="SELECT * FROM produse WHERE id='$id'";
		$rez=mysqli_query($link,$sql);
		$row=mysqli_fetch_array($rez);
	
	?>	

	
			<form action=update.php method=post>
			<label>Poza:</label><input type=text name=nu value=<?php echo $row['poza'];?>><br>
			<label>Denumire:</label><input type=text name=pr value=<?php echo $row['denumire'];?>><br>
			<label>Cantitate:</label><input type=text name=gr value=<?php echo $row['cantitate'];?>><br>
			<input type=hidden name=i value=<?php echo $a;?>>
			<input type=submit value=Modifica>
			</form>
		
		</div>
	</div>
</body>
</html>
</body>
</html>