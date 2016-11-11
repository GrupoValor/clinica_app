<!-- ELIMINAR TODO EL PERIODO  -->
					<div class="modal fade" id="periodo_delete" role="dialog">
						<div class="modal-dialog">
						   <!-- Modal content-->
							<div class="modal-content">
								{!! Form::open(['route' => ['ta_registro.destroy', $periodo['per_id']], 'method' => 'DELETE', 'class' => 'form-horizontal']) !!}
									<div class="modal-header">
										<div class="page-header"><!-- /.page-header -->
											<h1>Eliminar todas las r&uacute;bricas</h1>
										</div>
										<div style="padding-left: 20px;">
											Va a eliminar este periodo acad&eacute;mico y todas sus r&uacute;bricas. &iquest;Est&aacute; seguro? <br />
											&iexcl;Recuerde que esta opci&oacute;n no se puede deshacer!
										</div>
									</div>                                  
									<div class="modal-footer">
										<div align="center">
											{!! Form::submit('Eliminar', ['class' => 'btn btn-danger btn-sm']) !!}
											{!! Form::button('Cancelar', ['class' => 'btn btn-principal btn-sm', 'data-dismiss' => 'modal']) !!}
										</div>
									</div>
								{!! Form::close() !!}
						   </div>
					   </div>
					</div>
					
<!-- AÑADIR UNA RÚBRICA  -->
					<div class="modal fade" id="rubrica_store" role="dialog">
						<div class="modal-dialog">
						   <!-- Modal content-->
							<div class="modal-content">
								{!! Form::open(['route' => 'rubrica.store', 'method' => 'POST', 'class' => 'form-horizontal']) !!}
									<div class="modal-header">
										<div class="page-header"><!-- /.page-header -->
											<h1>A&ntilde;adir una r&uacute;brica</h1>
										</div>
										<div style="padding-left: 50px;">
											<div class="form-group">
												{!! Form::label('rba_nombre', 'Nombre de la r&uacute;brica:&nbsp;') !!}
												{!! Form::text('rba_nombre', null, ['class' => 'input-xlarge', 'placeholder' => 'Nombre de la r&uacute;brica']) !!}
											</div>
											<div class="form-group">
												{!! Form::label('rba_peso', 'Peso de la r&uacute;brica:&nbsp;') !!}
												{!! Form::text('rba_peso', null, ['class' => 'input-xlarge', 'placeholder' => 'Peso de la r&uacute;brica']) !!}
											</div>
											<div class="hidden">
												{!! Form::text('per_id', $periodo['per_id']) !!}
											</div>
										</div>
									</div>                                  
									<div class="modal-footer">
										<div align="center">
											{!! Form::submit('Guardar', ['class' => 'btn btn-info btn-sm']) !!}
											{!! Form::button('Cancelar', ['class' => 'btn btn-principal btn-sm', 'data-dismiss' => 'modal']) !!}
										</div>
									</div>
								{!! Form::close() !!}
						   </div>
					   </div>
					</div>

<!-- EDITAR UNA RÚBRICA -->
					<div class="modal fade" id="rubrica_update" role="dialog">
						<div class="modal-dialog">
						   <!-- Modal content-->
							<div class="modal-content">
								{!! Form::open(['route' => ['rubrica.update', '0'], 'method' => 'PATCH', 'class' => 'form-horizontal']) !!}
									<div class="modal-header">
										<div class="page-header"><!-- /.page-header -->
											<h1>Editar r&uacute;brica</h1>
										</div>
										<div style="padding-left: 50px;">
											<div class="form-group">
												{!! Form::label('rba_edit_nombre', 'Nombre de la r&uacute;brica:&nbsp;') !!}
												{!! Form::text('rba_edit_nombre', null, ['class' => 'input-xlarge']) !!}
											</div>
											<div class="form-group">
												{!! Form::label('rba_edit_peso', 'Peso de la r&uacute;brica:&nbsp;') !!}
												{!! Form::text('rba_edit_peso', null, ['class' => 'input-xlarge']) !!}
											</div>
											<div class="hidden">
												{!! Form::text('rba_edit_id', null, ['id' => 'rba_edit_id']) !!}
											</div>
										</div>
									</div>                                  
									<div class="modal-footer">
										<div align="center">
											{!! Form::submit('Guardar', ['class' => 'btn btn-info btn-sm']) !!}
											{!! Form::button('Cancelar', ['class' => 'btn btn-principal btn-sm', 'data-dismiss' => 'modal']) !!}
										</div>
									</div>
								{!! Form::close() !!}
						   </div>
					   </div>
					</div>

