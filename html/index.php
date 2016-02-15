<?php
	$temp = "";
	include "index_show_logic.php"
?>
<!DOCTYPE html>
<html>
	<head>
	<title>kalender</title>
	<link href="../css/layout.css" type="text/css" rel="stylesheet">
	</head>
	<body>

	<h1>januarie</h1>
		<?php 
		foreach($birthdays1 as $birthdays1):
		if ($birthdays1['month'] == "1"){;
		?>
		<h2><?php 
		if($temp != $birthdays1['day']){
		echo $birthdays1['day'] ;
		$temp = $birthdays1['day'];
		}
		?></h2>

		<p><a href="edit.php?person=<?php echo $birthdays1['person']?>&month=<?php echo $birthdays1['month']?>&id=<?php echo $birthdays1['id']?>">
		<?php echo $birthdays1['person'];
		?>
		(
		<?php echo $birthdays1['year'] ?>
		)
		</a>
		<a href="delete.php?name=<?php echo $birthdays1['person']?>
		&id=<?php echo $birthdays1['id']?>
		&month=<?php echo $birthdays1['month']?>
		&day=<?php echo $birthdays1['day']?>">x</a></p>
		<?php } ?>
		<?php if($birthdays1['month'] == "2"){;
			?>
	<h1>february</h1>
		<h2><?php 
		if($temp != $birthdays1['day']){
		echo $birthdays1['day'] ;
		$temp = $birthdays1['day'];
		} 
		?></h2>

		<p><a href="edit.php?person=<?php echo $birthdays1['person'] ?>&month=<?php echo $birthdays1['month']?>&id=<?php echo $birthdays1['id']?>">
		<?php echo $birthdays1['person'];
		?>
		(
		<?php echo $birthdays1['year'] ?>
		)
		</a>
		<a><a href="delete.php?name=<?php echo $birthdays1['person']?>
		&id=<?php echo $birthdays1['id']?>
		&month=<?php echo $birthdays1['month']?>
		&day=<?php echo $birthdays1['day']?>">x</a></a></p>
		<?php 
		} ;
		endforeach;
		?>
	<h1>maart</h1>
		<?php foreach($birthdays3 as $birthdays3):?>
		<h2><?php 
		if($temp != $birthdays3['day']){
		echo $birthdays3['day'] ;
		$temp = $birthdays3['day'];
		}
		?></h2>

		<p><a href="edit.php?person=<?php echo $birthdays3['person'] ?>&month=<?php echo $birthdays3['month']?>&id=<?php echo $birthdays3['id']?>">
		<?php echo $birthdays3['person'];
		?>
		(
		<?php echo $birthdays3['year'] ?>
		)
		</a>
		<a><a href="delete.php?name=<?php echo $birthdays3['person']?>
		&id=<?php echo $birthdays3['id']?>
		&month=<?php echo $birthdays3['month']?>
		&day=<?php echo $birthdays3['day']?>">x</a></a></p>
		<?php 
		endforeach ?>
	<h1>april</h1>
		<?php foreach($birthdays4 as $birthdays4):?>
		<h2><?php 
		if($temp != $birthdays4['day']){
		echo $birthdays4['day'] ;
		$temp = $birthdays4['day'];
		}
		?></h2>

		<p><a href="edit.php?person=<?php echo $birthdays4['person'] ?>&month=<?php echo $birthdays4['month']?>&id=<?php echo $birthdays4['id']?>">
		<?php echo $birthdays4['person'];
		?>
		(
		<?php echo $birthdays4['year'] ?>
		)
		</a>
		<a><a href="delete.php?name=<?php echo $birthdays4['person']?>
		&id=<?php echo $birthdays4['id']?>
		&month=<?php echo $birthdays4['month']?>
		&day=<?php echo $birthdays4['day']?>">x</a></a></p>
		<?php 
		endforeach ?>
	<h1>mei</h1>
		<?php foreach($birthdays5 as $birthdays5):?>
		<h2><?php 
		if($temp != $birthdays5['day']){
		echo $birthdays5['day'] ;
		$temp = $birthdays5['day'];
		}
		?></h2>

		<p><a href="edit.php?person=<?php echo $birthdays5['person'] ?>&month=<?php echo $birthdays5['month']?>&id=<?php echo $birthdays5['id']?>">
		<?php echo $birthdays5['person'];
		?>
		(
		<?php echo $birthdays5['year'] ?>
		)
		</a>
		<a><a href="delete.php?name=<?php echo $birthdays5['person']?>
		&id=<?php echo $birthdays5['id']?>
		&month=<?php echo $birthdays5['month']?>
		&day=<?php echo $birthdays5['day']?>">x</a></a></p>
		<?php 
		endforeach ?>
	<h1>juni</h1>
		<?php foreach($birthdays6 as $birthdays6):?>
		<h2><?php 
		if($temp != $birthdays6['day']){
		echo $birthdays6['day'] ;
		$temp = $birthdays6['day'];
		}
		?></h2>

		<p><a href="edit.php?person=<?php echo $birthdays6['person'] ?>&month=<?php echo $birthdays6['month']?>&id=<?php echo $birthdays6['id']?>">
		<?php echo $birthdays6['person'];
		?>
		(
		<?php echo $birthdays6['year'] ?>
		)
		</a>
		<a><a href="delete.php?id=<?php echo $birthdays6['id'] ?>&name=<?php echo $birthdays6['person']?>&month=<?php echo $birthdays6['month']?>&day=<?php echo $birthdays6['day']?>">x</a></a></p>
		<?php 
		endforeach ?>
	<h1>juli</h1>
		<?php foreach($birthdays7 as $birthdays7):?>
		<h2><?php 
		if($temp != $birthdays7['day']){
		echo $birthdays7['day'] ;
		$temp = $birthdays7['day'];
		}
		?></h2>

		<p><a href="edit.php?person=<?php echo $birthdays7['person'] ?>&month=<?php echo $birthdays7['month']?>&id=<?php echo $birthdays7['id']?>">
		<?php echo $birthdays7['person'];
		?>
		(
		<?php echo $birthdays7['year'] ?>
		)
		</a>
		<a><a href="delete.php?name=<?php echo $birthdays7['person']?>
		&id=<?php echo $birthdays7['id']?>&month=<?php echo $birthdays7['month']?>&day=<?php echo $birthdays7['day']?>">x</a></a></p>
		<?php 
		endforeach ?>
	<h1>augustus</h1>
		<?php foreach($birthdays8 as $birthdays8):?>
		<h2><?php 
		if($temp != $birthdays8['day']){
		echo $birthdays8['day'] ;
		$temp = $birthdays8['day'];
		}
		?></h2>

		<p><a href="edit.php?person=<?php echo $birthdays8['person'] ?>&month=<?php echo $birthdays8['month']?>&id=<?php echo $birthdays8['id']?>">
		<?php echo $birthdays8['person'];
		?>
		(
		<?php echo $birthdays8['year'] ?>
		)
		</a>
		<a><a href="delete.php?name=<?php echo $birthdays8['person']?>
		&id=<?php echo $birthdays8['id']?>
		&month=<?php echo $birthdays8['month']?>&day=<?php echo $birthdays8['day']?>">x</a></a></p>
		<?php 
		endforeach ?>
	<h1>oktober</h1>
		<?php foreach($birthdays9 as $birthdays9):?>
		<h2><?php 
		if($temp != $birthdays9['day']){
		echo $birthdays9['day'] ;
		$temp = $birthdays9['day'];
		}
		?></h2>

		<p><a href="edit.php?person=<?php echo $birthdays9['person'] ?>&month=<?php echo $birthdays9['month']?>&id=<?php echo $birthdays9['id']?>">
		<?php echo $birthdays9['person'];
		?>
		(
		<?php echo $birthdays9['year'] ?>
		)
		</a>
		<a><a href="delete.php?name=<?php echo $birthdays9['person']?>
		&id=<?php echo $birthdays9['id']?>
		&month=<?php echo $birthdays9['month']?>&day=<?php echo $birthdays9['day']?>">x</a></a></p>
		<?php 
		endforeach ?>
	<h1>november</h1>
		<?php foreach($birthdays10 as $birthdays10):?>
		<h2><?php 
		if($temp != $birthdays10['day']){
		echo $birthdays10['day'] ;
		$temp = $birthdays10['day'];
		}
		?></h2>

		<p><a href="edit.php?person=<?php echo $birthdays10['person'] ?>&month=<?php echo $birthdays10['month']?>&id=<?php echo $birthdays10['id']?>">
		<?php echo $birthdays10['person'];
		?>
		(
		<?php echo $birthdays10['year'] ?>
		)
		</a>
		<a><a href="delete.php?name=<?php echo $birthdays10['person']?>
		&id=<?php echo $birthdays10['id']?>&month=<?php echo $birthdays10['month']?>&day=<?php echo $birthdays10['day']?>">x</a></a></p>
		<?php 
		endforeach ?>
	<h1>september</h1>
		<?php foreach($birthdays11 as $birthdays11):?>
		<h2><?php 
		if($temp != $birthdays11['day']){
		echo $birthdays11['day'] ;
		$temp = $birthdays11['day'];
		}
		?></h2>
		<p><a href="edit.php?person=<?php echo $birthdays11['person'] ?>&month=<?php echo $birthdays11['month']?>&id=<?php echo $birthdays11['id']?>">
		<?php echo $birthdays11['person'];
		?>
		(
		<?php echo $birthdays11['year'] ?>
		)
		</a>
		<a><a href="delete.php?name=<?php echo $birthdays11['person']?>
		&id=<?php echo $birthdays11['id']?>&month=<?php echo $birthdays11['month']?>&day=<?php echo $birthdays11['day']?>">x</a></a></p>
		<?php 
		endforeach ?>
	<h1>december</h1>
		<?php foreach($birthdays12 as $birthdays12):?>
		<h2><?php 
		if($temp != $birthdays12['day']){
		echo $birthdays12['day'] ;
		$temp = $birthdays12['day'];
		}
		?></h2>

		<p><a href="edit.php?person=<?php echo $birthdays12['person']?>&month=<?php echo $birthdays12['month']?>&id=<?php echo $birthdays12['id']?>">
		<?php echo $birthdays12['person'];
		?>
		(
		<?php echo $birthdays12['year'] ?>
		)
		</a>
		<a><a href="delete.php?name=<?php echo $birthdays12['person']?>
		&id=<?php echo $birthdays12['id']?>&month=<?php echo $birthdays12['month']?>&day=<?php echo $birthdays12['day']?>">x</a></a></p>
		<?php 
		endforeach ?>

	<p class="last-of-type">
		<a href="add.php">+ Toevoegen</a>
	</p>
	</body>
</html>