<?php
	$day = $_POST['day'];
	$month = $_POST['month'];
	$year = $_POST['year'];
	$person = $_POST['person'];
	$id = $_GET['id'];
	$link = new mysqli('localhost','root','','calendar');
	
	
	if ($month == "januarie"){
		$month = 1;
	}
	elseif($month == "february"){
		$month = 2;
	}
	elseif($month == "maart"){
		$month = 3;
	}
	elseif($month == "april"){
		$month = 4;
	}
	elseif($month == "mei"){
		$month = 5;
	}
	elseif($month == "juni"){
		$month = 6;
	}
	elseif($month == "juli"){
		$month = 7;
	}
	elseif($month == "augustus"){
		$month = 8;
	}
	elseif($month == "oktober"){
		$month = 9;
	}
	elseif($month == "november"){
		$month = 10;
	}
	elseif($month == "september"){
		$month = 11;
	}
	elseif($month == "december"){
		$month = 12;
	}
	mysqli_query($link,"UPDATE birthdays SET `person`='$person',`day`='$day',`month`='$month',`year`='$year' WHERE id='$id'") ;
	header('Location: index.php');
?>
