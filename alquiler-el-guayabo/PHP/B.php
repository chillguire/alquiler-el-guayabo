<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Breathless - El Guayabo</title>
	<link rel="stylesheet" type="text/css" href="../ElGuayabo.css">
</head>
<body>
<?php

	echo '<header class="header"> 
		 <img class="logo" src="../ElGuayabo.svg" alt="El Guayabo">
		 </header>';

	include("ElGuayabo.php");

	$B = new Pelicula();
	$B->MostrarDatos("Breathless", "1960", "Jean-Luc Godard", "../Peliculas/B.jpeg");
	$B->Devolucion();

?>
</body>
</html>