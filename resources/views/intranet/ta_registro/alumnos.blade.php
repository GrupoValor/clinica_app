{!! Form::open(['url' => 'ta_registro_alumno', 'method' => 'POST', 'class' => 'form-horizontal']) !!}
	<div class="row">
		<div class="col-xs-12">
			<table class="table  table-bordered table-hover">
				<thead>
					<th></th>
					<th>C&oacute;digo</th>
					<th>Nombre</th>
				</thead>
				<tbody>
@if (empty($alumnos))
					<tr>
						<td colspan="3">No se encontr&oacute; ning&uacute;n alumno.</td>
					</tr>
@endif
@foreach ($alumnos as $alumno)
					<tr>
						<td>
							<input type="checkbox" name="alumno[{{$alumno['alu_id']}}]" value="{{ !empty($alumno['per_id']) ? 'true' : 'false'}}" id="alumno[{{$alumno['alu_id']}}]" onchange="cambiarCheckbox({{$alumno['alu_id']}})" checked/>
						</td>
						<td>{{ $alumno['alu_codigo'] }}</td>
						<td>{{ $alumno['alu_nombre'] }}</td>
					</tr>
@endforeach
				</tbody>
			</table>
		</div>
	</div>
	<div class="center">
		<button class="btn btn-info" type="submit">
			<i class="ace-icon fa fa-undo bigger-110"></i>
			Guardar
		</button>
		&nbsp;
		<a href="rubrica?curso={{$periodo['cur_id']}}&ciclo={{$periodo['cic_id']}}">
			<button class="btn" type="button">
				<i class="ace-icon fa fa-undo bigger-110"></i>
				Regresar
			</button>
		</a>
	</div>
{!! Form::close() !!}