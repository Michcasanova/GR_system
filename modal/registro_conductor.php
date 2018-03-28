<?php
		if (isset($con))
		{
	?>
	<!-- Modal -->
	<div class="modal fade" id="Conductor" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
	  <div class="modal-dialog" role="document">
		<div class="modal-content">
		  <div class="modal-header">
			<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
			<h4 class="modal-title" id="myModalLabel"><i class='glyphicon glyphicon-edit'></i> Agregar nuevo conductor</h4>
		  </div>
		  <div class="modal-body">
			<form class="form-horizontal" method="post" id="guardar_conductor" name="guardar_conductor">
			<div id="resultados_ajax"></div>
			  <div class="form-group">
				<label for="Nombre" class="col-sm-3 control-label">Nombre :</label>
				<div class="col-sm-8">
				  <input type="text" class="form-control" id="Nombre" name="Nombre" required>
				</div>
			  </div>

				<div class="form-group">
				<label for="Direccion" class="col-sm-3 control-label">Dirección:</label>
				<div class="col-sm-8">
					<textarea class="form-control" id="Direccion" name="Direccion"   maxlength="255" ></textarea>
				  
				</div>
			  </div>
				
			  
			  
			  <div class="form-group">
				<label for="Seguro_social" class="col-sm-3 control-label">Número de Seguro Social :</label>
				<div class="col-sm-8">
					<input type="Seguro_social" class="form-control" id="Seguro_social" name="Seguro_social" >
				  
				</div>
			  </div>
				

				<!--<div class="form-group">
				<label for="tipo_licencia" class="col-sm-3 control-label">Tipo de licencia</label>
				<div class="col-sm-8">
					<input type="tipo_licencia" class="form-control" id="tipo_licencia" name="tipo_licencia" >
							
				</div>
			  </div> 
				-->
				<div class="form-group">
				<label for="tipo_licencia" class="col-sm-3 control-label">Tipo licencia :</label>
				<div class="col-sm-8">
				 <select class="form-control" id="tipo_licencia" name="tipo_licencia" required>
				 <option>-- Seleccione tipo licencia --</option>
				 <option>Tipo A</option>
				 <option>Tipo B</option>
				 <option>Tipo C</option>
				 <option>Tipo D</option>
				 <option>Tipo E</option>
				  </select>
				</div>
			  </div>
<!--
				<label for="tipo_licencia" class="col-sm-3 control-label">Tipo de licencia</label>
				<select class="form-control" id="tipo_licencia" name="tipo_licencia" >
										<option>1</option>
										<option>2</option>
										<option>3</option>
										<option>4</option>
										<option>5</option>
				</select>
				//vigencia licencia 
				//vigencia examen 
				//tipo de unidad < tipo de carga
				//ver
		-->		
				<div class="form-group">
				<label for="Num_licencia" class="col-sm-3 control-label">Número de licencia :</label>
				<div class="col-sm-8">
					<input type="Num_licencia" class="form-control" id="Num_licencia" name="Num_licencia" >
				  
				</div>
			  </div>
          
					  <div class="form-group">
				<label for="telefono" class="col-sm-3 control-label">Teléfono :</label>
				<div class="col-sm-8">
					<input type="telefono" class="form-control" id="telefono" name="telefono" >
				  
				</div>
			  </div>
            <div class="form-group">
				<label for="fam_cercano" class="col-sm-3 control-label">Nombre de familiar cercano :</label>
				<div class="col-sm-8">
					<input type="fam_cercano" class="form-control" id="fam_cercano" name="fam_cercano" >
				  
				</div>
			  </div>
			 
				<div class="form-group">
				<label for="tel_fam" class="col-sm-3 control-label">Teléfono :</label>
				<div class="col-sm-8">
					<input type="tel_fam" class="form-control" id="tel_fam" name="tel_fam" >
				  
				</div>
			  </div>


				<div class="form-group">
				<label for="Antecedente_clinico" class="col-sm-3 control-label">Antecedente clinico :</label>
				<div class="col-sm-8">
					<input type="Antecedente_clinico" class="form-control" id="Antecedente_clinico" name="Antecedente_clinico" >
				  
				</div>
			  </div>
				
	
				
				<div class="form-group">
				<label for="status" class="col-sm-3 control-label">Estado :</label>
				<div class="col-sm-8">
				 <select class="form-control" id="status" name="status" required>
					<option value="">-- Selecciona estado --</option>
					<option value="1" selected>Activo</option>
					<option value="0">Inactivo</option>
				  </select>
				</div>
			  </div>
				
			 
			 
			
		  </div>
		  <div class="modal-footer">
			<button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
			<button type="submit" class="btn btn-primary" id="guardar_dat">Guardar datos</button>
		  </div>
		  </form>
		</div>
	  </div>
	</div>
	<?php
		}
	?>