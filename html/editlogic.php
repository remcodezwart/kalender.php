<?php 
	$link = new mysqli('localhost','root','','calendar');
	$person = $_POST['person'];
	$day = $_POST['day'];
	$month = $_POST['month'];
	$year = $_POST['year'];
	
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
	$sql = "INSERT INTO `birthdays`(`person`,`day`,`month`,`year`) VALUES ('$person','$day','$month','$year')";
    mysqli_query($link, $sql);
	header('Location: index.php');

?>