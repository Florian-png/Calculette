<?php // le fichier reqûete se chargera de charger les différents messages de la base de données et les afficheras sur la page principale avec le requier 

	try {
		$db = new PDO("mysql:host=localhost;dbname=calculette", "root", "root");
	
	} catch(Exception $e) {
		die($e->getMessage());
	}


	$demande = $db->Query('SELECT * FROM calcul ORDER BY id DESC LIMIT 0, 25'); // on récupère toutes les infos de la base de données 
	
	while($resultat = $demande->fetch()) // tant que y a des résultats on récupère et on affiche en stockant dans la variable résultat 
	{
	echo "Calcul numéro : " .$resultat['id']. " comprenant : " .$resultat['nombre1']. " " .$resultat['operateur']. " " .$resultat['nombre2']. " = " .$resultat['resultat']. ". <br>";
	}
	$resultat->closeCursor(); // on ferme 

?>
