<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>Editar/Añadir empleado</title>
	<style>
		body{
			font-size: 17px;
			font-family: helvetica;
			color: #202020;
			background: #e4e4e4;
		}
		h4{
			font-weight: 200;
			text-align: center;
		}
		.formulario{
			margin:auto;
			width: 50%;
		}
		input[type="text"]{
			width:100%;
			font-size:20px;
			height: 40px;
			text-align: center;
		}
		input[type="text"]:focus{
			border: 2px solid #e54500;
		}
		select{
			display: block;
			margin: auto;
			border:none;
			width:100%;
			text-align: center;
			font-size: 20px;
			height:40px;
		}
		input[type="submit"]{
			display: block;
			margin:30px auto 30px auto;
			width:50%;
			height: 40px;
			font-size: 20px;
			font-weight: 600;
			color: #fff;
			background:  #e54500;
			border:none;
		}
		input[type="submit"]:hover{
			background:  #0088cd;
		}
		input[type="submit"]:active{
			background:  #002d8e;
		}
	</style>
</head>
<body>
	<?php
		require('Conexion_BDD.php');
		// Inicialización de variables principales.
		$Nombre="Ingrese nombre de nuevo empleado";
		$Departamento="1";
		$Cargo="1";

		if(isset($_POST['Guardar'])){ // Código cuando se presione el botón de guardado.

			// Recolección de valores en el formulario.

			$Nombre = $_POST['nombre'];
			$Departamento = $_POST['departamento'];
			$Cargo = $_POST['cargo'];

			if ($_POST['cond'] == "0"){ // Si el condicional es 0, quiere decir que va a añadir un nuevo usuario. (INSERT)
				$sql = "INSERT INTO Empleado(Nombre,Cod_Departamento,Cod_Cargo) VALUES('$Nombre',$Departamento,$Cargo)";
				$consulta = mysqli_query($connect, $sql);
	
				header("refresh:0.5; HOME.php");
			}else{ // De lo contrario, se actualiza el usuario. (UPDATE)
				$sql = "UPDATE Empleado
					   SET Nombre='$Nombre', Cod_Departamento=$Departamento, Cod_Cargo=$Cargo
					   WHERE Cod_Empleado=" . $_GET['id'];
				$consulta = mysqli_query($connect, $sql);

				header("refresh:0.5; HOME.php");
			}
		}


		if(isset($_GET['edited'])){ //En caso de actualizar, se toman los valores del registro actual mediante su id.

			$sql = "SELECT * FROM Empleado WHERE Cod_Empleado = " . $_GET['id'];
			$consulta = mysqli_query($connect, $sql);
			$colummna = mysqli_fetch_object($consulta);
			$Nombre = $colummna->Nombre;
			$Departamento = $colummna->Cod_Departamento;
			$Cargo = $colummna->Cod_Cargo;
		}

		if(isset($_GET['deleted'])){ //Instrucciones para borrar el registro actual. (DELETE)
			$sql = "DELETE FROM Empleado WHERE Cod_Empleado = " . $_GET['id'];
			$consulta = mysqli_query($connect, $sql);

			header("refresh:0; HOME.php");
		}
	?>
	
	<div class="formulario">
		<form action="" method="POST">
			<div>
				<h4>Empleado</h4>
				<?php //Condicional donde se verifica si se va a actualizar o añadir.
					if($Nombre == "Ingrese nombre de nuevo empleado"){
						echo '<input type="text" name="nombre" placeholder="Ingrese nombre de nuevo empleado">
						<input type="hidden" name="cond" value="0">';
					}else{
						echo '<input type="text" name="nombre" value="' . $Nombre .'">
					     <input type="hidden" name="cond" value="1">';
					}
				?>
			</div>

			<div>
				<h4>Departamento</h4>
				<select name="departamento">
					<option <?php if($Departamento == '1'){echo 'selected';} ?> value="1">Investigación y desarrollo</option>
					<option <?php if($Departamento == '2'){echo 'selected';} ?> value="2">Manejo de comunidad</option>
				</select>
			</div>

			<div>
				<h4>Cargo</h4>
				<select name="cargo">
					<option <?php if($Cargo == '1'){echo 'selected';} ?> value="1">CEO</option>
					<option <?php if($Cargo == '2'){echo 'selected';} ?> value="2">Administrador de proyectos</option>
					<option <?php if($Cargo == '3'){echo 'selected';} ?> value="3">Desarrollador</option>
					<option <?php if($Cargo == '4'){echo 'selected';} ?> value="4">Community Manager</option>
				</select>
			</div>

			<div>
				<input type="submit" value="Guardar" name="Guardar"></th>
			</div>
		</form>
	</div>
</body>
</html>