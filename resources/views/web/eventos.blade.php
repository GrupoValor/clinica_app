<!DOCTYPE html>
<html lang="es">
<head>
	<!--<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no">
	-->
	<meta name="csrf_token" content="{{csrf_token()}}" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <meta charset="utf-8" />
	<title>Clínica Juridica | Eventos</title>

	{!! Html::style('css/web_eventos/bootstrap.css') !!}
	{!! Html::style('css/web_eventos/style.css') !!}
	{!! Html::style('css/web_eventos/index.css') !!}
	
	<!--link rel="stylesheet" href="css/web_eventos/bootstrap.css"/>
	<link rel="stylesheet" href="css/web_eventos/style.css"/>
	<link rel="stylesheet" href="css/web_eventos/index.css"/>
	
	<!--link rel="stylesheet" href="bootstrap.css">
	<link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="index.css"-->

    
    
<link rel="canonical" href="index" />
<meta property="og:locale" content="es_ES" />
<meta property="og:type" content="article" />
<meta property="og:title" content="Clinica juridica  - Facultad de Derecho" />
    
    
    
<meta property="og:description" content="La formación en Derecho en la PUCP fomenta la conciliación entre personas e instituciones a través de la aplicación de las normas legales y teniendo en cuenta criterios como la justicia y la equidad. El egresado de la Facultad dispondrá de las herramientas para iniciarse profesionalmente y desempeñarse con integridad y responsabilidad social, a partir &hellip;" />
<meta property="og:url" content="http://www.pucp.edu.pe/carrera/derecho/" />
<meta property="og:site_name" content="PUCP | Pontificia Universidad Católica del Perú" />
<meta name="twitter:card" content="summary" />
<meta name="twitter:description" content="La formación en Derecho en la PUCP fomenta la conciliación entre personas e instituciones a través de la aplicación de las normas legales y teniendo en cuenta criterios como la justicia y la equidad. El egresado de la Facultad dispondrá de las herramientas para iniciarse profesionalmente y desempeñarse con integridad y responsabilidad social, a partir [&hellip;]" />
<meta name="twitter:title" content="Derecho - PUCP | Pontificia Universidad Católica del Perú" />
<!-- / Yoast SEO plugin. -->
   
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="msapplication-TileImage" content="http://www.pucp.edu.pe/wp-content/themes/home-theme/images/favicons/mstile-144x144.png">

	<style>
    img{
        width: 100px;
        height: 100px;
    }
	</style>

</head>
    
