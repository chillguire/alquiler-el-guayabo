<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>A Quiet Place - El Guayabo</title>
	<link rel="stylesheet" type="text/css" href="../ElGuayabo.css">
</head>
<body>
<?php

	echo '<header class="header"> 
		 <img class="logo" src="../ElGuayabo.svg" alt="El Guayabo">
		 </header>';

	include("ElGuayabo.php");

	$AQP = new Pelicula();
	$AQP->MostrarDatos("A Quiet Place", "2018", "John Krasinski", "../Peliculas/AQP.jpeg");
	$AQP->Devolucion();

?>
</body>
</html>