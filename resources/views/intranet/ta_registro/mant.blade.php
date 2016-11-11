@if (empty($rubricas))								
								<p>No se encontr&oacute; ninguna r&uacute;brica para el curso {{ $periodo['cur_nombre'] }} en el ciclo {{ $periodo['cic_nombre'] }}.</p>
@else
								<p>Se muestran las r&uacute;bricas para el curso {{ $periodo['cur_nombre'] }} en el ciclo {{ $periodo['cic_nombre'] }}:</p>
@endif
@foreach($rubricas as $rubrica)
								<h4 class="header smaller lighter blue" id="{{ $rubrica['rba_id'] }}">{{ $rubrica['rba_nombre']}}</h4>
								
								<div class="form-group" style="float:right;">
									Peso de la r&uacute;brica:
									<strong id="rba_peso_{{ $rubrica['rba_id'] }}">{{ $rubrica['rba_peso'] }}</strong>
									de {{ $periodo['per_sumapesos'] }}
									<strong>({{ ($periodo['per_sumapesos'] != 0) ? round($rubrica['rba_peso']*100/$periodo['per_sumapesos'], 2) . '%' : 'No disponible' }})</strong>
								</div>

								<div class="row">
									<div class="col-xs-12">
										<table class="table  table-bordered table-hover">
											<thead>
												<tr>
													<th>T&iacute;tulo del rubro</th>
													<th>M&aacute;ximo puntaje</th>
													<th></th>
												</tr>
											</thead>
											<tbody>
@if (empty($rubrica['rubros']))
												<tr>
													<td colspan="3">No se ha ingresado ningun rubro a&uacute;n.</td>
												</tr>
@endif
@foreach($rubrica['rubros'] as $rubro)
												<tr>
													<td id="rbo_nombre_{{ $rubro['rbo_id'] }}">{{ $rubro['rbo_nombre'] }}</td>
													<td id="rbo_maxpunt_{{ $rubro['rbo_id'] }}">{{ $rubro['rbo_maxpunt'] }}</td>
													<td class="center">
														<button class="btn btn-mini btn-success" title="Editar rubro" data-toggle="modal", data-target="#rubro_update" onclick="rbo_editar({{ $rubro['rbo_id'] }})">
															<i class="ace-icon fa fa-pencil"></i>
														</button>
														<button class="btn btn-mini btn-danger" title="Eliminar rubro" data-toggle="modal", data-target="#rubro_delete" onclick="rbo_eliminar({{ $rubro['rbo_id'] }})">
															<i class="ace-icon fa fa-trash"></i>
														</button>
													</td>
												</tr>
@endforeach
												<tr>
													<td colspan="3" style="background-color:#EFF3F8">
														<div class="center">
															<button class="btn btn-white btn-info btn-bold" data-toggle="modal", data-target="#rubro_store" onclick="rbo_anadir({{ $rubrica['rba_id'] }})">
																<i class="ace-icon fa fa-plus-circle bigger-120 blue"></i>
																A&ntilde;adir un rubro
															</button>
															&nbsp;
															<button class="btn btn-white btn-success btn-bold" data-toggle="modal", data-target="#rubrica_update" onclick="rba_editar({{ $rubrica['rba_id'] }})">
																<i class="ace-icon fa fa-pencil bigger-120 green"></i>
																Editar r&uacute;brica
															</button>
															&nbsp;
															<button class="btn btn-white btn-danger btn-bold" data-toggle="modal", data-target="#rubrica_delete" onclick="rba_eliminar({{ $rubrica['rba_id'] }})" >
																<i class="ace-icon fa fa-trash-o bigger-120 red"></i>
																Eliminar r&uacute;brica
															</button>
														</div>
													</td>
												</tr>	
											</tbody>
										</table>
									</div><!-- /.span -->
								</div><!-- /.row -->

@endforeach

								<br />
								<div class="center">		
									<button class="btn btn-info" type="button" data-toggle="modal", data-target="#rubrica_store">
										<i class="ace-icon fa fa-plus bigger-110"></i>
                                        A&ntilde;adir una r&uacute;brica
									</button>
									&nbsp;
									<button class="btn btn-danger" type="button" data-toggle="modal", data-target="#periodo_delete">
										<i class="ace-icon fa fa-trash bigger-110"></i>
										Eliminar periodo acad&eacute;mico
									</button>
									&nbsp;
									<a href="ta_registro">
										<button class="btn" type="reset">
											<i class="ace-icon fa fa-undo bigger-110"></i>
											Regresar
										</button>
									</a>
								</div>