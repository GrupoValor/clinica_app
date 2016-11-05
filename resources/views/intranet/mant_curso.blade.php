<!DOCTYPE HTML>
<html>
	<head>
		<title>Mantenimiento de cursos</title>
	</head>
	<body>
@include('intranet.mensajes')
		<h1>Mantenimiento de cursos</h1>
		<!-- LISTA DE CURSOS -->
		<table>
			<thead>
				<th>Descripci&oacute;n</th>
				<th>C&oacute;digo</th>
			</thead>
			<tbody>
@foreach ($cursos as $value)
				<tr>
					<td>{{ $value['cur_descrip'] }}</td>
					<td>{{ $value['cur_codigo'] }}</td>
				</tr>
@endforeach
			</tbody>
		</table>

		<!-- AÑADIR CURSOS -->
		{!! Form::open(['route' => 'curso.store', 'method' => 'POST', 'class' => 'form-horizontal']) !!}
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
	</body>
</html>