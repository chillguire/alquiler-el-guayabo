<!DOCTYPE html>
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
<?php

	/*  Página web para gestionar alquiler de películas. Constructor con
	título, estreno, director, estado de alquiler, precio y fecha de devolución con
	2 euros el día de retraso */

	// Creación de clase

	class Pelicula{

		// Creación de atributos 

		var $Nombre;
		var $Anio;
		var $Director;
		var $Precio;
		var $Estado;
		var $DevolucionDia;
		var $DevolucionMes;
		var $DevolucionAnio;
		var $DevueltaDia;
		var $DevueltaMes;
		var $DevueltaAnio;

		// Creación de método constructor

		function Pelicula(){
			$this->Nombre="Pelicula";
			$this->Anio="2018";
			$this->Director="Director";
			$this->Precio=mt_rand(1,20);
			$this->Estado=mt_rand(0,1);
			$this->Foto="../Peliculas/CMBYN.jpeg";
			$this->DevolucionDia=mt_rand(1,31);
			$this->DevolucionMes=mt_rand(1,12);
			$this->DevolucionAnio=2019;
			$this->DevueltaDia=mt_rand(1,31);
			$this->DevueltaMes=mt_rand(1,12);
			$this->DevueltaAnio=mt_rand(2019,2020);
		}

		// Creación de métodos principales de la clase
			// Método para establecer y mostrar los datos de la película

		function MostrarDatos($Name, $Year, $Directed, $DirFoto){

			$this->Nombre=$Name;
			$this->Anio=$Year;
			$this->Director=$Directed;
			$this->Foto=$DirFoto;

			echo '<div class="info">';

			echo "<h5>El Nombre de esta película es: " . $this->Nombre . "</h5><br>";
			echo "<h5>El año de estreno es: " . $this->Anio . "</h5><br>";
			echo "<h5>El director es: " . $this->Director . "</h5><br>";
			echo "<h5>El precio para alquilar la película es: " . $this->Precio . " euros</h5><br>";
			if ($this->Estado == 1) {
				echo "<h5>Esta película se encuentra alquilada actualmente. </h5><br>";
			}elseif ($this->Estado == 0) {
				echo "<h5>Esta película se encuentra disponible para alquilar. </h5><br>";
			}

			echo '<img src="'. $this->Foto .'" alt="'. $this->Nombre .'" class="poster">'; 

			echo '</div>';
		}
		

			// Método para mostrar los datos de devolución de la película

		function Devolucion(){
		
			if ($this->Estado == 0) {

				echo "<h5>Usted ha devuelto la película el día " . $this->DevueltaDia . "/" . $this->DevueltaMes . "/". $this->DevueltaAnio . "</h5><br>";
				echo "<h5>El máximo día para devolverla era el " . $this->DevolucionDia . "/" . $this->DevolucionMes . "/" . $this->DevolucionAnio . "<h5><br><br>";
				
				if ($this->DevueltaAnio > $this->DevolucionAnio){

					$this->DevueltaAnio = ($this->DevueltaAnio - $this->DevolucionAnio) * 365;
					$this->DevueltaMes = ($this->DevueltaMes - $this->DevolucionMes) * 31;
					$this->DevueltaDia = ($this->DevueltaDia - $this->DevolucionDia);
				
					$this->DevueltaDia = $this->DevueltaDia + $this->DevueltaMes + $this->DevueltaAnio;

				}elseif ($this->DevueltaAnio == $this->DevolucionAnio){

					if ($this->DevueltaMes > $this->DevolucionMes) {

						$this->DevueltaMes = ($this->DevueltaMes - $this->DevolucionMes) * 31;
						$this->DevueltaDia = ($this->DevueltaDia - $this->DevolucionDia);
						$this->DevueltaDia = $this->DevueltaDia + $this->DevueltaMes;

					}elseif ($this->DevueltaMes == $this->DevolucionMes) {

						if ($this->DevueltaDia > $this->DevolucionDia) {

							$this->DevueltaDia = ($this->DevueltaDia - $this->DevolucionDia);
							$this->DevueltaDia = $this->DevueltaDia;
	
						}elseif ($this->DevueltaDia <= $this->DevolucionDia) {

							$this->DevueltaDia = 0;

						}
					}elseif ($this->DevueltaMes < $this->DevolucionMes) {

						$this->DevueltaDia = 0;

					}
				}elseif ($this->DevueltaAnio < $this->DevolucionAnio) {

					$this->DevueltaDia = 0;

				}
				
				if ($this->DevueltaDia == 0) {
					echo '<h5 class="good">Por lo tanto usted ha entregado la película a tiempo y no debe ningún tipo de comisión extra. </h5><br>';
				}else{
					echo "<h5> Usted ha entregado su película " . $this->DevueltaDia . " dias tarde y por lo tanto debe una comisión extra de: " . $this->DevueltaDia * 2 .  " euros. </h5><br>";
				}

			}elseif ($this->Estado == 1) {
				echo '<h5 class="error">Por lo tanto no puede alquilarla ahora mismo. Vuelva en unos días. </h5><br>';
			}
		}
	}	
?>

</body>
</html>