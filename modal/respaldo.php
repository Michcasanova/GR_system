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
				<!--                                Edicion                                                -->
			  <div class="form-group">
				<label for="mod_Nombre" class="col-sm-3 control-label">Nombre</label>
				<div class="col-sm-8">
				  <input type="text" class="form-control" id="mod_Nombre" name="mod_Nombre"  required>
					<input type="hidden" name="mod_id_conductor" id="mod_id_conductor">
				</div>
			  </div>
				<!--                                Edicion                                                -->
				<div class="form-group">
				<label for="mod_Direccion" class="col-sm-3 control-label">Dirección</label>
				<div class="col-sm-8">
				  <input type="text" class="form-control" id="mod_Direccion" name="mod_Direccion"  required>
					<input type="hidden" name="mod_id_conductor" id="mod_id_conductor">
				</div>
			  </div>
				<!--                                Edicion                                                -->
				<div class="form-group">
				<label for="mod_Seguro_social" class="col-sm-3 control-label"># Seguro social</label>
				<div class="col-sm-8">
				  <input type="text" class="form-control" id="mod_Seguro_social" name="mod_Seguro_social"  required>
					<input type="hidden" name="mod_id_conductor" id="mod_id_conductor">
				</div>
			  </div>
				<!--                                Edicion                                                -->
				<div class="form-group">
				<label for="mod_tipo_licencia" class="col-sm-3 control-label">Tipo de licencia</label>
				<div class="col-sm-8">
				 <select class="form-control" id="mod_tipo_licencia" name="mod_licencia" required>
				 <option>-- Seleccione tipo licencia --</option>
				 <option>Tipo A</option>
				 <option>Tipo B</option>
				 <option>Tipo C</option>
				 <option>Tipo D</option>
				 <option>Tipo E</option>
				  </select>
				</div>
			  </div>
					<!--                                Edicion                                                -->
					<div class="form-group">
				<label for="mod_Num_licencia" class="col-sm-3 control-label"># de licencia</label>
				<div class="col-sm-8">
				  <input type="text" class="form-control" id="mod_Num_licencia" name="mod_Num_licencia"  required>
					<input type="hidden" name="mod_id_conductor" id="mod_id_conductor">
				</div>
			  </div>
					<!--                                Edicion                                                -->
					<div class="form-group">
					<label for="mod_telefono" class="col-sm-3 control-label"># Teléfono</label>
					<div class="col-sm-8">
						<input type="text" class="form-control" id="mod_telefono" name="mod_telefono"  required>
						<input type="hidden" name="mod_id_conductor" id="mod_id_conductor">
					</div>
					</div>
			  	<!--                                Edicion                                                -->
					<div class="form-group">
					<label for="mod_fam_cercano" class="col-sm-3 control-label">Nombre Fam. cercano</label>
					<div class="col-sm-8">
						<input type="text" class="form-control" id="mod_fam_cercano" name="mod_fam_cercano"  required>
						<input type="hidden" name="mod_id_conductor" id="mod_id_conductor">
					</div>
					</div>
			  	<!--                                Edicion                                                -->
					<div class="form-group">
					<label for="mod_tel_fam" class="col-sm-3 control-label">Tel. Fam. cercano</label>
					<div class="col-sm-8">
						<input type="text" class="form-control" id="mod_tel_fam" name="mod_tel_fam"  required>
						<input type="hidden" name="mod_id_conductor" id="mod_id_conductor">
					</div>
					</div>
					<!--                                Edicion                                                -->
					<div class="form-group">
					<label for="mod_Antecedente_clinico" class="col-sm-3 control-label">Antecedente Clinico</label>
					<div class="col-sm-8">
						<input type="text" class="form-control" id="mod_Antecedente_clinico" name="mod_Antecedente_clinico"  required>
						<input type="hidden" name="mod_id_conductor" id="mod_id_conductor">
					</div>
					</div>
						<!--                                Edicion                                                -->
						<div class="form-group">
						<label for="mod_status" class="col-sm-3 control-label">Estado</label>
						<div class="col-sm-8">
						 <select class="form-control" id="mod_status" name="mod_status" required>
							<option value="">-- Selecciona estado --</option>
							<option value="1" selected>Activo</option>
							<option value="0">Inactivo</option>
							</select>
						</div>
						</div>
					 
			  	<!--                                Edicion                                                -->