<html>
    <head>
        <title>My first PHP Website</title>
    </head>
    <body>
	<center>
    <h1>Les Jeux Video Disponibles</h1>
	<form method="GET">
	<?php
	try
	{
		$dbo=new PDO('mysql:host=localhost;dbname=test;charset=utf8','root','');
	}
	catch(Exception $e)
	{
		die('Erreur : '.$e->getMessage());
	}
	$rep=$dbo->query('select ID from jeux_video');
	echo "<select>";
	while($don=$rep->fetch())
	{
		echo "<option>".$don['ID']."</option>";
	}
	echo "</select>";
	$rep->closeCursor();
	if($_SERVER['METHOD']=='GET)
    $op=$_GET['s1'];
	$rep=$dbo->query('select * from jeux_video where ID='.$op);
	while($don=$rep->fetch())
	{
	echo "<label>Nom</label><input type='text' value='".$don['nom']."/><br/>";
	echo "<label>possesseur</label><input type='text' value='".$don['possesseur']."/><br/>";
	echo "<label>console</label><input type='text' value='".$don['console']."/><br/>";
	echo "<label>prix</label><input type='text' value='".$don['prix']."/><br/>";
	}
	$rep->closeCursor();
	?>
	</form>
	</center>
    </body>
</html>