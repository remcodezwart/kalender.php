<?php 
	$link = new mysqli('localhost','root','','calendar');
	
	$query = "select * from birthdays  ORDER BY month , day";
	$result = $link->query($query);
	
	$birthdays1 = $result->fetch_all(MYSQLI_ASSOC);
	/*
			$query = "select * from birthdays where month=2 ORDER BY day";
			$result = $link->query($query);
			
			$birthdays2 = $result->fetch_all(MYSQLI_ASSOC);
	
	*/
				$query = "select * from birthdays where month=3 ORDER BY day";
				$result = $link->query($query);
				
				$birthdays3 = $result->fetch_all(MYSQLI_ASSOC);

					$query = "select * from birthdays where month=4 ORDER BY day";
					$result = $link->query($query);
					
					$birthdays4 = $result->fetch_all(MYSQLI_ASSOC);
	
						$query = "select * from birthdays where month=5 ORDER BY day";
						$result = $link->query($query);
						
						$birthdays5= $result->fetch_all(MYSQLI_ASSOC);
	
							$query = "select * from birthdays where month=6 ORDER BY day";
							$result = $link->query($query);
							
							$birthdays6 = $result->fetch_all(MYSQLI_ASSOC);
							
									$query = "select * from birthdays where month=7 ORDER BY day";
									$result = $link->query($query);
									
									$birthdays7 = $result->fetch_all(MYSQLI_ASSOC);
	
														$query = "select * from birthdays where month=8 ORDER BY day";
														$result = $link->query($query);
														
														$birthdays8 = $result->fetch_all(MYSQLI_ASSOC);
																
																$query = "select * from birthdays where month=9 ORDER BY day";
																$result = $link->query($query);
																
																$birthdays9 = $result->fetch_all(MYSQLI_ASSOC);
														
																	$query = "select * from birthdays where month=10 ORDER BY day";
																	$result = $link->query($query);
																	
																	$birthdays10 = $result->fetch_all(MYSQLI_ASSOC);
														
																		$query = "select * from birthdays where month=11 ORDER BY day";
																		$result = $link->query($query);
																		
																		$birthdays11 = $result->fetch_all(MYSQLI_ASSOC);
														
																			$query = "select * from birthdays where month=12 ORDER BY day";
																			$result = $link->query($query);
																			
																			$birthdays12 = $result->fetch_all(MYSQLI_ASSOC);
?>