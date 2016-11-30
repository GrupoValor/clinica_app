
{!! Form::open(['url' => 'ta_notas_res', 'method' => 'POST', 'class' => 'form-horizontal']) !!}
	<div class="hidden">
		{!! Form::text('periodo', $periodo) !!}
		{!! Form::text('semana', $semana) !!}
	</div>
@foreach ($rubricas as $rba_key => $rubrica)
	<div class="row">
		<div class="col-xs-12">
			<h4><strong>{{ $rubrica['rba_nombre'] }} para la semana {{ $semana }}</strong></h4>
			<table class="table  table-bordered table-hover">
				<thead>
					<th class="center">C&oacute;digo</th>
					<th>Alumno</th>
					@foreach ($rubrica['rubros'] as $rubro)
					<th>{{ $rubro['rbo_nombre'] }}</th>
					@endforeach
					<th>Suma de notas</th>
					<th>Comentarios</th>
				</thead>
				<tbody>
				@foreach ($alumnos as $alumno)
					<tr>
						<td>{{ $alumno['alu_codpuc'] }}</td>
						<td>{{ $alumno['alu_nombre'] }}</td>
						@foreach ($rubrica['rubros'] as $rbo_key => $rubro)
						<td>
							@if ($editable)
								{!! Form::text('rubro[' . $alumno['alu_id'] . '][' . $rubrica['rba_id'] . '][' . $rubro['rbo_id'] . ']', $alumno['notas'][$rba_key]['rubros'][$rbo_key]['nrb_puntaje'], ['class' => 'input-mini', 'placeholder' => 'Puntaje', 'onchange' => 'cambiarNota(' . $alumno["alu_id"] . ', ' . $rubrica["rba_id"] . ')']) !!}
							@else
								{{ empty($alumno['notas'][$rba_key]['rubros'][$rbo_key]['nrb_puntaje']) ? "Sin nota" : $alumno['notas'][$rba_key]['rubros'][$rbo_key]['nrb_puntaje'] }}
							@endif
							&nbsp;/ {{ $rubro['rbo_maxpunt'] }}
						</td>
						@endforeach
						<td>
							@if ($editable)
								{!! Form::text('rubrica[' . $alumno['alu_id'] . '][' . $rubrica['rba_id'] . ']', $alumno['notas'][$rba_key]['nra_promparcial'], ['readonly', 'class' => 'input-mini', 'placeholder' => 'Total']) !!}
							@else
								{{ empty($alumno['notas'][$rba_key]['nra_promparcial']) ? 'Sin nota' : $alumno['notas'][$rba_key]['nra_promparcial'] }}
							@endif
							&nbsp;/ {{ $rubrica['rba_maxpunt'] }}
						</td>
						<td class="center">
							<div class="action-buttons">
								<button class="btn btn-info btn-mini" type="button">
									<i class="fa fa-icon fa-external-link-square"></i>
								</button>
							</div>
						</td>
					</tr>
				@endforeach
				</tbody>
			</table>
		</div>
	</div>
@endforeach
	<div class="center">
		@if ($editable)
		<button class="btn btn-info" type="submit">
			<i class="ace-icon fa fa-save bigger-110"></i>
			Guardar
		</button>
		&nbsp;
		@endif
		<a href="ta_notas">
			<button class="btn" type="button">
				<i class="ace-icon fa fa-undo bigger-110"></i>
				Regresar
			</button>
		</a>
	</div>
{!! Form::close() !!}