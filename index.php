<?php
require('calcul.php'); // On appelle la page calcul pour éviter d'encombrer le html ici 
?>

<!DOCTYPE html>
<html>
<head>

	<title> Calculette en PHP </title>
	<meta charset="utf-8">
	<link rel="stylesheet" href="style.css">
	<link href="https://fonts.googleapis.com/css?family=Manrope&display=swap" rel="stylesheet">


</head>
<body>

	<h1> Ma super calculette en PHP </h1> 

	<form method="POST" action="index.php">
			
		
			<label for="nrb1"> Votre premier nombre : </label>
			<input type="number" name="nbr1" id="nbr1" minlength="1" required class="text" > 
			<?php  echo $nombre1Erreur; ?> <br>

			<label for="operateur"> Oppérateur : </label>
			<select name="operateur" class="operateur">
				<option value="+"> + (Addition)
				<option value="-"> - (Soustraction)
				<option value="/"> / (Division)
				<option value="*"> * (Multiplication)
			</select>
			<?php  echo $operateurErreur; ?> <br>

			<label for="nrb1"> Votre second nombre : </label>
			<input type="number" name="nbr2" id="nbr2" minlength="1" required  class="text"  >
			<?php  echo $nombre2Erreur; ?> <br>

			<input type="reset" value="Effacer" class="btn">
			<input type="submit" name="=" value="Envoyer" class="btn"> <br>

			<label for="resultat"> Votre résultat : </label>
			<input type="text" name="resultat" id="resultat" value="<?php echo $final; ?>" disabled  class="text" > <br>


	</form>


	<h2> Mes derniers résultats : </h2> 

	<?php 

	require("requete.php");

	?>



</body>
</html>
