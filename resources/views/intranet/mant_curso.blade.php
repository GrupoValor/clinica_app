<!DOCTYPE html>
<html lang="en">
	<head>
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
		<meta charset="utf-8" />
		<title>Cl&iacute;nica Jur&iacute;dica | Mantenimiento de cursos</title>

		<meta name="description" content="Static &amp; Dynamic Tables" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0" />

		<!-- bootstrap & fontawesome -->
		<link rel="stylesheet" href="assets/css/bootstrap.min.css" />
		<link rel="stylesheet" href="assets/font-awesome/4.5.0/css/font-awesome.min.css" />

		<!-- page specific plugin styles -->
		<link rel="stylesheet" href="assets/css/jquery-ui.min.css" />
		<link rel="stylesheet" href="assets/css/index.css" />
		
		<!-- text fonts -->
		<link rel="stylesheet" href="assets/css/fonts.googleapis.com.css" />

		<!-- ace styles -->
		<link rel="stylesheet" href="assets/css/ace.min.css" class="ace-main-stylesheet" id="main-ace-style" />

		<!--[if lte IE 9]>
			<link rel="stylesheet" href="assets/css/ace-part2.min.css" class="ace-main-stylesheet" />
		<![endif]-->
		<link rel="stylesheet" href="assets/css/ace-skins.min.css" />
		<link rel="stylesheet" href="assets/css/ace-rtl.min.css" />

		<!--[if lte IE 9]>
		  <link rel="stylesheet" href="assets/css/ace-ie.min.css" />
		<![endif]-->

		<!-- inline styles related to this page -->

		<!-- ace settings handler -->
		<script src="assets/js/ace-extra.min.js"></script>

		<!-- HTML5shiv and Respond.js for IE8 to support HTML5 elements and media queries -->

		<!--[if lte IE 8]>
		<script src="assets/js/html5shiv.min.js"></script>
		<script src="assets/js/respond.min.js"></script>
		<![endif]-->
	</head>

	<body class="no-skin">

		@include('intranet.menu')

			<div class="main-content">
				<div class="main-content-inner">
					<div class="breadcrumbs ace-save-state" id="breadcrumbs">
						<ul class="breadcrumb">
							<li>
								<i class="ace-icon fa fa-home home-icon"></i>
								<a href="/index">Home</a>
							</li>
							<li>
								<a href="ta_registro">Tareas acad&eacute;micas</a>
							</li>
							<li class="active">Mantenimiento de r&uacute;bricas</li>
						</ul><!-- /.breadcrumb -->
					</div>

					<div class="page-content">

@include('intranet.ta_registro.mensajes')

						<div class="page-header">
							<h1>Mantenimiento de cursos</h1>
						</div><!-- /.page-header -->

						<p>Aqu&iacute;, el administrador puede agregar, modificar y eliminar cursos de la cl&iacute;nica jur&iacute;dica a la que pertenece.</p>

						<div class="row">
							<div class="col-xs-12">
								<!-- PAGE CONTENT BEGINS -->
								<table class="table  table-bordered table-hover">
									<thead>
										<th>Descripci&oacute;n</th>
										<th>C&oacute;digo</th>
										<th>Cl&iacute;nica</th>
										<th></th>
									</thead>
									<tbody>
@foreach ($cursos as $value)
										<tr>
											<td>{{ $value['cur_descrip'] }}</td>
											<td>{{ $value['cur_codigo'] }}</td>
											<td>{{ $value['cln_nombre'] }}</td>
											<td class="center">
												<button class="btn btn-mini btn-success" title="Editar rubro" data-toggle="modal", data-target="#rubro_update" onclick="rbo_editar({{ 1 }})">
													<i class="ace-icon fa fa-pencil"></i>
												</button>
												<button class="btn btn-mini btn-danger" title="Eliminar rubro" data-toggle="modal", data-target="#rubro_delete" onclick="rbo_eliminar({{ 1 }})">
													<i class="ace-icon fa fa-trash"></i>
												</button>
											</td>
										</tr>
@endforeach
									</tbody>
								</table>
								<!-- PAGE CONTENT ENDS -->
							</div><!-- /.col -->
						</div><!-- /.row -->
					</div><!-- /.page-content -->

@include('intranet.ta_registro.modal_curso')

				</div>
			</div><!-- /.main-content -->

			@include('intranet.footer')

			<a href="#" id="btn-scroll-up" class="btn-scroll-up btn btn-sm btn-inverse">
				<i class="ace-icon fa fa-angle-double-up icon-only bigger-110"></i>
			</a>


		</div><!-- /.main-container -->

		<!-- basic scripts -->

		<!--[if !IE]> -->
		<script src="assets/js/jquery-2.1.4.min.js"></script>

		<!-- <![endif]-->

		<!--[if IE]>
