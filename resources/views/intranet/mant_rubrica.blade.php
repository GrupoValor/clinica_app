@if (empty($rubricas))
								<h3 class="header smaller lighter blue">Resultados de la b&uacute;squeda</h3>
								<p>No se encontr&oacute; ninguna r&uacute;brica para el curso y ciclo dados.</p>
@endif
@foreach($rubricas as $rubrica)
								<h3 class="header smaller lighter blue"> {{ $rubrica['rba_nombre']}} </h3>
								
								<div class="form-group" style="float:right;">
									Peso de la r&uacute;brica: {{ $rubrica['rba_peso'] }} de {{ 'FALTA' }} ({{ 'CALCULAR' }}%)
								</div>

								<div class="row">
									<div class="col-xs-12">
										<table id="simple-table" class="table  table-bordered table-hover">
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
													<td>{{ $rubro['rbo_nombre'] }}</td>
													<td>{{ $rubro['rbo_maxpunt'] }}</td>
													<td class="center">
														<button class="btn btn-mini btn-success" title="Editar rubro">
															<i class="ace-icon fa fa-pencil"></i>
														</button>
														<button class="btn btn-mini btn-danger" title="Eliminar rubro">
															<i class="ace-icon fa fa-trash"></i>
														</button>
													</td>
												</tr>
@endforeach
												<tr>
													<td colspan="3" style="background-color:#EFF3F8">
														<div class="center">
															<button class="btn btn-white btn-info btn-bold">
																<i class="ace-icon fa fa-plus-circle bigger-120 blue"></i>
																A&ntilde;adir un rubro
															</button>
															&nbsp;
															<button class="btn btn-white btn-success btn-bold">
																<i class="ace-icon fa fa-pencil bigger-120 green"></i>
																Editar r&uacute;brica
															</button>
															&nbsp;
															<button class="btn btn-white btn-danger btn-bold">
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