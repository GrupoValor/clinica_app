
{!! Form::open(['class' => 'form-horizontal']) !!}
@foreach ($rubricas as $rba_key => $rubrica)
	<div class="row">
		<div class="col-xs-12">
			<table class="table  table-bordered table-hover">
				<thead>
					<th>C&oacute;digo</th>
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
							{!! Form::text('rubro[' . $alumno['alu_id'] . '][' . $rubro['rbo_id'] . ']',
								$alumno['notas'][$rba_key]['rubros'][$rbo_key]['nrb_puntaje'],
								['class' => 'input-mini', 'placeholder' => 'Puntaje']) !!}
							&nbsp;/ {{ $rubro['rbo_maxpunt'] }}
						</td>
						@endforeach
						<td>
							{!! Form::text('rubrica[' . $alumno['alu_id'] . '][' . $rubrica['rba_id'] . ']',
								$alumno['notas'][$rba_key]['nra_promparcial'],
								['disabled', 'class' => 'input-mini', 'placeholder' => 'Total']) !!}
							&nbsp;/ {{ $rubrica['rba_maxpunt'] }}
						</td>
						<td>
							<div class="action-buttons">
								<a href="#" class="green bigger-140 show-details-btn" title="Ver comentarios">
									<i class="ace-icon fa fa-angle-double-down"></i>
									<span class="sr-only">Ver comentarios</span>
								</a>
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
		<button class="btn btn-info" type="submit">
			<i class="ace-icon fa fa-save bigger-110"></i>
			Guardar
		</button>
		&nbsp;
		<a href="ta_notas">
			<button class="btn" type="reset">
				<i class="ace-icon fa fa-undo bigger-110"></i>
				Regresar
			</button>
		</a>
	</div>
{!! Form::close() !!}