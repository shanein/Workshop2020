<?php

$title = "Integration des donnees de lundi";

include("base.php")

?>

<p>

<?php
$id = 1;

$lundi    = "2020-06-15 09:00:00"; //changer avec date du dernier element de la table
$date_now = date("Y-m-d H").":00:00";
$lundi = strtotime($lundi);
$date_now = strtotime($date_now);
if( $lundi < $date_now )
{
	$time = $date_now - $lundi;
}
else
{
	$time = 0;
}
$time = $time / 3600;

// //on supprime les données de la table influencer
// $delete = "TRUNCATE TABLE `influencer`";
// mysqli_query($lien,$delete) or die("Impossible d'ajouter requete 1");

// //on initialise l'id
// $reset = "ALTER TABLE influencer AUTO_INCREMENT = 0";
// mysqli_query($lien,$reset) or die("Impossible d'ajouter requete 2");

//on cherche le nombre d'influenceur total
$max  = file_get_contents('https://influence.beta.krugazor.eu/api/influencers');
$max  = substr($max,9,strlen($max)-10);

while ($id < $max)
{
	//remplissage de la table influencer avec date : lundi 15 juin 9h (car 1ere donnée)
	$str = file_get_contents('https://influence.beta.krugazor.eu/api/influencers/'.($id-1).'/time/'.$time);
	$json = json_decode($str, true);

	$sql = "INSERT INTO influencer VALUES (NULL, '".$json["subscribers"]."', '".$json["publications"]."', '".$json["stories"]."', '".$json["promotions"]."', '".$json["cover"]."', '".$json["impressions"]."', '".$json["interactions"]."', '".$json["likes"]."', '".$json["comments"]."', '".$json["reach"]."', '".$json["profileVisits"]."', '".$json["age"]."', '".$json["sex"]."', '2020-06-15 09:00:00', '".$id."');";

	echo $id."<br>";
	mysqli_query($lien, $sql) or die("Impossible d'ajouter requete 3");

	$id++;

}
echo "Ajout des premières données effectuée (données du lundi 15 juin 2020 à 9h)";

?>
</p>

<a href="index.php">Acceder au dashboard d'un influenceur</a>

</body>
</html>
