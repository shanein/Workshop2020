<?php

$title = "Dashboard";
include("base.php")

?>

<form method="post" action="index2.php">
	<label for="id_influencer">Rechercher depuis une reference (id+1)</label>
	<input type="texte" name="id_influencer" id="id_influencer" required>
	<input type="submit" name="Rechercher">
</form>
<br><br><br>
<form method="post" action="index3.php">
	<label for="id_influencer">Rechercher depuis un nom</label>
	<input type="texte" name="nom" id="nom" required>
	<input type="submit" name="Rechercher">
</form>
<script src="influencers.js"></script>
<script src="jquery.js"></script>
