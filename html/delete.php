<?php
$month = "";
if(isset($_GET['month'])){
	if($_GET['month'] == 1){
		$month = "januarie";
	}
	if($_GET['month'] == 2){
		$month = "februarie";
	}
	if($_GET['month'] == 3){
		$month = "maart";
	}
	if($_GET['month'] == 4){
		$month = "mei";
	}
	if($_GET['month'] == 5){
		$month = "april";
	}
	if($_GET['month'] == 6){
		$month = "juni";
	}
	if($_GET['month'] == 7){
		$month = "juli";
	}
	if($_GET['month'] == 8){
		$month = "augustus";
	}
	if($_GET['month'] == 9){
		$month = "september";
	}
	if($_GET['month'] == 10){
		$month = "oktober";
	}
	if($_GET['month'] == 11){
		$month = "november";
	}
	if($_GET['month'] == 12){
		$month = "december";
	}
}
?>
<!DOCTYPE html>

<html>
	<head>
		<title>confirm</title>
		<link href="../css/layout.css" type="text/css" rel="stylesheet">
	</head>
	<body>
	<h1>Verjaardag verwijderen</h1>
	<p>Weet je zeker dat je de verjaardag van <?php if(isset($_GET['name'])){;
	echo $_GET['name'];}
	?> op <?php if(isset($_GET['day'])){
	echo $_GET['day'];
	} ?> <?php echo $month?> wilt verwijderen?</p>
	
	<form action="deletelogic.php" method="post">
	<input type="hidden" value="<?php if(isset($_GET['id'])){ echo $_GET['id']; }?>" name="id">
	<input type="submit" value="Ja" action="deletelogic.php">
	</form>
	<form action="index.php">
	<input type="submit" value="Nee" action="index.php">
	</form>
	
	</body>
	
</html>