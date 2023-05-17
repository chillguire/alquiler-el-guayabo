<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Call Me By Your Name - El Guayabo</title>
	<link rel="stylesheet" type="text/css" href="../ElGuayabo.css">
</head>
<body>
<?php

	echo '<header class="header"> 
		 <img class="logo" src="../ElGuayabo.svg" alt="El Guayabo">
		 </header>';

	include("ElGuayabo.php");

	$CMBYN = new Pelicula();
	$CMBYN->MostrarDatos("Call Me By Your Name", "2017", "Luca Guadagnino","../Peliculas/CMBYN.jpeg");
	$CMBYN->Devolucion();
?>
</body>
</html>