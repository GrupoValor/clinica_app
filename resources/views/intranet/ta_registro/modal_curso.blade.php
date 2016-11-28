<!-- AÑADIR UNA RÚBRICA  -->
<div class="modal fade" id="rubrica_store" role="dialog">
	<div class="modal-dialog">
	   <!-- Modal content-->
		<div class="modal-content">
			{!! Form::open(['route' => 'mant_curso.store', 'method' => 'POST', 'class' => 'form-horizontal']) !!}
				<div class="modal-header">
					<div class="page-header">
						<h1>Nueva r&uacute;brica</h1>
					</div>
					<div style="padding-left: 50px;">
						<div class="form-group">
							{!! Form::label('cur_codigo', 'C&oacute;digo interno del curso:&nbsp;') !!}
							{!! Form::text('cur_codigo', null, ['class' => 'input-xlarge', 'placeholder' => 'C&oacute;digo interno del curso']) !!}
						</div>
						<div class="form-group">
							{!! Form::label('cur_descrip', 'Nombre del curso:&nbsp;') !!}
							{!! Form::text('cur_descrip', null, ['class' => 'input-xlarge', 'placeholder' => 'Nombre del curso']) !!}
						</div>
					</div>
				</div>                                  
				<div class="modal-footer">
					<div align="center">
						{!! Form::submit('Aceptar', ['class' => 'btn btn-principal btn-sm']) !!}
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