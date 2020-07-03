<?php

$title = "Resultat";

include("base.php")

?>

<?php

	$id = $_POST["id_influencer"];
	$str = file_get_contents('https://influence.beta.krugazor.eu/api/influencers/'.$id."/history/8"); //get data from url + custom influencer-id

	echo $str;
	$json = json_decode($str, true);
	echo $json[2]["name"];
	echo "<br><br>";
	print_r($json);
	echo "<br><br>";
	print_r($json[1])

?>

</body>
</html>s
