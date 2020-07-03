<?php

$title = "BDD";

include("base.php");

?>

<p>

<?php

$id = 500;

//on cherche le nombre d'influenceur total
$max  = file_get_contents('https://influence.beta.krugazor.eu/api/influencers');
$max  = substr($max,9,strlen($max)-10);

// //on supprime les données de la table
// $delete = "TRUNCATE TABLE `influencer`";
// mysqli_query($lien,$delete) or die("Impossible d'ajouter requete 1");

// //on initialise l'id (ici)
// $reset = "ALTER TABLE influencer AUTO_INCREMENT = 0";
// mysqli_query($lien,$reset) or die("Impossible d'ajouter requete 2");

while ($id < $max) //prend +de 120 secondes donc on le fait en 2 fois ($id < 900 puis $id = 900 et $id < $max en enlevant la supression de la bdd et la reinitialisation de l'auto incremente)
{
	//remplissage de la BDD
	$str = file_get_contents('https://influence.beta.krugazor.eu/api/influencers/'.($id));
	$json = json_decode($str, true);

	$sql = "INSERT INTO influencer VALUES(NULL,'".$json["name"]."','".$json["subscribers"]."','".$json["publications"]."','".$json["stories"]."','".$json["promotions"]."','".$json["cover"]."','".$json["impressions"]."','".$json["interactions"]."','".$json["likes"]."','".$json["comments"]."','".$json["reach"]."','".$json["profileVisits"]."','".$json["age"]."','".$json["sex"]."','".date("Y-m-d H").':00:00'."')";

	mysqli_query($lien,$sql) or die("Impossible d'ajouter requete 3");
	echo $json["name"]." ";
	echo $id."<br><br>";

	$id++;
}

echo "<br>BASE DE DONNEE REMPLIE AVEC SUCCESS";

?>
</p>
</body>
</html>
