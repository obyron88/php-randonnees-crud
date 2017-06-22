<?php
include("connect.php");

// if (isset($_POST['name'])){

$id = $_POST['id'];
$name = $_POST['name'];
$difficulty = $_POST['difficulty'];
$distance = $_POST['distance'];
$duration = $_POST['duration'];
$height_difference = $_POST['height_difference'];

var_dump($id, $name, $difficulty, $distance, $duration, $height_difference);
$reponse = $pdo->prepare('UPDATE hiking SET( name = ":name", difficulty = ":difficulty", distance = ":distance", duration = ":duration", height_difference = ":height_difference") WHERE "id"= ?');

$reponse->bindParam(':id', $id, PDO::PARAM_INT);
$reponse->bindParam(':name', $name);
$reponse->bindParam(':difficulty', $difficulty);
$reponse->bindParam(':distance', $distance);
$reponse->bindParam(':duration', $duration);
$reponse->bindParam(':height_difference', $height_difference);

		$reponse->execute();
		// echo "update réussie !";
	// }


?>
