<?php

$title = "Dashboard";

include("base.php");

//recherche de l'id en fonction du nom
$name = ucfirst(strtolower($_POST["nom"]));

$sql = "SELECT id_account from account where account_name = '".$name."';";

$query = mysqli_query($lien, $sql) or die("Impossible d'ajouter requete 1");
$result = mysqli_fetch_assoc($query);

$id = $result['id_account'];

//recherche de la derniere date enregistrée
$sql = "SELECT max(influencer_date) from influencer,account where influencer.id_account = account.id_account and account.id_account = '".$id."';";
$query = mysqli_query($lien, $sql) or die("Impossible d'ajouter requete 2");

$result = mysqli_fetch_assoc($query);
$last_date = $result['max(influencer_date)'];

//changer avec date du dernier element de la table
$date_now = date("Y-m-d H").":00:00";
$last_date = strtotime($last_date);
$date_now = strtotime($date_now);

//calcul du temps entre la dernière date et aujourd'hui
if( $last_date < $date_now )
{
	$time = $date_now - $last_date;
}
else
{
	$time = 0;
}
$time = $time / 3600;
$time--; //on a deja ce temps donc on commence par le suivant (manquant)

while ($time >= 0)
{
	//remplissage de la table influencer apres la date : last_date
	$str = file_get_contents('https://influence.beta.krugazor.eu/api/influencers/'.($id-1).'/time/'.$time);
	$json = json_decode($str, true);

	$sql = "INSERT INTO influencer VALUES (NULL, '".$json["subscribers"]."', '".$json["publications"]."', '".$json["stories"]."', '".$json["promotions"]."', '".$json["cover"]."', '".$json["impressions"]."', '".$json["interactions"]."', '".$json["likes"]."', '".$json["comments"]."', '".$json["reach"]."', '".$json["profileVisits"]."', '".$json["age"]."', '".$json["sex"]."', '".date("Y-m-d H".":00:00", strtotime("-".$time." hour"))."', '".$id."');";

	echo $time."<br>";
	mysqli_query($lien, $sql) or die("Impossible d'ajouter requete 3");

	$time--;
}

echo "Ajout des données manquantes effectuée (données du last_date à aujd)";
//ajouter le dashboard
?>



</body>
</html>
