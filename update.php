<?php
		include('connect.php');

$id = $_POST['id'];
// select les champs dans la table hiking
$reponse = $pdo->prepare('SELECT * FROM hiking WHERE id = :id');
// bindParam dit que :id = $id
$reponse->bindParam(':id', $id, PDO::PARAM_INT);
// exec $reponse
$reponse->execute();
// récupère les champs de la table récupéré
$rando= $reponse->fetch();

 ?>

<!DOCTYPE html>
<html lang="fr">
<head>
	<meta charset="utf-8">
	<title>Ajouter une randonnée</title>
	<link rel="stylesheet" href="css/basics.css" media="screen" title="no title" charset="utf-8">
</head>
<body>
	<a href="read.php">Liste des randonnées</a>
	<h1>Ajouter</h1>
	<form action="update2.php" method="post">
		<div>
			<label for="name">Name</label>
			<!-- injecte le name récupéré par rando en value -->
			<input type="text" name="name" value="<?=$rando->name?>">
		</div>

		<div>
			<label for="difficulty">Difficulté</label>
			<select name="difficulty">
				<option value="tres facile">Très facile</option>
				<option value="facile">Facile</option>
				<option value="moyen">Moyen</option>
				<option value="difficile">Difficile</option>
				<option value="tres difficile">Très difficile</option>
			</select>
		</div>

		<div>
			<label for="distance">Distance</label>
			<input type="text" name="distance" value="<?=$rando->distance?>">
		</div>
		<div>
			<label for="duration">Durée</label>
			<input type="duration" name="duration" value="<?=$rando->duration?>">
		</div>
		<div>
			<label for="height_difference">Dénivelé</label>
			<input type="text" name="height_difference" value="<?=$rando->height_difference?>">
		</div>
		<input type="hidden" type="number" name="id" value="<?= $rando->id?>">
		<button type="submit" name="button">Valider</button>


	</form>
</body>
</html>
