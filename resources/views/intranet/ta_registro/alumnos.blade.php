{!! Form::open(['url' => 'ta_notas_res', 'method' => 'POST', 'class' => 'form-horizontal']) !!}
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
					<tr colspan="3">
						No se encontr&oacute; ning&oacute;n alumno.
					</tr>
@endif
@foreach ($alumnos as $alumno)
					<tr>
						<td>{!! Form::checkbox('alumno', $alumno['alu_id'], 'true') !!}</td>
						<td>{{ $alumno['alu_codigo'] }}</td>
						<td>{{ $alumno['alu_nombre'] }}</td>
					</tr>
@endforeach
				</tbody>
			</table>
{!! Form::close() !!}