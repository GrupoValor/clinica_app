<!DOCTYPE html>
<html lang="en">
	<head>
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
		<meta charset="utf-8" />
		<title>Intranet | Tareas acad&eacute;micas | Mantenimiento de r&uacute;bricas</title>

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
								<a href="/rubrica">Tareas acad&eacute;micas</a>
							</li>
							<li class="active">Mantenimiento de r&uacute;bricas</li>
						</ul><!-- /.breadcrumb -->
					</div>

					<div class="page-content">
						<div class="page-header">
							<h1>Mantenimiento de r&uacute;bricas</h1>
						</div><!-- /.page-header -->

						<p>Aqu&iacute; el profesor puede editar las r&uacute;bricas para registrar el avance de sus alumnos en el curso.</p>
						<p>Se muestran las r&uacute;bricas para el curso "{{ $valores['cur_descrip'] }}" en el ciclo {{ $valores['cic_nombre'] }}:</p>
						
@include('intranet.mensajes')

						<div class="row">
							<div class="col-xs-12">
								<!-- PAGE CONTENT BEGINS -->
								
								<!-- CONTROL DE TABLAS 
								<div class="">
									Se mostrar&aacute;n 
									<div class="ace-spinner middle" style="width: 115px;">
										<input type="text" id="spinner1" />
									</div>
									tablas de r&uacute;bricas, para un total de 
									<div class="ace-spinner middle" style="width: 90px;">
										<input type="text" class="input-sm" id="spinner2" />
									</div>
									semanas.
								</div>-->

@include('intranet.mant_rubrica', ['rubricas' => $rubricas])

								<br />
								<div class="center">		
									<button class="btn btn-info" type="button" data-toggle="modal", data-target="#modal_rubrica_crear">
										<i class="ace-icon fa fa-plus bigger-110"></i>
                                        Añadir rúbrica
									</button>
									&nbsp;
									<button class="btn btn-inverse">Reutilizar rúbrica</button>
									&nbsp;
									<a href="rubrica">
										<button class="btn" type="reset">
											<i class="ace-icon fa fa-undo bigger-110"></i>
											Regresar
										</button>
									</a>
								</div>
								
								<!-- PAGE CONTENT ENDS -->
							</div><!-- /.col -->
						</div><!-- /.row -->
					</div><!-- /.page-content -->

					<div class="modal fade" id="modal_rubrica_crear" role="dialog">
						<div class="modal-dialog">
						   <!-- Modal content-->
							<div class="modal-content">
								{!! Form::open(['route' => 'rubrica.store', 'method' => 'POST', 'class' => 'form-horizontal']) !!}
									<div class="modal-header">
										<div class="page-header"><!-- /.page-header -->
											<h1>Nueva r&uacute;brica</h1>
										</div>
										<div style="padding-left: 50px;">
											<div class="form-group">
												{!! Form::label('rba_nombre', 'Nombre de la r&uacute;brica:&nbsp;') !!}
												{!! Form::text('rba_nombre', null, ['class' => 'input-xlarge', 'placeholder' => 'Nombre de la r&uacute;brica']) !!}
											</div>
											<div class="form-group">
												{!! Form::label('rba_peso', 'Peso de la r&uacute;brica:&nbsp;') !!}
												{!! Form::text('rba_peso', null, ['class' => 'input-xlarge', 'placeholder' => 'Peso de la r&uacute;brica']) !!}
											</div>
											<div class="hidden">
												{!! Form::text('cli_id', '1') !!}
												{!! Form::text('cur_id', $valores['cur_id']) !!}
												{!! Form::text('cic_id', $valores['cic_id']) !!}
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


				</div>
			</div><!-- /.main-content -->

			<div class="footer">
				<div class="footer-inner">
					<div class="footer-content">
						<span class="bigger-120">
							<span class="blue bolder">Grupo Valor</span>
							Application &copy; 2016
						</span>
					</div>
				</div>
			</div>

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
				
				
				
				
				
				/**
				//add horizontal scrollbars to a simple table
				$('#simple-table').css({'width':'2000px', 'max-width': 'none'}).wrap('<div style="width: 1000px;" />').parent().ace_scroll(
				  {
					horizontal: true,
					styleClass: 'scroll-top scroll-dark scroll-visible',//show the scrollbars on top(default is bottom)
					size: 2000,
					mouseWheelLock: true
				  }
				).css('padding-top', '12px');
				*/
			
			
			})
		</script>
	</body>
</html>