<body class="single single-carrera postid-1478">
<?php echo view('web/headerWeb');?>
<section>

	
	<div class="mega-titu-h1">
		<div class="container">
			<div class="row titulo-h1">
				<div class="col-lg-12">
					<h1> Eventos </h1>
				</div>
			</div>
		</div>
	</div>

    <article>

        {!! HTML::script('css/web_eventos/js/jquery.min.js') !!}
		{!! HTML::script('css/web_eventos/js/jquery.carouFredSel-6.2.0.js') !!}
       
        <div class="bloque-sombra"></div>

        <article>
		<div class="wrapper-cuerpo-interna">
			<div class="container">
				<div class="row cuerpo-interna">
					<div class="col-md-10 col-md-push-1 col-sm-10 ">
						<div class="formato">
							<div class="documentos-modu-wrapper" id="listaEventos">
                            
							</div>
							
							<!-- para ver la descripcion del evento -->
							<!--<div align="center">
								<div class="modal fade" id="boton" role="dialog">
									<div class="modal-dialog" style="width: 500px;">
					 
										<div class="modal-content">
											<div class="modal-header">
												<h1 type="button" class="close" data-dismiss="modal"></h1>
											</div>
											<div class="page-header">
												<h1> Detalles del evento</h1>

												<form class="form-horizontal" role="form" style="padding-left: 66px;">
													<div class="space-20" ></div>

													<div class="form-group">
														<label class="col-sm-3 control-label no-padding-right" for="form-field-3"> Título </label>

														<div class="col-sm-9">
															<input id="titulo" type="text" id="form-field-3"  class="col-xs-5 col-sm-7" disabled/ />
									   	
														</div>
													</div>
                                                               
                                    
													<div class="space-4"></div>
													
													<div class="space-20" ></div>

													<div class="form-group">
														<label class="col-sm-3 control-label no-padding-right" for="form-field-3"> Descripción </label>

														<div class="col-sm-9">
															<textarea id="descripcion" type="text" id="form-field-3"  class="col-xs-5 col-sm-7" disabled/ ></textarea>
									   	
														</div>
													</div>
                                                               
                                    
													<div class="space-4"></div>
                                    

													<div class="form-group">
														<label class="col-sm-3 control-label no-padding-right" for="form-field-5" > Hora De Inicio </label>

														<div class="col-sm-9">
															<input id="hor_ini" type="text"   class="col-xs-5 col-sm-7"  disabled/ />
														</div>
													</div>    
                                
													<div class="space-4"></div>
                                    
													<div class="form-group">
														<label class="col-sm-3 control-label no-padding-right" for="form-field-5" > Hora De Fin </label>

														<div class="col-sm-9">
															<input id="hor_fin" type="text"   class="col-xs-5 col-sm-7"  disabled/ />
														</div>
													</div>
																
													<div class="space-4"></div>
                                    
													
													<div class="form-group"></div>				
									
													<div class="space-20"></div>								
												</form>


											</div>

											<div class="modal-footer">
												<div align="center">
													<button id="boto" type="button" class="btn btn-default" data-dismiss="modal" onclick="close();">Close</button>
												</div>
											</div>
										</div>
									</div>            
								</div>
							</div>-->
							
						</div>
					</div>
				</div>
			</div>
		</div>

	</article>

        

    </article>

    
	
</section>


<!-- Pop up show evento -->

<div align="center">
	<div class="modal fade" id="boton" role="dialog">
		<div class="modal-dialog" style="width: 50%;">
			<div class="modal-content">
				<div class="page-header">
					<h3 style="color: #0F4279"> </h3>
				</div>
				<div class="row">
					<div class="space-4"></div>

					<div class="form-group col-sm-12" >
						<strong><p class="col-sm-2" style="text-align: left; text-decoration: underline">Descripción</p></strong>
						<p class="col-sm-12" id="descripcion" style="text-align: justify">
						</p>
					</div>

					<div class="space-4"></div>
					<div class="form-group col-sm-12">
						<strong><p class="col-sm-12" style="text-align: left; text-decoration: underline">Fecha de inicio</p></strong>
						<p class="col-sm-12" id="hor_ini" style="text-align: justify">
						</p>
					</div>
					<div class="space-4"></div>
					<div class="form-group col-sm-12">
						<strong><p class="col-sm-12" style="text-align: left; text-decoration: underline">Fecha de fin</p></strong>
						<p class="col-sm-12" id="hor_fin" style="text-align: justify">
						</p>
					</div>
				</div>
				<div class="modal-footer" style="font-size: 15px; background-color: #0F4279; color:#6694C1;">

				</div>
			</div>
		</div>
	</div>
</div>


<footer>
    <div class="wrapper-credi">
        <div class="container">
            <div class="row slide-bottom" data-plugin-options='{"offset":0}'>
                <div class="col-md-5 col-md-push-7">
                </div>
                <div class="col-md-pull-5 col-md-7">
                    <div class="credi">© Grupo Valor - Todos los derechos reservados</div>
                </div>
            </div>
        </div>
    </div>
