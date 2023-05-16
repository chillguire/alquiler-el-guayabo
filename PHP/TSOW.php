<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>The Shape Of Water - El Guayabo</title>
	<link rel="stylesheet" type="text/css" href="../ElGuayabo.css">
</head>
<body>
<?php

	echo '<header class="header"> 
		 <img class="logo" src="../ElGuayabo.svg" alt="El Guayabo">
		 </header>';

	include("ElGuayabo.php");

	$TSOW = new Pelicula();
	$TSOW->MostrarDatos("The Shape Of Water", "2018", "Guillermo del Toro", "../Peliculas/TSOW.jpeg");
	$TSOW->Devolucion();

?>
</body>
</html>