<?php
	include('is_logged.php');//Archivo verifica que el usario que intenta acceder a la URL esta logueado
	/*Inicia validacion del lado del servidor*/
	if (empty($_POST['Nombre'])) {
           $errors[] = "Nombre vacío ";
        } else if (!empty($_POST['Nombre'])){
		/* Connect To Database*/
		require_once ("../config/db.php");//Contiene las variables de configuracion para conectar a la base de datos
		require_once ("../config/conexion.php");//Contiene funcion que conecta a la base de datos
		// escaping, additionally removing everything that could be (html/javascript-) code
		$Nombre=mysqli_real_escape_string($con,(strip_tags($_POST["Nombre"],ENT_QUOTES)));
		$Direccion=mysqli_real_escape_string($con,(strip_tags($_POST["Direccion"],ENT_QUOTES)));
		$Seguro_social=mysqli_real_escape_string($con,(strip_tags($_POST["Seguro_social"],ENT_QUOTES)));
		//$tipo_licencia=intval($_POST['tipo_licencia']);
		$tipo_licencia=mysqli_real_escape_string($con,(strip_tags($_POST["tipo_licencia"],ENT_QUOTES)));
		$Num_licencia=mysqli_real_escape_string($con,(strip_tags($_POST["Num_licencia"],ENT_QUOTES)));
		$telefono=mysqli_real_escape_string($con,(strip_tags($_POST["telefono"],ENT_QUOTES)));
		$fam_cercano=mysqli_real_escape_string($con,(strip_tags($_POST["fam_cercano"],ENT_QUOTES)));
		$tel_fam=mysqli_real_escape_string($con,(strip_tags($_POST["tel_fam"],ENT_QUOTES)));
		$Antecedente_clinico=mysqli_real_escape_string($con,(strip_tags($_POST["Antecedente_clinico"],ENT_QUOTES)));
		$fecha_alta=date("Y-m-d H:i:s");
		$status=intval($_POST['status']);
		
		$sql="INSERT INTO conductores (Nombre, Direccion, Seguro_social, tipo_licencia, Num_licencia, telefono, fam_cercano, tel_fam, Antecedente_clinico, fecha_alta, status ) VALUES ('$Nombre','$Direccion','$Seguro_social','$tipo_licencia','$Num_licencia','$telefono','$fam_cercano','$tel_fam','$Antecedente_clinico','$fecha_alta','$status')";
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