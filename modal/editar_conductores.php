	<?php
		if (isset($con))
		{
	?>
	<!-- Modal -->
	<div class="modal fade" id="myModal2" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
	  <div class="modal-dialog" role="document">
		<div class="modal-content">
		  <div class="modal-header">
			<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
			<h4 class="modal-title" id="myModalLabel"><i class='glyphicon glyphicon-edit'></i> Editar Conductor</h4>
		  </div>
		  <div class="modal-body">
			<form class="form-horizontal" method="post" id="editar_conductor" name="editar_conductor">
			<div id="resultados_ajax2"></div>
			  <div class="form-group">
				<label for="mod_Nombre" class="col-sm-3 control-label">Nombre:</label>
				<div class="col-sm-8">
				  <input type="text" class="form-control" id="mod_Nombre" name="mod_Nombre" placeholder="Nombre" required>
					<input type="hidden" name="mod_id" id="mod_id">
				</div>
			  </div>
			   <div class="form-group">
				<label for="mod_Direccion" class="col-sm-3 control-label">Dirección:</label>
				<div class="col-sm-8">
				  <textarea class="form-control" id="mod_Direccion" name="mod_Direccion" placeholder="Dirección" required></textarea>
				</div>
			  </div>
				<div class="form-group">
				<label for="Seguro_social" class="col-sm-3 control-label">Seguro social:</label>
				<div class="col-sm-8">
				  <input type="text" class="form-control" id="Seguro_social" name="mod_coSeguro_socialdigo" placeholder="Seguro social" required>
				
				</div>
			  </div>
			  
			

			  <div class="form-group">
				<label for="mod_estado" class="col-sm-3 control-label">Tipo licencia:</label>
				<div class="col-sm-8">
				 <select class="form-control" id="mod_estado" name="mod_estado" required>
				 <option>-- Seleccione tipo licencia --</option>
				 <option>Tipo A</option>
				 <option>Tipo B</option>
				 <option>Tipo C</option>
				 <option>Tipo D</option>
				 <option>Tipo E</option>
				  </select>
				</div>
			  </div>
			 
			 
			 
			
		  </div>
		  <div class="modal-footer">
			<button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
			<button type="submit" class="btn btn-primary" id="actualizar_datos">Actualizar datos</button>
		  </div>
		  </form>
		</div>
	  </div>
	</div>
	<?php
		}
	?>