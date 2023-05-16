<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Hiroshima Mon Amour - El Guayabo</title>
	<link rel="stylesheet" type="text/css" href="../ElGuayabo.css">
</head>
<body>
<?php

	echo '<header class="header"> 
		 <img class="logo" src="../ElGuayabo.svg" alt="El Guayabo">
		 </header>';

	include("ElGuayabo.php");

	$HMA = new Pelicula();
	$HMA->MostrarDatos("Hiroshima Mon Amour", "1959", "Alain Resnais", "../Peliculas/HMA.jpeg");
	$HMA->Devolucion();

?>
</body>
</html>