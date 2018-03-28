<?php
		if (isset($con))
		{
	?>
	<!-- Modal -->
	<div class="modal fade" id="Camion" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
	  <div class="modal-dialog" role="document">
		<div class="modal-content">
		  <div class="modal-header">
			<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
			<h4 class="modal-title" id="myModalLabel"><i class='glyphicon glyphicon-edit'></i> Agregar nuevo camion</h4>
		  </div>
		  <div class="modal-body">
			<form class="form-horizontal" method="post" id="guardar_camion" name="guardar_camion">
			<div id="resultados_ajax"></div>
			  
				<div class="form-group">
				<label for="Modelo" class="col-sm-3 control-label">Modelo :</label>
				<div class="col-sm-8">
				  <input type="text" class="form-control" id="Modelo" name="Modelo" required>
				</div>
			  </div>

				<div class="form-group">
				<label for="Marca" class="col-sm-3 control-label">Marca :</label>
				<div class="col-sm-8">
				<input type="text" class="form-control" id="Marca" name="Marca" required>
				</div>
			  </div>

				<div class="form-group">
				<label for="Mat_chaciz" class="col-sm-3 control-label">Matricula de chasis :</label>
				<div class="col-sm-8">
				<input type="text" class="form-control" id="Mat_chaciz" name="Mat_chaciz" required>
				</div>
			  </div>

				<div class="form-group">
				<label for="Mat_mot" class="col-sm-3 control-label">Matricula de motor :</label>
				<div class="col-sm-8">
				<input type="text" class="form-control" id="Mat_mot" name="Mat_mot" required>
				</div>
			  </div>

				<div class="form-group">
				<label for="Placas" class="col-sm-3 control-label">Placas :</label>
				<div class="col-sm-8">
				<input type="text" class="form-control" id="Placas" name="Placas" required>
				</div>
			  </div>

				<div class="form-group">
				<label for="Tipo_carga" class="col-sm-3 control-label">Tipo de caja :</label>
				<div class="col-sm-8">
				 <select class="form-control" id="Tipo_carga" name="Tipo_carga" required>
				 <option>-- Seleccione Tipo de caja --</option>
				 <option>Caja seca</option>
				 <option>Tanque</option>
				 <option>Tolva</option>
				 <option>Jaula</option>
				 <option>Otro</option>
				</select>
				</div>
			  </div>

				<div class="form-group">
				<label for="carga_max" class="col-sm-3 control-label">Carga Max. :</label>
				<div class="col-sm-8">
				<input type="text" class="form-control" id="carga_max" name="carga_max" required>
				</div>
			  </div>

				<div class="form-group">
				<label for="Luces_del" class="col-sm-3 control-label">Vida de luces delanteras :</label>
				<div class="col-sm-8">
				 <select class="form-control" id="Luces_del" name="Luces_del" required>
				 <option>-- Seleccione vida de luces--</option>
				 <option>90 % o más</option>
				 <option>80 % </option>
				 <option>70 %</option>
				 <option>60 %</option>
				 <option>50 % o ménos</option>
				</select>
				</div>
			  </div>

				<div class="form-group">
				<label for="Luces_tras" class="col-sm-3 control-label">Vida de luces traseras :</label>
				<div class="col-sm-8">
				 <select class="form-control" id="Luces_tras" name="Luces_tras" required>
				 <option>-- Seleccione vida de luces --</option>
				 <option>90 % o más</option>
				 <option>80 % </option>
				 <option>70 %</option>
				 <option>60 %</option>
				 <option>50 % o ménos</option>
				</select>
				</div>
			  </div>

				<div class="form-group">
				<label for="Vida_neu" class="col-sm-3 control-label">Vida de neumaticos :</label>
				<div class="col-sm-8">
				 <select class="form-control" id="Vida_neu" name="Vida_neu" required>
				 <option>-- Seleccione vida de neumaticos --</option>
				 
				 <option>Mas del 50 % </option>
				 <option>Menos del 50 % </option>
				 <option>Necesitan cambio </option>
				</select>
				</div>
			  </div>

				<div class="form-group">
				<label for="Tipo_combustible" class="col-sm-3 control-label">Tipo de combustible :</label>
				<div class="col-sm-8">
				 <select class="form-control" id="Tipo_combustible" name="Tipo_combustible" required>
				 <option>-- Seleccione Tipo de combustible --</option>
				 <option>Gasolina</option>
				 <option>Diésel </option>
				 <option>Etanol</option>
				 <option>Gas Natural</option>
				 <option>Electricidad</option>
				 <option>Hidrógeno</option>
				 <option>GPL </option>
				 <option>Biodiesel</option>
				 <option>Metanol</option>
				 <option>Combustibles P-Serie</option>
				 <option>Otro</option>
				</select>
				</div>
			  </div>
				<!--tarjeta de circulacion foto, autorizaciones semarnat y sct, poliza seguro formato en pdf vigencia -->
				<div class="form-group">
				<label for="Tarj_circ" class="col-sm-3 control-label">Tarjeta de circulación. :</label>
				<div class="col-sm-8">
				<input type="text" class="form-control" id="Tarj_circ" name="Tarj_circ" required>
				</div>
			  </div>

				 
			  <div class="form-group">
				<label for="observaciones" class="col-sm-3 control-label">Observaciónes :</label>
				<div class="col-sm-8">
					<textarea class="form-control" id="observaciones" name="observaciones"   maxlength="255" ></textarea>
				</div>
			  </div>

				
			  <div class="form-group">
				<label for="status" class="col-sm-3 control-label">Estado</label>
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
			<button type="submit" class="btn btn-primary" id="guardar_dat1">Guardar datos</button>
		  </div>
		  </form>
		</div>
	  </div>
	</div>
	<?php
		}
	?>