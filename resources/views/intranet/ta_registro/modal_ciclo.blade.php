<!-- AÑADIR UNA RÚBRICA  -->
<div class="modal fade" id="cur_new" role="dialog">
	<div class="modal-dialog">
	   <!-- Modal content-->
		<div class="modal-content">
			{!! Form::open(['route' => 'mant_curso.store', 'method' => 'POST', 'class' => 'form-horizontal']) !!}
				<div class="modal-header">
					<div class="page-header">
						<h1>Nuevo curso</h1>
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
						<div class="form-group">
							{!! Form::label('cln_id', 'Cl&iacute;nica jur&iacute;dica:&nbsp;') !!}
							{!! Form::select('cln_id', $clinicas, null, ['class' => 'input-xlarge']) !!}
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
<div class="modal fade" id="cur_edit" role="dialog">
	<div class="modal-dialog">
	   <!-- Modal content-->
		<div class="modal-content">
			{!! Form::open(['route' => ['mant_curso.update', '0'], 'method' => 'PATCH', 'class' => 'form-horizontal']) !!}
				<div class="modal-header">
					<div class="page-header"><!-- /.page-header -->
						<h1>Editar curso</h1>
					</div>
					<div style="padding-left: 50px;">
						<div class="hidden">
							{!! Form::text('cur_edit_id', null, ['id' => 'cur_edit_id']) !!}
						</div>
						<div class="form-group">
							{!! Form::label('cur_edit_codigo', 'C&oacute;digo interno del curso:&nbsp;') !!}
							{!! Form::text('cur_edit_codigo', null, ['class' => 'input-xlarge']) !!}
						</div>
						<div class="form-group">
							{!! Form::label('cur_edit_descrip', 'Nombre del curso:&nbsp;') !!}
							{!! Form::text('cur_edit_descrip', null, ['class' => 'input-xlarge']) !!}
						</div>
						<div class="form-group">
							{!! Form::label('cln_edit_id', 'Cl&iacute;nica jur&iacute;dica:&nbsp;') !!}
							{!! Form::select('cln_edit_id', $clinicas, null, ['class' => 'input-xlarge', 'id' => 'cln_edit_id']) !!}
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
<div class="modal fade" id="cur_del" role="dialog">
	<div class="modal-dialog">
	   <!-- Modal content-->
		<div class="modal-content">
			{!! Form::open(['route' => ['mant_curso.destroy', '0'], 'method' => 'DELETE', 'class' => 'form-horizontal']) !!}
				<div class="modal-header">
					<div class="page-header"><!-- /.page-header -->
						<h1>Eliminar curso</h1>
					</div>
					<div style="padding-left: 20px;">
						Va a eliminar este curso. &iquest;Est&aacute; seguro?<br />
						&iexcl;Recuerde que esta opci&oacute;n no se puede deshacer!
					</div>
					<div class="hidden">
						{!! Form::text('cur_del_id', null, ['id' => 'cur_del_id']) !!}
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