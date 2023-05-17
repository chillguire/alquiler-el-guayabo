<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Select, update, delete, insert PHP - MySQL</title>
	<style>
		body{
			font-size: 17px;
			font-family: helvetica;
			color: #202020;
			background: #e4e4e4;
		}
		div{
			width: 50%;
		}
		table, th, tr {
			border: 1px solid black ;
			border-collapse: collapse;
			margin: 10px;
			padding:10px;
			font-weight: 200;
			margin: auto;
		}
		.title{
			background: #e54500;
			color: #fff;
		}
		tr:hover{
			background:#e54500;
		}
		.a{
			margin-bottom: 15px;
		}
		a{
			text-decoration: none;
			color: #202020;
			display: block;
		}
		a:hover{
			color:#ffffff;
		}
		h3{
			text-align: center;
			font-weight: 200;
		}
		h1{
			text-align: center;
		}
	</style>
</head>
<body>
	<?php
		require('Conexion_BDD.php');
	?>
	<h1>Lista de empleados</h1>
	<h3><a href="Anadir.php">Añadir un nuevo empleado</a><h3>
	</div>
		<table>
			<tr>
				<th class="title">Departamento</th>
				<th class="title">Empleado</th>
				<th class="title">Cargo</th>
				<th class="title">Acción</th>
			</tr>
		<?php /* Base de datos con tablas Departamento, Cargo y Empleados.
			    Con relaciones: Un departamento, muchos empleados (1..*), Un empleado, un cargo (1..1), Un cargo, muchos empleados (1..*).
			    Utilizar consultas sql de SELECT, INSERT, UPDATE y DELETE */
		
			// SELECT - Se seleccionan las filas/registros de la tabla principal.

			$sql = "SELECT * FROM Empleado";
			$consulta=mysqli_query($connect,$sql);
			if (mysqli_num_rows($consulta)>0)
			{ // Convierte a entero cada fila de la tabla.
				while ($colummna=mysqli_fetch_object($consulta)) 
				{ // Devuelve el valor donde estamos actualmente.
		?>
			<tr>
				<th><?php echo $colummna -> Cod_Departamento; ?></th>
				<th><?php echo $colummna -> Nombre; ?></th>
				<th><?php echo $colummna -> Cod_Cargo; ?></th>
				<th>
					<a class="a" href="Anadir.php?edited=1&id=<?php echo $colummna->Cod_Empleado;?>">Editar</a>
					<a href="Anadir.php?deleted=1&id=<?php echo $colummna->Cod_Empleado;?>">Eliminar</a>
				</th>
			</tr>
		<?php
				}
			}
		?>
		</table>
	</div>
</body>
</html>