<?php $link = new mysqli('localhost','root','','calendar');
	
	$id = $_POST['id'] ;
	$query = "delete from birthdays where id=$id";
	$result = $link->query($query);
	header('Location: index.php');
?>
