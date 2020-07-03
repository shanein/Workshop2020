<?php

$title = "Integration des donnees de lundi";

include("base.php");

?>
<p>

<?php

$id = 0;

//on cherche le nombre d'influenceur total
$max  = file_get_contents('https://influence.beta.krugazor.eu/api/influencers');
$max  = substr($max,9,strlen($max)-10);

while ($id < $max)
{
	//remplissage de la table account
	$str = file_get_contents('https://influence.beta.krugazor.eu/api/influencers/'.($id));
	$json = json_decode($str, true);

	$name = $json["name"];
	echo $id." : ".$name."<br><br>";
	$sql = "INSERT INTO account VALUES (NULL,'$name')";

	mysqli_query($lien, $sql) or die();

	$id++;

}

echo "Tous les noms des influenceurs ont bien été ajoutés";


?>

</p>
<a href="integration_des_donnees_t=0.php">Suite : Ajout des premières données</a>
</body>
</html>
