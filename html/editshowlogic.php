<?php 
	$link = new mysqli('localhost','root','','calendar');
	
	$query = "select * from birthdays where id=$id";
	$result = $link->query($query);
	
	$dates = $result->fetch_assoc();
?>