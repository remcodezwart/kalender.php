<?php 
	$day = 1;
	$dagdeel = date("Y"); 
	$person = "Leeg";
	if(isset($_GET['person'])){
	$person = $_GET['person'];
	};
	if ($person == ""){;
	$person = "leeg";
	}
	if(isset($_GET['id'])){
		$id = $_GET['id'];
	}
	if(isset($_GET['id'])){
	include "editshowlogic.php";
	}
?>
<!DOCTYPE html>

<html>
	<head>
		<title>add</title>
		<link href="../css/layout.css" type="text/css" rel="stylesheet">
	</head>
	<body>
		<h1><?php if(isset($_GET['person']));
		echo $person;
		?></h1>
		<form method="post" action="update.php?id=<?php if(isset($_GET['id'])){
			echo $_GET['id'];
		}
			?>">
		<label>Persoon:</label>
		<input type="text" name="person" value="<?php if(isset($_GET['person']));
		echo $person;
		?>"><br>
		<label>Datum:</label>
		<select name="day">
		
		<?php for ($day = 1; $day <=31; $day++){;
			?>
				<option <?php if(isset($dates['day'])){
				if($day == $dates['day']){
					echo "selected";
				}}?> value="<?php echo $day ?>"><?php echo $day ?></option>
		<?php //ends the for loop on line 17
		}
		?>
		</select>
		
		<select name="month" >
			<option>januarie</option>
			
			<option <?php if(isset($_GET['month'])){if ($_GET['month'] == "2"){
			echo "selected";}}
				?>>february</option>
			<option <?php if(isset($_GET['month'])){if ($_GET['month'] == "3"){
			echo "selected";}}
				?>>maart</option>
			<option <?php if(isset($_GET['month'])){if ($_GET['month'] == "4"){
			echo "selected";}}
				?> >april</option>
			<option<?php if(isset($_GET['month'])){if ($_GET['month'] == "5"){
			echo "selected";}}
				?>>mei</option>
			<option<?php if(isset($_GET['month'])){if ($_GET['month'] == "6"){
			echo "selected";}}
				?>>juni</option>
			<option <?php if(isset($_GET['month'])){if ($_GET['month'] == "7"){
			echo "selected";}}
				?>>juli</option>
			<option <?php if(isset($_GET['month'])){if ($_GET['month'] == "8"){
			echo "selected";}}
				?>>agustus</option>
			<option <?php if(isset($_GET['month'])){if ($_GET['month'] == "9"){
			echo "selected";}}
				?>>oktober</option>
			<option <?php if(isset($_GET['month'])){if ($_GET['month'] == "10"){
			echo "selected";}}
				?>>november</option>
			<option <?php if(isset($_GET['month'])){if ($_GET['month'] == "11"){
			echo "selected";}}
				?>>september</option>
			<option <?php if(isset($_GET['month'])){if ($_GET['month'] == "12"){
			echo "selected";}}
				?>>december</option>
		</select>
		
		<select name="year">
		<?php for ($start = 1900;$start <= $dagdeel ; $dagdeel--){;
		?>
			<option <?php if(isset($dates['year'])){
			if($dagdeel == $dates['year']){
					echo "selected";
			}}?> ><?php echo $dagdeel ?></option>
			<?php
		}
		?>
		</select><br>
		<input type="submit" value="opslaan">
		</form>
	</body>
</html>
