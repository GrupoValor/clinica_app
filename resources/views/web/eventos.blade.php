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
							<div align="center">        
								<div class="modal fade" id="boton" role="dialog">
									<div class="modal-dialog" style="width: 500px;">
					 
										<div class="modal-content">
											<div class="modal-header">
												<h1 type="button" class="close" data-dismiss="modal"></h1>
											</div>
											<!-- Modal content-->
											<div class="page-header"><!-- /.page-header -->
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
							</div>
							
						</div>
					</div>
				</div>
			</div>
		</div>

	</article>
        

    <div class="bloque-sombra"></div>
        

    </article>

    
	
</section>


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
	
    <!--script src="css/wp-content/themes/home-theme/bootstrap.min.js"></script>
    <script src="js/index.js"></script>
    <script src="css/wp-content/themes/home-theme/jquery.easing.min.js"></script>
    <script src="css/wp-content/themes/home-theme/jquery.matchHeight-min.js"></script>
    <script src="css/wp-content/themes/home-theme/masonry.pkgd.min.js"></script-->
    <!-- <script type="text/javascript" src="http://s7.addthis.com/js/250/addthis_widget.js"></script>
    <script type="text/javascript" src="http://www.youtube.com/iframe_api"></script> -->
	
    <!--script src="css/wp-content/themes/home-theme/jquery-home.js"></script-->
	
    <script type="text/javascript">
		var eventos = [];
		
		
		
		function add_onClick(id){

			i = parseInt(id);

			$("#descripcion").val(eventos[i][0]);
			$("#hor_ini").val(eventos[i][1]);
			$("#hor_fin").val(eventos[i][2]);
			$("#titulo").val(eventos[i][3]);
			
			$("#boton").modal()
       }
	
	
	
        jQuery(document).ready(function($) {
            
            
            
                        $('div.submenu.submenu-8 div.col-sm-6.submenu-bloque div.row div.col-md-6.submenu-bloque').matchHeight();
            $('#carousel-pricipal').on('slide.bs.carousel', function (e) {
                var nextH = $(e.relatedTarget).height();
                $(this).find('.active.item').parent().animate({ height: nextH }, 300);
            });
			
			
			
			var padre = document.getElementById("listaEventos");
			
			$.ajax({
                   
                    type: "GET",
                    url:'service_evento',
                    success: function(result){
                        
                        
                        var data = jQuery.parseJSON(result);
						var hijo;
						
						
						
                        for(var i = 0; i<data.length ;i++)
                        {
							
							if(data[i].visible == 1){
								
								var descrip = data[i].description;
								var titulo = data[i].title;
								var imagen = data[i].image;
								var inicio = data[i].start;
								var fin = data[i].end;
								
								eventos.push([descrip,inicio,fin,titulo]);
								
								
								hijo = document.createElement("div");
				
								var codigo = '<div class="documentos-modu" id="D"><h2 class="h2-direc"><a href="javascript:add_onClick('+i+')">'+titulo+'</a></h2><div class="direc-img" data="acf-img"><img src="'+imagen+'"></div><div class="direc-text"><div class="direc-info"><strong>Inicio:</strong>'+' Del '+inicio+' al '+fin+'</div>	<div class="link-btn btn-diplo"><a href="https://docs.google.com/forms/d/e/1FAIpQLSfZKJaZnzker7WHwbJeNJoJDfK4SActHxkgjKxhkMfVcZDYUQ/viewform" target="_blank">Inscribirme<div class="link-btn-icon"></div></a></div></div><div class="clear cero"></div></div>';
			
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
