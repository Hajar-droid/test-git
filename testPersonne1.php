<?php
try
{
    $bdd = new PDO('mysql:host=localhost;dbname=test;charset=utf8', 'root', '');
}
catch(Exception $e)
{
        die('Erreur : '.$e->getMessage());
}

$reponse = $bdd->query('SELECT * FROM Personne);

while ($donnees = $reponse->fetch())
{
   
	echo $donnees['nom'] . '<br />';
	echo $donnees['Age'] . '<br />';
}

$reponse->closeCursor();

?>