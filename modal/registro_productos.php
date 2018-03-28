	<?php
		if (isset($con))
		{
	?>
	<!-- Modal -->
	<div class="modal fade" id="nuevoProducto" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
	  <div class="modal-dialog" role="document">
		<div class="modal-content">
		  <div class="modal-header">
			<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
			<h4 class="modal-title" id="myModalLabel"><i class='glyphicon glyphicon-edit'></i> Agregar nuevo producto</h4>
		  </div>
		  <div class="modal-body">
			<form class="form-horizontal" method="post" id="guardar_producto" name="guardar_producto">
			<div id="resultados_ajax_productos"></div>
			  <div class="form-group">
				<label for="codigo" class="col-sm-3 control-label">CLAVE GR MATERIAL :</label>
				<div class="col-sm-8">
				  <input type="text" class="form-control" id="codigo" name="codigo" placeholder="CLAVE GR MATERIAL" required>
				</div>
			  </div>
			  
			  <div class="form-group">
				<label for="nombre" class="col-sm-3 control-label">Nombre :</label>
				<div class="col-sm-8">
					<textarea class="form-control" id="nombre" name="nombre" placeholder="Nombre como puede aparecer en el manifiesto" required maxlength="255" ></textarea>
				  
				</div>
			  </div>
				<div class="form-group">
				<label for="Generador" class="col-sm-3 control-label">Generador :</label>
				<div class="col-sm-8">
					<input class="form-control" id="Generador" name="Generador" placeholder="Generador" required maxlength="255" ></input>
				  
				</div>
			  </div>

				
				<div class="form-group">
				<label for="Nombre_generico" class="col-sm-3 control-label">Nombre generico de material conforme a NORMA :</label>
				<div class="col-sm-8">
					<input class="form-control" id="Nombre_generico" name="Nombre_generico" placeholder="Nombre_generico" required maxlength="255" ></input>
				  
				</div>
			  </div>

				
				<div class="form-group">
				<label for="Codigo_nom" class="col-sm-3 control-label">Codigo_nom :</label>
				<div class="col-sm-8">
					<input class="form-control" id="Codigo_nom" name="Codigo_nom" placeholder="Codigo_nom" required maxlength="255" ></input>
				  
				</div>
			  </div>

				
				<div class="form-group">
				<label for="Crit" class="col-sm-3 control-label">Crit :</label>
				<div class="col-sm-8">
				  <input type="text" class="form-control" id="Crit" name="Crit" placeholder="CRIT" required>
				</div>
			  </div>

				
				<div class="form-group">
				<label for="precio_producto" class="col-sm-3 control-label">NÚMERO UN :</label>
				<div class="col-sm-8">
					<input class="form-control" id="precio_producto" name="precio_producto" placeholder="Número UN" required maxlength="255" ></input>
				  
				</div>
			  </div>

				<div class="form-group">
				<label for="Estado_fisico" class="col-sm-3 control-label">Estado fisico :</label>
				<div class="col-sm-8">
				 <select class="form-control" id="Estado_fisico" name="Estado_fisico" required>
				 <option>-- Estado fisico --</option>
				 <option>LIQUIDO ACUOSO</option>
				 <option>LIQUIDO NO ACUOSO</option>
				 <option>SOLIDO</option>
				 <option>SEMI SOLIDO</option>
				 <option>Otro</option>
				  </select>
				</div>
			  </div>

				<div class="form-group">
				<label for="Unidad_medida" class="col-sm-3 control-label">Unidad Medida :</label>
				<div class="col-sm-8">
				 <select class="form-control" id="Unidad_medida" name="Unidad_medida" required>
				 <option>-- UNIDAD MEDIDA --</option>
				 <option>KG.</option>
				 <option>litros.</option>
				 <option>Toneladas.</option>
				  </select>
				</div>
			  </div>

				
				<div class="form-group">
				<label for="Destino_1" class="col-sm-3 control-label">Destino_1</label>
				<div class="col-sm-8">
					<input type="Destino_1" class="form-control" id="Destino_1" name="Destino_1" >
				  
				</div>
			  </div>
			 

						
				<div class="form-group">
				<label for="Destino_2" class="col-sm-3 control-label">Destino 2 :</label>
				<div class="col-sm-8">
					<input class="form-control" id="Destino_2" name="Destino_2" placeholder="Destino_2" required maxlength="255" ></input>
				  
				</div>
			  </div>

						
				<div class="form-group">
				<label for="Destino_3" class="col-sm-3 control-label">Destino 3 :</label>
				<div class="col-sm-8">
					<input class="form-control" id="Destino_3" name="Destino_3" placeholder="Destino_3" required maxlength="255" ></input>
				  
				</div>
			  </div>

						
				<div class="form-group">
				<label for="Destino_4" class="col-sm-3 control-label">Destino 4 :</label>
				<div class="col-sm-8">
					<input class="form-control" id="Destino_4" name="Destino_4" placeholder="Destino_4" required maxlength="255" ></input>
				  
				</div>
			  </div>

						
				<div class="form-group">
				<label for="Destino_5" class="col-sm-3 control-label">Destino 5 :</label>
				<div class="col-sm-8">
					<input class="form-control" id="Destino_5" name="Destino_5" placeholder="Destino_5" required maxlength="255" ></input>
				  
				</div>
			  </div>

			  
			  <div class="form-group">
				<label for="estado" class="col-sm-3 control-label">Estado</label>
				<div class="col-sm-8">
				 <select class="form-control" id="estado" name="estado" required>
					<option value="">-- Selecciona estado --</option>
					<option value="1" selected>Activo</option>
					<option value="0">Inactivo</option>
				  </select>
				</div>
			  </div>
		
			 
			 
			
		  </div>
		  <div class="modal-footer">
			<button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
			<button type="submit" class="btn btn-primary" id="guardar_datos">Guardar datos</button>
		  </div>
		  </form>
		</div>
	  </div>
	</div>
	<?php
		}
	?>