<!-- AÑADIR UNA RÚBRICA  -->
<div class="modal fade" id="cic_new" role="dialog">
	<div class="modal-dialog">
	   <!-- Modal content-->
		<div class="modal-content">
			{!! Form::open(['route' => 'mant_ciclo.store', 'method' => 'POST', 'class' => 'form-horizontal']) !!}
				<div class="modal-header">
					<div class="page-header">
						<h1>Nuevo ciclo</h1>
					</div>
					<div style="padding-left: 50px;">
						<div class="form-group">
							{!! Form::label('cic_nombre', 'Nombre del ciclo:&nbsp;') !!}
							{!! Form::text('cic_nombre', null, ['class' => 'input-xlarge', 'placeholder' => 'Nombre del ciclo']) !!}
						</div>
						<div class="form-group">
							{!! Form::label('cln_id', 'Cl&iacute;nica jur&iacute;dica:&nbsp;') !!}
							{!! Form::select('cln_id', $clinicas, null, ['class' => 'input-xlarge']) !!}
						</div>
						<div class="form-group">
							{!! Form::label('cic_fechaini', 'Fecha de inicio de clases:&nbsp;') !!}
							{!! Form::text('cic_fechaini', null, ['class' => 'input-large', 'placeholder' => 'Use el formato dd-mm-aaaa']) !!}
						</div>
						<div class="form-group">
							{!! Form::label('cic_fechafin', 'Fecha de fin de registros:&nbsp;') !!}
							{!! Form::text('cic_fechafin', null, ['class' => 'input-large', 'placeholder' => 'Use el formato dd-mm-aaaa']) !!}
						</div>
					</div>
				</div>                                  
				<div class="modal-footer">
					<div align="center">
						{!! Form::submit('Aceptar', ['class' => 'btn btn-info btn-sm']) !!}
						{!! Form::button('Cancelar', ['class' => 'btn btn-principal btn-sm', 'data-dismiss' => 'modal']) !!}
					</div>
				</div>
			{!! Form::close() !!}
	   </div>
   </div>
</div>

<!-- EDITAR UNA RÚBRICA -->
<div class="modal fade" id="cic_edit" role="dialog">
	<div class="modal-dialog">
	   <!-- Modal content-->
		<div class="modal-content">
			{!! Form::open(['route' => ['mant_ciclo.update', '0'], 'method' => 'PATCH', 'class' => 'form-horizontal']) !!}
				<div class="modal-header">
					<div class="page-header"><!-- /.page-header -->
						<h1>Editar ciclo</h1>
					</div>
					<div style="padding-left: 50px;">
						<div class="hidden">
							{!! Form::text('cic_edit_id', null, ['id' => 'cic_edit_id']) !!}
						</div>
						<div class="form-group">
							{!! Form::label('cic_edit_nombre', 'Nombre del ciclo:&nbsp;') !!}
							{!! Form::text('cic_edit_nombre', null, ['class' => 'input-xlarge', 'placeholder' => 'Nombre del ciclo']) !!}
						</div>
						<div class="form-group">
							{!! Form::label('cln_edit_id', 'Cl&iacute;nica jur&iacute;dica:&nbsp;') !!}
							{!! Form::select('cln_edit_id', $clinicas, null, ['class' => 'input-xlarge']) !!}
						</div>
						<div class="form-group">
							{!! Form::label('cic_edit_fechaini', 'Fecha de inicio de clases:&nbsp;') !!}
							{!! Form::text('cic_edit_fechaini', null, ['class' => 'input-large', 'placeholder' => 'Use el formato dd-mm-aaaa']) !!}
						</div>
						<div class="form-group">
							{!! Form::label('cic_edit_fechafin', 'Fecha de fin de registros:&nbsp;') !!}
							{!! Form::text('cic_edit_fechafin', null, ['class' => 'input-large', 'placeholder' => 'Use el formato dd-mm-aaaa']) !!}
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
<div class="modal fade" id="cic_del" role="dialog">
	<div class="modal-dialog">
	   <!-- Modal content-->
		<div class="modal-content">
			{!! Form::open(['route' => ['mant_ciclo.destroy', '0'], 'method' => 'DELETE', 'class' => 'form-horizontal']) !!}
				<div class="modal-header">
					<div class="page-header"><!-- /.page-header -->
						<h1>Eliminar ciclo</h1>
					</div>
					<div style="padding-left: 20px;">
						Va a eliminar este ciclo. &iquest;Est&aacute; seguro?<br />
						&iexcl;Recuerde que esta opci&oacute;n no se puede deshacer!
					</div>
					<div class="hidden">
						{!! Form::text('cic_del_id', null, ['id' => 'cic_del_id']) !!}
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