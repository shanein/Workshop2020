<?php

$title = "Dashboard";

include("base.php")

?>

<div id="container">
    <!-- zone de connexion -->

    <form action="ajout_des_donnees_influencer.php" method="POST">
    <h1>Connexion</h1>

    <label><b>Nom d'utilisateur</b></label>
    <input type="text" placeholder="Entrer le nom d'utilisateur" name="nom" required>

    <input type="submit" id='submit' value='LOGIN' >
    </form>
    </div>
</body>
</html>
