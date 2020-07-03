<?php

date_default_timezone_set('Europe/Paris'); //fuseau horaire

$host = "localhost";
$user = "root";
$password = "";
$bdd = "bdd_workshop";

$lien = mysqli_connect($host,$user,$password,$bdd);

mysqli_query($lien,"set names utf8") or die();

?>

<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" href="style.css">
	<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;700&display=swap" rel="stylesheet">
	<title><?php echo($title); ?></title>
	<meta charset="utf-8">
</head>
<body>