</footer>
	{!! HTML::script('css/web_eventos/js/bootstrap.min.js') !!}
	{!! HTML::script('css/web_eventos/js/index.js') !!}
	{!! HTML::script('css/web_eventos/js/jquery.easing.min.js') !!}
	{!! HTML::script('css/web_eventos/js/jquery.matchHeight-min.js') !!}
	{!! HTML::script('css/web_eventos/js/masonry.pkgd.min.js') !!}
	{!! HTML::script('css/web_eventos/js/jquery-home.js') !!}
	
    <script type="text/javascript">
		var eventos = [];
		
		
		function add_onClick(id){

			i = parseInt(id);

			$("#descripcion").html(eventos[i][0]);
			$("#hor_ini").html(eventos[i][1]);
			$("#hor_fin").html(eventos[i][2]);
			$(".page-header h3").html(eventos[i][3]);
			
			$("#boton").modal()
       }

		$(document).keydown(function (e) {
			if (e.keyCode == 27) {
				$('.modal').modal('hide');
			}
		});
	
	
	
        jQuery(document).ready(function($) {
            
            
            
                        $('div.submenu.submenu-8 div.col-sm-6.submenu-bloque div.row div.col-md-6.submenu-bloque').matchHeight();
            $('#carousel-pricipal').on('slide.bs.carousel', function (e) {
                var nextH = $(e.relatedTarget).height();
                $(this).find('.active.item').parent().animate({ height: nextH }, 300);
            });
			
			
			
			var padre = document.getElementById("listaEventos");
			var loc = window.location.pathname;
			var local_path = loc.substring(0, loc.lastIndexOf('/'));

			function formatDate(date) {
				var fecha = ('0' + (date.getDate())).slice(-2) + '/'
						+ ('0' + (date.getMonth()+1)).slice(-2) + '/' + date.getFullYear()+ ' ';
				var hours = date.getHours();
				var minutes = date.getMinutes();
				var ampm = hours >= 12 ? 'pm' : 'am';
				hours = hours % 12;
				hours = hours ? hours : 12; // the hour '0' should be '12'
				minutes = minutes < 10 ? '0'+minutes : minutes;
				var strTime = fecha + hours + ':' + minutes + ' ' + ampm;
				return strTime;
			}

			$.ajax({
                   
                    type: "GET",
                    url:'service_evento',
                    success: function(result){
                        
                        
                        var data = jQuery.parseJSON(result);
						var hijo;
						
						
						
                        for(var i = 0; i<data.length ;i++)
                        {
							
							if(data[i].visible == 1 && data[i].active == 1){
								
								var descrip = data[i].description;
								var titulo = data[i].title;
								var imagen = data[i].image;
								var inicio = data[i].start;
								var fin = data[i].end;
								var link= data[i].link;
								link = "https://docs.google.com/forms/d/e/1FAIpQLSfZKJaZnzker7WHwbJeNJoJDfK4SActHxkgjKxhkMfVcZDYUQ/viewform";

								var MyDate = new Date(inicio);
								var fecha_ini = formatDate(MyDate) ;
								MyDate = new Date(fin);
								var fecha_fin = formatDate(MyDate);

								eventos.push([descrip,fecha_ini,fecha_fin,titulo]);
								
								
								hijo = document.createElement("div");
				
								var codigo = '<div class="documentos-modu" id="D"><h2 class="h2-direc">' +
										'<a href="javascript:add_onClick('+i+')">'+titulo+'</a></h2>' +
										'<div class="direc-img" data="acf-img"><img src="'+local_path+imagen+'">' +
										'</div><div class="direc-text"><div class="direc-info"><strong>Fecha:</strong>'+
										' Del '+fecha_ini+' al '+fecha_fin+'</div>	<div class="link-btn btn-diplo">' +
										'<a href="'+link+'" target="_blank">Inscribirme<div class="link-btn-icon">' +
										'</div></a></div></div><div class="clear cero"></div></div>';
			
								hijo.innerHTML = codigo;
								
								padre.appendChild(hijo);

								
	                            
	                        }
                        
                        }
                        
                     
                    }
                     
                });
			
						
			});
    </script>
    
<script type='text/javascript' src='../../wp-includes/js/wp-embed.min.js?ver=4.6'></script>
</body>
</html>
<!-- Localized -->
