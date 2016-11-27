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


</head>
    
<body class="single single-carrera postid-1478">

<header>

	<div class="wrapper-barrasup">
		<div class="container">
			<div class="row barrasup">
				<div class="col-sm-12 menu-acce text-right hidden-xs">
                    <ul class="nav nav-pills pull-right">
                    <li>
                    	<a target="_blank" href="../login">Iniciar sesión</a>
                        <!--<a target="_blank" href="http://intranet.pucp.edu.pe">Intranet</a>-->
                    </li>

                  </ul>	
                 </div>
                <div class="col-sm-12 menu-acce top-mov text-right visible-xs">
                    <a aria-expanded="true" role="button" data-toggle="dropdown" class="dropdown-toggle" href="../login"> Intranet   <span class="glyphicon glyphicon-chevron-down"></span></a>
                    <ul role="menu" class="dropdown-menu nav">
                        <li><a target="_blank" href="login">Iniciar sesión</a>
                        <!--<a target="_blank" href="http://intranet.pucp.edu.pe">Intranet</a>--></li>
                    </ul>
                </div>
			</div>
		</div>
	</div>



	<div class="wrapper-logos-blank"></div>
	<div class="wrapper-logos">
		<div class="container">
			<div class="row logos">
				<div class="col-sm-6 line-height-0">
					<h1>
						<a href="inicio" class="logo-pucp" alt="Clínica Juridica " title="Pontificia Universidad Católica del Perú"></a>
					</h1>
				</div>
				
			</div>
		</div>
	</div>

	<div class="wrapper-menu-prin-blank"></div>
	<div class="wrapper-menu-prin">
		<div class="container">
			<div class="row">
				<div class="col-lg-12">
					<nav class="navbar navbar-default menu-prin">
						<div class="navbar-header">
							<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-responsive-collapse">
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
							</button>
							<div class="input-group busca-campos pull-right solo-celu">
                                <form action="#" onsubmit="javascript:cargaBuscar(); return false;">
                                    <span class="lupa" id="movil-lupa"></span>
                                    <input id="movil-input" name="busca" class="form-control" placeholder="Buscar en toda la PUCP" type="text">
                                    <span class="input-group-btn" id="movil-submit">
                                        <button class="btn btn-default" type="submit"><span></span></button>
                                    </span>
                                </form>
                                <script src="http://code.jquery.com/jquery-1.9.1.min.js"></script>
                                <script type="text/javascript">
                                    function cargaBuscar(){
                                        $busca = jQuery('#movil-input').val();
                                        window.document.location.href='http://www.pucp.edu.pe?s='+$busca+'&q='+$busca;
                                    }
                                    function cargaBuscar2(){
                                        $busca = jQuery('#movil-input2  ').val();
                                        window.document.location.href='http://www.pucp.edu.pe?s='+$busca+'&q='+$busca;
                                    }
                                </script>
							</div>
						</div>
						<div class="navbar-collapse collapse navbar-responsive-collapse">
							<ul class="nav navbar-nav">
                    <li class="dos-lineas ">
                        <a href="inicio">Inicio</a>
                    </li>    
					<li class="dos-lineas">
                        <a href="nosotros">Nosotros</a>
                    </li>
                    <li class="dos-lineas ">
                    	<a href="noticias">Noticias</a>
                    </li>
                    
                    <li class="dos-lineas ">
                        <a href="eventos">Eventos</a>
                    </li>
                    <li class="dos-lineas">  
                        <a href="mapaweb"> Mapa</a>
                    </li>

                    </ul>
						</div>
					</nav>
				</div>
			</div>
		</div>
	</div>

    