<script src="assets/js/jquery-1.11.3.min.js"></script>
<![endif]-->
		<script type="text/javascript">
			if('ontouchstart' in document.documentElement) document.write("<script src='assets/js/jquery.mobile.custom.min.js'>"+"<"+"/script>");
		</script>
		<script src="assets/js/bootstrap.min.js"></script>

		<!-- page specific plugin scripts -->
		<script src="assets/js/spinbox.min.js"></script>
		<script src="assets/js/jquery-ui.min.js"></script> <!-- SPINNER -->
		<script src="assets/js/jquery.ui.touch-punch.min.js"></script> <!-- SPINNER -->
		<script src="assets/js/jquery.dataTables.min.js"></script>
		<script src="assets/js/jquery.dataTables.bootstrap.min.js"></script>
		<script src="assets/js/dataTables.buttons.min.js"></script>
		<script src="assets/js/buttons.flash.min.js"></script>
		<script src="assets/js/buttons.html5.min.js"></script>
		<script src="assets/js/buttons.print.min.js"></script>
		<script src="assets/js/buttons.colVis.min.js"></script>
		<script src="assets/js/dataTables.select.min.js"></script>

		<!-- ace scripts -->
		<script src="assets/js/ace-elements.min.js"></script>
		<script src="assets/js/ace.min.js"></script>

		<!-- inline scripts related to this page -->
		<script type="text/javascript">

			jQuery(function($) {

				
				


				//initiate dataTables plugin
				
				
				
				$.fn.dataTable.Buttons.defaults.dom.container.className = 'dt-buttons btn-overlap btn-group btn-overlap';
				
			
				////
			
				setTimeout(function() {
					$($('.tableTools-container')).find('a.dt-button').each(function() {
						var div = $(this).find(' > div').first();
						if(div.length == 1) div.tooltip({container: 'body', title: div.parent().text()});
						else $(this).tooltip({container: 'body', title: $(this).text()});
					});
				}, 500);
				
				
				
				
			
			
			
			
				/////////////////////////////////
				//table checkboxes
				$('th input[type=checkbox], td input[type=checkbox]').prop('checked', false);
					
			
				//And for the first simple table, which doesn't have TableTools or dataTables
				//select/deselect all rows according to table header checkbox
				var active_class = 'active';
				$('#simple-table > thead > tr > th input[type=checkbox]').eq(0).on('click', function(){
					var th_checked = this.checked;//checkbox inside "TH" table header
					
					$(this).closest('table').find('tbody > tr').each(function(){
						var row = this;
						if(th_checked) $(row).addClass(active_class).find('input[type=checkbox]').eq(0).prop('checked', true);
						else $(row).removeClass(active_class).find('input[type=checkbox]').eq(0).prop('checked', false);
					});
				});
				
				//select/deselect a row when the checkbox is checked/unchecked
				$('#simple-table').on('click', 'td input[type=checkbox]' , function(){
					var $row = $(this).closest('tr');
					if($row.is('.detail-row ')) return;
					if(this.checked) $row.addClass(active_class);
					else $row.removeClass(active_class);
				});
				
				
			
				/********************************/
				//add tooltip for small view action buttons in dropdown menu
				$('[data-rel="tooltip"]').tooltip({placement: tooltip_placement});
				
				//tooltip placement on right or left
				function tooltip_placement(context, source) {
					var $source = $(source);
					var $parent = $source.closest('table')
					var off1 = $parent.offset();
					var w1 = $parent.width();
			
					var off2 = $source.offset();
					//var w2 = $source.width();
			
					if( parseInt(off2.left) < parseInt(off1.left) + parseInt(w1 / 2) ) return 'right';
					return 'left';
				}
				
				
				/* SPINNERS */
				$('#spinner1').ace_spinner({value:2,min:1,max:20,step:1, btn_up_class:'btn-info' , btn_down_class:'btn-info'})
				.closest('.ace-spinner')
				.on('changed.fu.spinbox', function(){
					//console.log($('#spinner1').val())
				});
				$('#spinner2').ace_spinner({value:14,min:1,max:30,step:1, btn_up_class:'btn-info' , btn_down_class:'btn-info'});
				/* FIN SPINNERS */
				
				/***************/
				$('.show-details-btn').on('click', function(e) {
					e.preventDefault();
					$(this).closest('tr').next().toggleClass('open');
					$(this).find(ace.vars['.icon']).toggleClass('fa-angle-double-down').toggleClass('fa-angle-double-up');
				});
				/***************/
				
			
			});

			//FUNCION PARA EDITAR RUBRICA
			function rba_editar(rba_id) {
				$('#rba_edit_id').attr('value', rba_id);
				$('#rba_edit_nombre').attr('value', $("h4#" + rba_id).text());
				$('#rba_edit_peso').attr('value', $("#rba_peso_" + rba_id).text());
			}

			//FUNCION PARA ELIMINAR RUBRICA
			function rba_eliminar(rba_id) {
				$('#rba_delete_id').attr('value', rba_id);
			}

			//FUNCION PARA AÑADIR RUBRO
			function rbo_anadir(rba_id) {
				$('#rba_add_id').attr('value', rba_id);
			}

			//FUNCION PARA EDITAR RUBRO
			function rbo_editar(rbo_id) {
				$('#rbo_edit_id').attr('value', rbo_id);
				$('#rbo_edit_nombre').attr('value', $("#rbo_nombre_" + rbo_id).text());
				$('#rbo_edit_maxpunt').attr('value', $("#rbo_maxpunt_" + rbo_id).text());
			}

			//FUNCION PARA ELIMINAR RUBRO
			function rbo_eliminar(rbo_id) {
				$('#rbo_delete_id').attr('value', rbo_id);
			}
		</script>
	</body>
</html>
