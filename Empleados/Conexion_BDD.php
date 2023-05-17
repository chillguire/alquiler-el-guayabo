<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>Conexion</title>
</head>
<body>
	<?php

	$connect = mysqli_connect('localhost','root',''); //Conexión mediante usuario de phpMyAdmin.
	if (!$connect) {
		die("Database connection failed");
	 }
	$seleccion = mysqli_select_db($connect, 'BDD_Programacion3'); // Selección de la base de datos.
	if (!$seleccion) {
		die("Database selection failed: " . mysqli_error($connect));
	 }
	?>
</body>
</html>