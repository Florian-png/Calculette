<?php

$nombre1 = $nombre2 = $operateur = $resultat = $nombre1Erreur = $nombre2Erreur = $operateurErreur = $success = $final =  ""; // Initiation des varialbes en string vides 



if (!empty($_POST)) {
	$nombre1 = htmlspecialchars($_POST['nbr1']);
	$nombre2 = htmlspecialchars($_POST['nbr2']);
	$operateur = htmlspecialchars($_POST['operateur']);
	$success = true;

	if(empty($nombre1)) {
		$success = false;
		$nombre1Erreur = "Votre champ doit contenir obligatoirement un chiffre";
	}

	if(empty($nombre2)) {
		$success = false;
		$nombre2Erreur = "Votre champ doit contenir obligatoirement un chiffre";
	}

	if(empty($operateur)) {
		$success = false;
		$operateurErreur = "Votre champ doit contenir obligatoirement un oppérateur valide (+, -, /, *)";
	}

	if($success) {
		if($operateur == "+") {
			$final = Addition($nombre1, $nombre2);
		}
		if($operateur == "-") {	
			$final = Soustraction($nombre1, $nombre2);
		}
		if($operateur == "/") {
			$final = Division($nombre1, $nombre2);
			
		}
		if($operateur == "*") {
			$final = Multiplication($nombre1, $nombre2);
			
		}
	}
}


function Addition($nbr1, $nbr2) {
	$resultat = $nbr1 + $nbr2;
	return $resultat;
}

function Soustraction($nbr1, $nbr2) {
	$resultat = $nbr1 - $nbr2;
	return $resultat;
}

function Division($nbr1, $nbr2) {
	$resultat = $nrb1 / $nbr2;
	return $resultat;
}

function Multiplication($nbr1, $nbr2) {
	$resultat = $nbr1 * $nbr2;
	return $resultat;
}


try {

	$db = new PDO("mysql:host=localhost;dbname=calculette", "root", "root");
	

} catch (Exception $e) {
	die($e->getMessage());
}


	$requete = $db->prepare('INSERT INTO calcul (nombre1,nombre2,resultat,operateur) VALUES(?,?,?,?)');

	$requete->execute(array($nombre1,$nombre2,$final,$operateur));




?> 
