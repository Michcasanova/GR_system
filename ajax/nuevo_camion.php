<?php
	include('is_logged.php');//Archivo verifica que el usario que intenta acceder a la URL esta logueado
	/*Inicia validacion del lado del servidor*/
	if (empty($_POST['Modelo'])) {
           $errors[] = "Modelo vacío";
        } else if (!empty($_POST['Modelo'])){
		/* Connect To Database*/
		require_once ("../config/db.php");//Contiene las variables de configuracion para conectar a la base de datos
		require_once ("../config/conexion.php");//Contiene funcion que conecta a la base de datos
		// escaping, additionally removing everything that could be (html/javascript-) code
		$Modelo=mysqli_real_escape_string($con,(strip_tags($_POST["Modelo"],ENT_QUOTES)));
		$Marca=mysqli_real_escape_string($con,(strip_tags($_POST["Marca"],ENT_QUOTES)));
		$Mat_chaciz=mysqli_real_escape_string($con,(strip_tags($_POST["Mat_chaciz"],ENT_QUOTES)));
		$Mat_mot=mysqli_real_escape_string($con,(strip_tags($_POST["Mat_mot"],ENT_QUOTES)));
		$Placas=mysqli_real_escape_string($con,(strip_tags($_POST["Placas"],ENT_QUOTES)));
		$Tipo_carga=mysqli_real_escape_string($con,(strip_tags($_POST["Tipo_carga"],ENT_QUOTES)));
		$carga_max=mysqli_real_escape_string($con,(strip_tags($_POST["carga_max"],ENT_QUOTES)));
		$Placas=mysqli_real_escape_string($con,(strip_tags($_POST["Placas"],ENT_QUOTES)));
		$Luces_del=mysqli_real_escape_string($con,(strip_tags($_POST["Luces_del"],ENT_QUOTES)));
		$Luces_tras=mysqli_real_escape_string($con,(strip_tags($_POST["Luces_tras"],ENT_QUOTES)));
		$Vida_neu=mysqli_real_escape_string($con,(strip_tags($_POST["Vida_neu"],ENT_QUOTES)));
		$Tipo_combustible=mysqli_real_escape_string($con,(strip_tags($_POST["Tipo_combustible"],ENT_QUOTES)));
		$Tarj_circ=mysqli_real_escape_string($con,(strip_tags($_POST["Tarj_circ"],ENT_QUOTES)));
		$observaciones=mysqli_real_escape_string($con,(strip_tags($_POST["observaciones"],ENT_QUOTES)));
		$status=intval($_POST['status']);
		$fecha_alta=date("Y-m-d H:i:s");
		
		
		$sql="INSERT INTO camiones (Modelo, Marca, Mat_chaciz, Mat_mot, Placas, Tipo_carga, carga_max, Luces_del, Luces_tras, Vida_neu, Tipo_combustible, Tarj_circ, observaciones, status, fecha_alta ) 
		VALUES ('$Modelo','$Marca','$Mat_chaciz','$Mat_mot','$Placas','$Tipo_carga','$carga_max','$Luces_del','$Luces_tras','$Vida_neu','$Tipo_combustible','$Tarj_circ','$observaciones','$status','$fecha_alta')";
		$query_new_insert = mysqli_query($con,$sql);
			if ($query_new_insert){
				$messages[] = "Conductor ha sido ingresado satisfactoriamente.";
			} else{
				$errors []= "Lo siento algo ha salido mal intenta nuevamente.".mysqli_error($con);
			}
		} else {
			$errors []= "Error desconocido.";
		}
		
		if (isset($errors)){
			
			?>
			<div class="alert alert-danger" role="alert">
				<button type="button" class="close" data-dismiss="alert">&times;</button>
					<strong>Error!</strong> 
					<?php
						foreach ($errors as $error) {
								echo $error;
							}
						?>
			</div>
			<?php
			}
			if (isset($messages)){
				
				?>
				<div class="alert alert-success" role="alert">
						<button type="button" class="close" data-dismiss="alert">&times;</button>
						<strong>¡Bien hecho!</strong>
						<?php
							foreach ($messages as $message) {
									echo $message;
								}
							?>
				</div>
				<?php
			}

?>