<!-- ELIMINAR UNA RÚBRICA -->
					<div class="modal fade" id="rubrica_delete" role="dialog">
						<div class="modal-dialog">
						   <!-- Modal content-->
							<div class="modal-content">
								{!! Form::open(['route' => ['rubrica.destroy', '0'], 'method' => 'DELETE', 'class' => 'form-horizontal']) !!}
									<div class="modal-header">
										<div class="page-header"><!-- /.page-header -->
											<h1>Eliminar r&uacute;brica</h1>
										</div>
										<div style="padding-left: 20px;">
											Va a eliminar esta r&uacute;brica y todos sus rubros. &iquest;Est&aacute; seguro?
											<br />&iexcl;Recuerde que esta opci&oacute;n no se puede deshacer!
										</div>
										<div class="hidden">
											{!! Form::text('rba_delete_id', null, ['id' => 'rba_delete_id']) !!}
										</div>
									</div>                                  
									<div class="modal-footer">
										<div align="center">
											{!! Form::submit('Eliminar', ['class' => 'btn btn-danger btn-sm']) !!}
											{!! Form::button('Cancelar', ['class' => 'btn btn-principal btn-sm', 'data-dismiss' => 'modal']) !!}
										</div>
									</div>
								{!! Form::close() !!}
						   </div>
					   </div>
					</div>

<!-- AÑADIR UN RUBRO -->
					<div class="modal fade" id="rubro_store" role="dialog">
						<div class="modal-dialog">
							<div class="modal-content">
								{!! Form::open(['route' => 'rubro.store', 'method' => 'POST', 'class' => 'form-horizontal']) !!}
									<div class="modal-header">
										<div class="page-header">
											<h1>Agregar un rubro a una r&uacute;brica</h1>
										</div>
										<div style="padding-left: 50px;">
											<div class="form-group">
												{!! Form::label('rbo_nombre', 'T&iacute;tulo del rubro:&nbsp;') !!}
												{!! Form::text('rbo_nombre', null, ['class' => 'input-xlarge', 'placeholder' => 'T&iacute;tulo del rubro']) !!}
											</div>
											<div class="form-group">
												{!! Form::label('rbo_maxpunt', 'M&aacute;ximo puntaje:&nbsp;') !!}
												{!! Form::text('rbo_maxpunt', null, ['class' => 'input-xlarge', 'placeholder' => 'M&aacute;ximo puntaje del rubro']) !!}
											</div>
											<div class="hidden">
												{!! Form::text('rba_add_id', null, ['id' => 'rba_add_id']) !!}
											</div>
										</div>
									</div>                                  
									<div class="modal-footer">
										<div align="center">
											{!! Form::submit('Guardar', ['class' => 'btn btn-info btn-sm']) !!}
											{!! Form::button('Cancelar', ['class' => 'btn btn-principal btn-sm', 'data-dismiss' => 'modal']) !!}
										</div>
									</div>
								{!! Form::close() !!}
						   </div>
					   </div>
					</div>

<!-- EDITAR UN RUBRO -->
					<div class="modal fade" id="rubro_update" role="dialog">
						<div class="modal-dialog">
						   <!-- Modal content-->
							<div class="modal-content">
								{!! Form::open(['route' => ['rubro.update', '0'], 'method' => 'PATCH', 'class' => 'form-horizontal']) !!}
									<div class="modal-header">
										<div class="page-header"><!-- /.page-header -->
											<h1>Editar un rubro</h1>
										</div>
										<div style="padding-left: 50px;">
											<div class="form-group">
												{!! Form::label('rbo_edit_nombre', 'T&iacute;tulo del rubro:&nbsp;') !!}
												{!! Form::text('rbo_edit_nombre', null, ['class' => 'input-xlarge']) !!}
											</div>
											<div class="form-group">
												{!! Form::label('rbo_edit_maxpunt', 'M&aacute;ximo puntaje:&nbsp;') !!}
												{!! Form::text('rbo_edit_maxpunt', null, ['class' => 'input-xlarge']) !!}
											</div>
											<div class="hidden">
												{!! Form::text('rbo_edit_id', null, ['id' => 'rbo_edit_id']) !!}
											</div>
										</div>
									</div>                                  
									<div class="modal-footer">
										<div align="center">
											{!! Form::submit('Guardar', ['class' => 'btn btn-info btn-sm']) !!}
											{!! Form::button('Cancelar', ['class' => 'btn btn-principal btn-sm', 'data-dismiss' => 'modal']) !!}
										</div>
									</div>
								{!! Form::close() !!}
						   </div>
					   </div>
					</div>

<!-- ELIMINAR UN RUBRO -->
					<div class="modal fade" id="rubro_delete" role="dialog">
						<div class="modal-dialog">
						   <!-- Modal content-->
							<div class="modal-content">
								{!! Form::open(['route' => ['rubro.destroy', '0'], 'method' => 'DELETE', 'class' => 'form-horizontal']) !!}
									<div class="modal-header">
										<div class="page-header"><!-- /.page-header -->
											<h1>Eliminar este rubro</h1>
										</div>
										<div style="padding-left: 20px;">
											Va a eliminar este rubro. &iquest;Est&aacute; seguro?<br />
											&iexcl;Recuerde que esta opci&oacute;n no se puede deshacer!
										</div>
										<div class="hidden">
											{!! Form::text('rbo_delete_id', null, ['id' => 'rbo_delete_id']) !!}
										</div>
									</div>                                  
									<div class="modal-footer">
										<div align="center">
											{!! Form::submit('Eliminar', ['class' => 'btn btn-danger btn-sm']) !!}
											{!! Form::button('Cancelar', ['class' => 'btn btn-principal btn-sm', 'data-dismiss' => 'modal']) !!}
										</div>
									</div>
								{!! Form::close() !!}
						   </div>
					   </div>
					</div>
