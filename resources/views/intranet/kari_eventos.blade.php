<!DOCTYPE html>
<html lang="en">
	<head>
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
		<meta charset="utf-8" />
		<title>Eventos</title>

		<meta name="description" content="with draggable and editable events" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0" />

		<!-- bootstrap & fontawesome -->
		<link rel="stylesheet" href="assets/css/bootstrap.min.css" />
		<link rel="stylesheet" href="assets/font-awesome/4.5.0/css/font-awesome.min.css" />

		<!-- page specific plugin styles -->
		<link rel="stylesheet" href="assets/css/jquery-ui.custom.min.css" />
		<link rel="stylesheet" href="assets/css/fullcalendar.min.css" />
        <link rel="stylesheet" href="assets/css/chosen.min.css" />
		<link rel="stylesheet" href="assets/css/bootstrap-datepicker3.min.css" />
		<link rel="stylesheet" href="assets/css/bootstrap-timepicker.min.css" />
		<link rel="stylesheet" href="assets/css/daterangepicker.min.css" />
		<link rel="stylesheet" href="assets/css/bootstrap-datetimepicker.min.css" />
		<link rel="stylesheet" href="assets/css/bootstrap-colorpicker.min.css" />
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
		<style>
			.controls {
				margin-top: 10px;
				border: 1px solid transparent;
				border-radius: 2px 0 0 2px;
				box-sizing: border-box;
				-moz-box-sizing: border-box;
				height: 32px;
				outline: none;
				box-shadow: 0 2px 6px rgba(0, 0, 0, 0.3);
			}

			#pac-input {
				background-color: #fff;
				font-family: Roboto;
				font-size: 15px;
				font-weight: 300;
				margin-left: 12px;
				padding: 0 11px 0 13px;
				text-overflow: ellipsis;
				width: 300px;
			}

			#pac-input:focus {
				border-color: #4d90fe;
			}

			.pac-container {
				font-family: Roboto;
			}

			#type-selector {
				color: #fff;
				background-color: #4d90fe;
				padding: 5px 11px 0px 11px;
			}

			#type-selector label {
				font-family: Roboto;
				font-size: 13px;
				font-weight: 300;
			}

		</style>
	</head>

	<body class="no-skin">
		<?php  echo view('intranet/menu'); ?>

			<div class="main-content">
				<div class="main-content-inner">
					<div class="breadcrumbs ace-save-state" id="breadcrumbs">
						<ul class="breadcrumb">
							<li>
								<i class="ace-icon fa fa-home home-icon"></i>
								<a href="index">Home</a>
							</li>
							<li class="active">Eventos</li>
						</ul><!-- /.breadcrumb -->
					</div>

					<div class="page-content">
						<div class="page-header">
							<h1>
								Calendario de eventos
							</h1>
						</div><!-- /.page-header -->

						<div class="row">
							<div class="col-xs-12 col-sm-12">
								<!-- PAGE CONTENT BEGINS -->
								<!--<div class="row">
									<div class="col-sm-9">
										<div class="space"></div>-->

									<div id="calendar" class="col-xs-8 col-sm-8"></div>
									<div id="infor" class="col-xs-4 col-sm-4">
										<div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
											<div class="panel panel-default">
												<div class="panel-heading" role="tab" id="headingOne">
													<h4 class="panel-title">
														<a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
															Evento
														</a>
													</h4>
												</div>
												<div id="collapseOne" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne">
													<div class="panel-body">
														<form id="formulario">
															<table>
																<tr>
																	<td>Título</td>
																	<td><input type="text" class="form-control" name="titulo" autocomplete="off" required placeholder="*obligatorio"/></td>
																</tr>
																<tr>
																	<td>Descripción</td>
																	<td><textarea class="form-control" rows="10" name="descripcion" autocomplete="off"></textarea></td>
																</tr>
																<tr>
																	<td>Fechas</td>
                                                                    <td>
																		<input class="form-control" type="text" name="date-range-picker" id="id-date-range-picker-1" />
																		(mm/dd/yyyy)
																	</td>

																</tr>
																<tr>
																	<td>Hora inicio </td>
																	<td><input id="timepicker1" type="text" class="form-control" /></td>
																</tr>
																<tr>
																	<td>Hora fin</td>
																	<td><input id="timepicker2" type="text" class="form-control" /></td>
																</tr>
																<tr>
																	<td>Imagen</td>
																	<td><input type="file" id="id-input-file-2" /></td>
																</tr>
																<tr>
																	<td>Link</td>
																	<td><input type="text" id="form-field-1-2" placeholder="" class="form-control" /></td>
																</tr>
																<tr>
																	<td>&nbsp; </td>
																	<td><span class="label label-warning" id="loader-grabar"></span></td>
																</tr>
																<tr>
																	<td><button type="submit" class="btn btn-success btn-sm" id="btn-grabar">Grabar</button></td>
																	<td><button type="reset" class="btn btn-danger btn-sm" id="btn-colapsar-one">Cancelar</button></td>
																</tr>
															</table>
														</form>
													</div>
												</div>
											</div>
											<div class="panel panel-default">
												<div class="panel-heading" role="tab" id="headingTwo">
													<h4 class="panel-title">
														<a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
															Buscar evento
														</a>
													</h4>
												</div>
												<div id="collapseTwo" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo">
													<div class="panel-body">
														<form id="formulario-edicion">
															<input type="hidden" name="id" />
															<table id="tabla-busqueda">
																<tr>
																	<td><input type="text" class="form-control" id="buscador" placeholder="Palabra clave.."/></td>
                                                                    <td>&nbsp;</td>
                                                                    <td><button type="button" class="btn btn-success btn-sm" id="btn-buscar">Buscar</button></td>
																</tr>
                                                                <tr>
                                                                    <td>&nbsp;</td>
                                                                </tr>
															</table>
														</form>
													</div>
												</div>
											</div>
										</div>
									</div>
							</div><!-- /.col -->
						</div><!-- /.row -->
					</div><!-- /.page-content -->
				</div>
			</div><!-- /.main-content -->

			<?php  echo view('intranet/footer'); ?>	

		<!-- basic scripts -->

		<!--[if !IE]> -->
		<script src="assets/js/jquery-2.1.4.min.js"></script>
		<script type="text/javascript">
			if('ontouchstart' in document.documentElement) document.write("<script src='assets/js/jquery.mobile.custom.min.js'>"+"<"+"/script>");
		</script>
		<script src="assets/js/bootstrap.min.js"></script>

		<!-- page specific plugin scripts -->
		<script src="assets/js/jquery-ui.custom.min.js"></script>
		<script src="assets/js/jquery.ui.touch-punch.min.js"></script>
		<script src="assets/js/moment.min.js"></script>
		<script src="assets/js/fullcalendar.min.js"></script>
		<script src="assets/js/bootbox.js"></script>

		<!-- ace scripts -->
		<script src="assets/js/ace-elements.min.js"></script>
		<script src="assets/js/ace.min.js"></script>
        
        <!-- inline scripts related to this page -->
        
		<script src="assets/js/chosen.jquery.min.js"></script>
		<script src="assets/js/spinbox.min.js"></script>
		<script src="assets/js/bootstrap-datepicker.min.js"></script>
		<script src="assets/js/bootstrap-timepicker.min.js"></script>
		<script src="assets/js/moment.min.js"></script>
		<script src="assets/js/daterangepicker.min.js"></script>
		<script src="assets/js/bootstrap-datetimepicker.min.js"></script>
		<script src="assets/js/bootstrap-colorpicker.min.js"></script>
		<script src="assets/js/jquery.knob.min.js"></script>
		<script src="assets/js/autosize.min.js"></script>
		<script src="assets/js/jquery.inputlimiter.min.js"></script>
		<script src="assets/js/jquery.maskedinput.min.js"></script>
		<script src="assets/js/bootstrap-tag.min.js"></script>

		<!-- inline scripts related to this page -->
		<script type="text/javascript">
            jQuery('#ligestor').addClass('active open');
            jQuery('#lieventos').addClass('active');
			jQuery(function($) {

/* initialize the external events
	-----------------------------------------------------------------*/

	$('#external-events div.external-event').each(function() {

		// create an Event Object (http://arshaw.com/fullcalendar/docs/event_data/Event_Object/)
		// it doesn't need to have a start or end
		var eventObject = {
			title: $.trim($(this).text()) // use the element's text as the event title
		};

		// store the Event Object in the DOM element so we can get to it later
		$(this).data('eventObject', eventObject);

		// make the event draggable using jQuery UI
		$(this).draggable({
			zIndex: 999,
			revert: true,      // will cause the event to go back to its
			revertDuration: 0  //  original position after the drag
		});
		
	});




	/* initialize the calendar
	-----------------------------------------------------------------*/

	var date = new Date();
	var d = date.getDate();
	var m = date.getMonth();
	var y = date.getFullYear();


	var calendar = $('#calendar').fullCalendar({
		//isRTL: true,
		//firstDay: 1,// >> change first day of week
		buttonHtml: {
			prev: '<i class="ace-icon fa fa-chevron-left"></i>',
			next: '<i class="ace-icon fa fa-chevron-right"></i>'
		},
	
		header: {
			left: 'prev,next today',
			center: 'title',
			right: 'month,agendaWeek,agendaDay'
		},
		events:{
            url:'php-includes/events.json',
            error:function(){
                alert("Error al cargar la agenda");
            }
        },nowIndicator:true,
		eventClick: function(calEvent, jsEvent, view) {
			viewEvent(calEvent._start, calEvent._end,  calEvent.title, calEvent.description);
		},
            /*[
		  {
			title: 'All Day Event',
			start: new Date(y, m, 1),
			className: 'label-important'
		  },
		  {
			title: 'Long Event',
			start: moment().subtract(5, 'days').format('YYYY-MM-DD'),
			end: moment().subtract(1, 'days').format('YYYY-MM-DD'),
			className: 'label-success'
		  },
		  {
			title: 'Some Event',
			start: new Date(y, m, d-3, 16, 0),
			allDay: false,
			className: 'label-info'
		  }
		]
		,
		
		eventResize: function(event, delta, revertFunc) {

			alert(event.title + " end is now " + event.end.format());

			if (!confirm("is this okay?")) {
				revertFunc();
			}

		},*/
		
		editable: true,
		selectable: true,
		select: function(start, end, allDay) {
			$('#id-date-range-picker-1').daterangepicker({
				"startDate": start,
				"endDate": end.subtract(1, 'days'),
				"drops": "up",
				"opens": "left"
			});
			$('#formulario').find("input[name='titulo']").val("");
			$('#formulario').find("textarea[name='descripcion']").val("");
			/*bootbox.prompt("New Event Title:", function(title) {
				if (title !== null) {
					calendar.fullCalendar('renderEvent',
						{
							title: title,
							start: start,
							end: end,
							allDay: allDay,
							className: 'label-info'
						},
						true // make the event "stick"
					);
				}

			});*/

			

			//calendar.fullCalendar('unselect');
		}
		
	});
        
            $('#id-input-file-1 , #id-input-file-2').ace_file_input({
					no_file:'No File ...',
					btn_choose:'Choose',
					btn_change:'Change',
					droppable:false,
					onchange:null,
					thumbnail:false //| true | large
					//whitelist:'gif|png|jpg|jpeg'
					//blacklist:'exe|php'
					//onchange:''
					//
				});

                $('input[name=date-range-picker]').daterangepicker({
					'applyClass' : 'btn-sm btn-success',
					'cancelClass' : 'btn-sm btn-default',
					locale: {
						format: 'MM/DD/YYYY',
						applyLabel: 'Apply',
						cancelLabel: 'Cancel',
					},
					"drops": "up",
					"opens": "left"
				})
				.prev().on(ace.click_event, function(){
					$(this).next().focus();
				});
                if(!ace.vars['old_ie']) $('#date-timepicker1').datetimepicker({
				 //format: 'MM/DD/YYYY h:mm:ss A',//use this option to display seconds
				 icons: {
					time: 'fa fa-clock-o',
					date: 'fa fa-calendar',
					up: 'fa fa-chevron-up',
					down: 'fa fa-chevron-down',
					previous: 'fa fa-chevron-left',
					next: 'fa fa-chevron-right',
					today: 'fa fa-arrows ',
					clear: 'fa fa-trash',
					close: 'fa fa-times'
				 }
				}).next().on(ace.click_event, function(){
					$(this).prev().focus();
				});
                $(document).one('ajaxloadstart.page', function(e) {
					autosize.destroy('textarea[class*=autosize]')
					
					$('.limiterBox,.autosizejs').remove();
					$('.daterangepicker.dropdown-menu,.colorpicker.dropdown-menu,.bootstrap-datetimepicker-widget.dropdown-menu').remove();
				});
                
                $('#timepicker1').timepicker({
					minuteStep: 1,
					showSeconds: true,
					showMeridian: false,
					disableFocus: true,
					icons: {
						up: 'fa fa-chevron-up',
						down: 'fa fa-chevron-down'
					}
				}).on('focus', function() {
					$('#timepicker1').timepicker('showWidget');
				}).next().on(ace.click_event, function(){
					$(this).prev().focus();
				});
                $('#timepicker2').timepicker({
					minuteStep: 1,
					showSeconds: true,
					showMeridian: false,
					disableFocus: true,
					icons: {
						up: 'fa fa-chevron-up',
						down: 'fa fa-chevron-down'
					}
				}).on('focus', function() {
					$('#timepicker2').timepicker('showWidget');
				}).next().on(ace.click_event, function(){
					$(this).prev().focus();
				});



});
            $('#btn-buscar').on("click", function() { //BUSQUEDA
                var buscar_palabra=$("#buscador").val().toUpperCase();
                $('#eventos_encontrados').remove();
                $("#tabla-busqueda tbody").append("<div id='eventos_encontrados'></div>");
                $('#calendar').fullCalendar('clientEvents', function(event){ //para cada evento se busca su titulo
                    var titulo = event.title;
                    var evento_titulo = titulo.toUpperCase();
                    var descrip = event.description;
                    var evento_descrip = descrip.toUpperCase();
                    if(evento_titulo.indexOf(buscar_palabra)!==-1 || evento_descrip.indexOf(buscar_palabra)!==-1 ){ //buscar palabra en titulo y/o descripcion
                        $("#eventos_encontrados").append("<tr><td>"+titulo+"</td><td>&nbsp;</td><td>"+descrip+
								"</td><td>&nbsp; &nbsp; &nbsp;</td><td><a href='javascript:viewEvent(" +event._start+ ',"'+ event._end + ',"'+
								 titulo + '","'+ descrip+'"' + ");'>Ver</a></td></tr>");
					}
                });

            });

				function viewEvent(start, end, titulo, descrip) { //Falta agregar link, imagen, hora fin, horaini, fechas
					//end.setDate(end.getDate()-1);
					$('#calendar').fullCalendar( 'gotoDate', start );
					$('#collapseOne').collapse('show');
					$('#collapseTwo').collapse('hide');
					$('#formulario').find("input[name='titulo']").val(titulo);
					$('#formulario').find("textarea[name='descripcion']").val(descrip);
					$('#id-date-range-picker-1').daterangepicker({
						"startDate": start,
						"endDate": end.subtract(1, 'days'),
						"drops": "up",
						"opens": "left"
					});
				};

			$(document).on('ready',function() {
				$('#btn-colapsar-one').on('click', function () {
					$('#collapseOne').collapse('hide');
				});
				$('#btn-colapsar-two').on('click', function () {
					$('#collapseTwo').collapse('hide');
				});
			});

		</script>
	</body>
</html>
