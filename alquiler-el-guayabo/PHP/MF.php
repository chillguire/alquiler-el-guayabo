<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Masculin Féminin - El Guayabo</title>
	<link rel="stylesheet" type="text/css" href="../ElGuayabo.css">
</head>
<body>
<?php

	echo '<header class="header"> 
		 <img class="logo" src="../ElGuayabo.svg" alt="El Guayabo">
		 </header>';

	include("ElGuayabo.php");

	$MF = new Pelicula();
	$MF->MostrarDatos("Masculin Féminin", "1966", "Jean-Luc Godard", "../Peliculas/MF.jpeg");
	$MF->Devolucion();

?>
</body>
</html>