<?php

$title = "Resultat";

include("base.php")

?>

<?php

	$max  = file_get_contents('https://influence.beta.krugazor.eu/api/influencers');
	$max  = substr($max,9,strlen($max)-10);

	$name = ucfirst(strtolower($_POST["nom"]));
	$i    = 0;
	$str  = file_get_contents('https://influence.beta.krugazor.eu/api/influencers/'.$i);

	$json = json_decode($str, true);

	while ($json["name"] != $name)
	{
		$i++;
		if ($i == $max)
		{
			$erreur = 0;
			break;
		}
		$str  = file_get_contents('https://influence.beta.krugazor.eu/api/influencers/'.$i);

		$json = json_decode($str, true);
	}

	if (isset($erreur))
	{
		echo "Pas trouvé";
	}
	else
	{
		echo "Trouvé! ----> ".$json["name"]."<br>Id -----------> ".($i+1)." (ref : 2)<br><br><br>Tableau : <br><br>";
		print_r($json);
	}
?>

</body>
</html>
