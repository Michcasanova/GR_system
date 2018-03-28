<?php
include('is_logged.php');//Archivo verifica que el usario que intenta acceder a la URL esta logueado
	/*Inicia validacion del lado del servidor*/
	if (empty($_POST['codigo'])) {
           $errors[] = "Código vacío";
        } else if (empty($_POST['nombre'])){
			$errors[] = "Nombre del producto vacío";
		} else if ($_POST['estado']==""){
			$errors[] = "Selecciona el estado del producto";
		} else if (empty($_POST['precio_producto'])){
			$errors[] = "Precio de venta vacío CHINGEM SU MADRE";
		} else if (
			!empty($_POST['codigo']) &&
			!empty($_POST['nombre']) &&
			$_POST['estado']!="" &&
			!empty($_POST['precio_producto'])
		){
		/* Connect To Database*/
		require_once ("../config/db.php");//Contiene las variables de configuracion para conectar a la base de datos
		require_once ("../config/conexion.php");//Contiene funcion que conecta a la base de datos
		// escaping, additionally removing everything that could be (html/javascript-) code
		$codigo=mysqli_real_escape_string($con,(strip_tags($_POST["codigo"],ENT_QUOTES)));
		$nombre=mysqli_real_escape_string($con,(strip_tags($_POST["nombre"],ENT_QUOTES)));
		$estado=intval($_POST['estado']);
		$precio_producto=floatval($_POST['precio_producto']);
		$date_added=date("Y-m-d H:i:s");
		$Generador=mysqli_real_escape_string($con,(strip_tags($_POST["Generador"],ENT_QUOTES)));
		$Nombre_generico=mysqli_real_escape_string($con,(strip_tags($_POST["Nombre_generico"],ENT_QUOTES)));
		$Codigo_nom=mysqli_real_escape_string($con,(strip_tags($_POST["Codigo_nom"],ENT_QUOTES)));
		$Crit=mysqli_real_escape_string($con,(strip_tags($_POST["Crit"],ENT_QUOTES)));
		$Estado_fisico=mysqli_real_escape_string($con,(strip_tags($_POST["Estado_fisico"],ENT_QUOTES)));
		$Unidad_medida=mysqli_real_escape_string($con,(strip_tags($_POST["Unidad_medida"],ENT_QUOTES)));
		$Destino_1=mysqli_real_escape_string($con,(strip_tags($_POST["Destino_1"],ENT_QUOTES)));
		$Destino_2=mysqli_real_escape_string($con,(strip_tags($_POST["Destino_2"],ENT_QUOTES)));
		$Destino_3=mysqli_real_escape_string($con,(strip_tags($_POST["Destino_3"],ENT_QUOTES)));
		$Destino_4=mysqli_real_escape_string($con,(strip_tags($_POST["Destino_4"],ENT_QUOTES)));
		$Destino_5=mysqli_real_escape_string($con,(strip_tags($_POST["Destino_5"],ENT_QUOTES)));
		$sql="INSERT INTO products (codigo_producto, nombre_producto, status_producto, date_added, precio_producto, Generador, Nombre_generico, Codigo_nom, Crit, estado_fisico, Unidad_medida, Destino_1, Destino_2, Destino_3, Destino_4, Destino_5) 
              		VALUES         ('$codigo','$nombre','$estado','$date_added','$precio_producto','$Generador','$Nombre_generico','$Codigo_nom','$Crit','$Estado_fisico','$Unidad_medida','$Destino_1','$Destino_2','$Destino_3','$Destino_4','$Destino_5')";
		$query_new_insert = mysqli_query($con,$sql);
			if ($query_new_insert){
				$messages[] = "Producto ha sido ingresado satisfactoriamente.";
			} else{
				$errors []= "Lo siento algo ha salido mal intenta nuevamente.".mysqli_error($con);
			}
		} else {
			$errors []= "Error desconocido.VALE VERGA";
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