</header>

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

                            <!--div class="container-fluid">
                                <div class="row">
                                    <div class="documentos-busc diplo col-md-12">
                                        <!--div class="col-md-6 busc-control">
                                            <label class="control-label">Ordenar por:</label>
                                            <!--select class="form-control" onchange="javascript:window.document.location.href='http://www.pucp.edu.pe/formacion-continua/diplomaturas/?orden='+this.value+'&areatematica=&lugarprovincia=&modalidad=&facultad='"-->
                                            <!--select class="form-control" onchange="javascript:window.document.location.href=this.value+'.html'">
						<!--option value="proximos-inicios" >Proximos inicios</option><option value="mas-vistos" >Más vistos</option>                                            </select-->
						<!--option value="eventos" >Proximos inicios</option><option value="eventos" >Más vistos</option>                                            </select>
                                        </div-->
                                        <!--div class="buscador-intern busc-barra col-md-6">
                                            <div class="form-group form-slider">
                                                
                                            </div>
                                        </div>
                                        <div class="clear cero"></div>
                                    </div>
                                </div>
                            </div-->


							<div class="documentos-modu-wrapper">
                                <div class="documentos-modu" id="D">
                <h2 class="h2-direc"><a href="plantillaEvento">Evento 1</a> </h2>
                <div class="direc-img" data="acf-img"><img src="http://becasinternacionales.net/webapp/img/imgpro/4790a4_guy-s.-goodwingill-scholarships_h150.jpg"></div>
                <div class="direc-text">
                    <div class="direc-info"><strong>Inicio:</strong> Del 24 de setiembre del 2016 al 30 de junio del 2017</div>
                    <div class="link-btn btn-diplo"><a href="https://docs.google.com/forms/d/e/1FAIpQLSfZKJaZnzker7WHwbJeNJoJDfK4SActHxkgjKxhkMfVcZDYUQ/viewform" target="_blank">Inscribirme <div class="link-btn-icon"></div> </a></div>
                    
                </div>
                <div class="clear cero"></div>
           </div><div class="documentos-modu" id="D">
                <h2 class="h2-direc"><a href="plantillaEvento">Evento 2</a> </h2>
                <div class="direc-img" data="acf-img"><img src="http://files.pucp.edu.pe/homepucp/uploads/2016/05/08172214/afc-dies-animacion_sociocultural-img-210x140.jpg"></div>
                <div class="direc-text">
                    <div class="direc-info"><strong>Inicio:</strong> Del 16 de octubre del 2016 al 15 de julio del 2017</div>
                    <div class="link-btn btn-diplo"><a href="https://docs.google.com/forms/d/e/1FAIpQLSfZKJaZnzker7WHwbJeNJoJDfK4SActHxkgjKxhkMfVcZDYUQ/viewform" target="_blank">Inscribirme <div class="link-btn-icon"></div> </a></div>
                    
                </div>
                <div class="clear cero"></div>
           </div><div class="documentos-modu" id="D">
                <h2 class="h2-direc"><a href="plantillaEvento">Evento 3</a> </h2>
                <div class="direc-img" data="acf-img"><img src="http://files.pucp.edu.pe/homepucp/uploads/2016/08/15180616/afc-dies-diseno_gestion_proyectos_sociales-img-210x140.jpg"></div>
                <div class="direc-text">
                    <div class="direc-info"><strong>Inicio:</strong> Del 02 de noviembre del 2016 al 06 de noviembre del 2017</div>
                    <div class="link-btn btn-diplo"><a href="https://docs.google.com/forms/d/e/1FAIpQLSfZKJaZnzker7WHwbJeNJoJDfK4SActHxkgjKxhkMfVcZDYUQ/viewform" target="_blank">Inscribirme <div class="link-btn-icon"></div> </a></div>
                    
                </div>
                <div class="clear cero"></div>
           </div><div class="documentos-modu" id="D">
                <h2 class="h2-direc"><a href="plantillaEvento">Evento 4</a> </h2>
                <div class="direc-img" data="acf-img"><img src="http://www.eriebusinesslaw.com/uploads/business-law-small.jpg"></div>
                <div class="direc-text">
                    <div class="direc-info"><strong>Inicio:</strong> Desde el 16 de setiembre del 2016</div>
                    <div class="link-btn btn-diplo"><a href="https://docs.google.com/forms/d/e/1FAIpQLSfZKJaZnzker7WHwbJeNJoJDfK4SActHxkgjKxhkMfVcZDYUQ/viewform" target="_blank">Inscribirme <div class="link-btn-icon"></div> </a></div>
                    
                </div>
                <div class="clear cero"></div>
           </div>							</div>
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
    <script type="text/javascript" src="http://s7.addthis.com/js/250/addthis_widget.js"></script>
    <script type="text/javascript" src="http://www.youtube.com/iframe_api"></script>
    <!--script src="css/wp-content/themes/home-theme/jquery-home.js"></script-->
	
    <script type="text/javascript">
        jQuery(document).ready(function($) {
            
            
            
                        $('div.submenu.submenu-8 div.col-sm-6.submenu-bloque div.row div.col-md-6.submenu-bloque').matchHeight();
            $('#carousel-pricipal').on('slide.bs.carousel', function (e) {
                var nextH = $(e.relatedTarget).height();
                $(this).find('.active.item').parent().animate({ height: nextH }, 300);
            });
                    });
    </script>
    
<script type='text/javascript' src='../../wp-includes/js/wp-embed.min.js?ver=4.6'></script>
</body>
</html>
<!-- Localized -->
