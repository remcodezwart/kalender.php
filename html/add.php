<?php 
	$day = 1;
	$dagdeel = date("Y"); 
?>
<!DOCTYPE html>

<html>
	<head>
		<title>add</title>
		<link href="../css/layout.css" type="text/css" rel="stylesheet">
	</head>
	<body>
		<h1>Nieuwe verjaardag</h1>
		<form method="post" action="editlogic.php">
		<label>Persoon:</label>
		<input type="text" name="person"><br>
		<label>Datum:</label>
		<select name="day">
		
		<?php for ($day = 1; $day <=31; $day++){;
			?>
				<option><?php echo $day ?></option>
		<?php //ends the for loop on line 17
		}
		?>
		</select>
		
		<select name="month">
			<option>januarie</option>
			<option>february</option>
			<option>maart</option>
			<option>april</option>
			<option>mei</option>
			<option>juni</option>
			<option>juli</option>
			<option>agustus</option>
			<option>oktober</option>
			<option>november</option>
			<option>september</option>
			<option>december</option>
		</select>
		
		<select name="year">
		<?php for ($start = 1900;$start <= $dagdeel ; $dagdeel--){;
		?>
			<option><?php echo $dagdeel ?></option>
			<?php
		}
		?>
		</select><br>
		<input type="submit" value="opslaan">
		</form>
	</body>
</html>