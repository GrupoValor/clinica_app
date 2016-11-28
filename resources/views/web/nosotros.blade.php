<!DOCTYPE html>
<html lang="es">
<head>
    <!-- Flex Template -->
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700,800' rel='stylesheet' type='text/css'>
    
	{!! Html::style('css/web_eventos/otros/bootstrap.min.css') !!}
	{!! Html::style('css/web_eventos/font-awesome.css') !!}
	{!! Html::style('css/web_eventos/otros/animate.css') !!}

    <!--script src="js/vendor/modernizr-2.6.1-respond-1.1.0.min.js"></script-->
	{!! HTML::script('css/web_eventos/js/modernizr-2.6.1-respond-1.1.0.min.js') !!}
    <!-- Flex Template -->
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no">
	<title>Clínica Juridica | Nosotros</title>

	{!! Html::style('css/web_eventos/bootstrap.css') !!}
	{!! Html::style('css/web_eventos/style.css') !!}
	{!! Html::style('css/web_eventos/index.css') !!}
	<!--link href="css/wp-content/themes/home-theme/bootstrap.css" rel="stylesheet"-->
    
    
<link rel="canonical" href="inicio" />
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
            border-radius: 50%;
            width: 250px;
            height: 250px;

        }
        .img-hover {
            position: relative;
            display: inline-block;

        }

        .img-hover:hover:before {
            content: '';
            display: block;
            background: #0F4279;
            color: white;
            opacity: 0.2;
            width: 250px;
            height: 250px;
            position: absolute;
            top: 0;
            right: 0;
            border-radius: 50%;

        }
        .titulo-clinicas{
            text-align: center;
        }
    </style>
    
</head>
    
<body class="single single-carrera postid-1478">
<?php  echo view('web/headerWeb'); ?>

<section>
    <div class="mega-titu-h1">
		<div class="container">
			<div class="row titulo-h1">
				<div class="col-lg-12">
					<h1> Nosotros </h1>
				</div>
			</div>
		</div>
	</div>
    
    
    <article>
		
		{!! HTML::script('css/web_eventos/js/jquery.min.js') !!}
		{!! HTML::script('css/web_eventos/js/jquery.carouFredSel-6.2.0.js') !!}
    
        <div class="wrapper-cuerpo-interna direc-unid alt50">
            <div class="container">
                <div class="row cuerpo-interna">
                    <div class="col-md-12">
                        <div class="formato">
                            <p>La Clínica Jurídica de Interés Público de la Facultad de Derecho de la PUCP es un proyecto de la facultad destinado a brindar una formación universitaria integral, buscando insertar a los alumnos en la concepción de responsabilidad social profesional a través de acciones de interés público que puedan beneficiar a grupos vulnerables o impliquen el fortalecimiento de nuestro estado social y democrático de derecho.</p>
                            <p>El fin pedagógico de la Clínica es brindar habilidades y competencias a los alumnos para enfrentarse a casos diversos, de preferencia de alta incidencia social, enseñándoles a investigar y razonar jurídicamente, así como a elaborar documentos estratégicos en el contexto de un caso real. Se trata de adquirir destrezas en litigación a través de acciones de interés público de amplia visibilidad.</p>
                            <p>No solo es un espacio de formación académica para el ejercicio profesional del derecho, sino que además permite al alumno contrastar los conceptos jurídicos aprendidos en su carrera con una situación concreta que le desafía. La Clínica Jurídica cumple finalmente un rol social de vital importancia al propiciar cambios institucionales a través de las herramientas que el derecho permite.</p>

<h3>Clínicas</h3>

			<div class="row" id="clinicas"> <!-- clinicas añadidas dinamicamente -->

			</div>
							 <!-- /.row -->

                    </div>
                    </div>
            </div>
        </div>

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

<!-- Pop up show clinica -->
<form class="form-horizontal" role="form" style="padding-left: 66px;" id="form_clinica">
    <div align="center">
        <div class="modal fade" id="modal_clinica" role="dialog">
            <div class="modal-dialog" style="width: 500px;">
                <div class="modal-content">
                    <div class="page-header">
                        <!-- /.page-header -->
                        <button type="button" class="close" data-dismiss="modal" style="margin-right: 8px;">&times;</button>
                        <div class="space-10"></div>
                        <h1> Evento </h1>
                    </div>
                    <div class="row">
                        <div class="space-4"></div>
                        <div id="id_evento" class="hide"></div>
                        <div class="form-group">
                            <label class="col-sm-3 col-xs-3 control-label no-padding-right" for="form-field-3"> Título </label>
                            <div class="col-sm-8 col-xs-8">
                                <input id="titulo" type="text" class="form-control" placeholder="*obligatorio" required/>
                            </div>
                        </div>

                        <div class="space-4"></div>
                        <div class="form-group">
                            <label class="col-sm-3 col-xs-3 control-label no-padding-right" for="form-field-3"> Descripción </label>
                            <div class="col-sm-8 col-xs-8">
                                <textarea class="form-control" rows="10" style="resize: vertical;overflow: auto;" id="descripcion" placeholder="*obligatorio" required autocomplete="off"></textarea>
                            </div>
                        </div>

                        <div class="space-4"></div>
                        <div class="form-group">
                            <label class="col-sm-3 col-xs-3 control-label no-padding-right" for="form-field-5">Fechas y horas</label>
                            <div class="col-sm-8 col-xs-8">
                                <input class="form-control" type="text" name="date-range-picker" id="id-date-range-picker-1" />
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-sm-3 col-xs-3 control-label no-padding-right" for="form-field-5"> Imagen </label>
                            <div class="col-sm-6 col-xs-6">
                                <input type="file" id="imagen" value="" />
                            </div>
                        </div>

                        <div class="space-4"></div>
                        <div class="form-group">
                            <label class="col-sm-3 col-xs-3 control-label no-padding-right" for="form-field-5"> Link </label>
                            <div class="col-sm-8 col-xs-8">
                                <input id="link" type="text" class="form-control" placeholder="*obligatorio" required/>
                            </div>
                        </div>

                        <div class="space-4"></div>
                        <div class="form-group">
                            <label class="col-sm-3 col-xs-3 control-label no-padding-right" for="form-field-5"> ¿En web? </label>
                            <div class="col-sm-1 col-xs-1">
                                <input id="enWeb" type="checkbox" class="form-control" checked/>
                            </div>
                        </div>
                    </div>

                    <div class="modal-footer">
                        <div align="center">
                            <button type="submit" id="botonSubmit" class="btn btn-primary"></button>                            &nbsp; &nbsp;
                            <button type="button" id="botonDanger" class="btn btn-primary btn-danger remove" data-dismiss="modal"></button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</form>


	{!! HTML::script('css/web_eventos/js/bootstrap.min.js') !!}
	{!! HTML::script('css/web_eventos/js/index.js') !!}
	{!! HTML::script('css/web_eventos/js/jquery.easing.min.js') !!}
	{!! HTML::script('css/web_eventos/js/jquery.matchHeight-min.js') !!}
	{!! HTML::script('css/web_eventos/js/masonry.pkgd.min.js') !!}
	{!! HTML::script('css/web_eventos/js/jquery-home.js') !!}

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
    <script type="text/javascript">
        var noticias=[];
        function popmeup(URL) {
            var popup_width = 600
            var popup_height = 400
            day = new Date();
            id = day.getTime();
            eval("page" + id + " = window.open(URL, '" + id + "', 'toolbar=0,scrollbars=1,location=0,statusbar=0,menubar=0,resizable=1,width='+popup_width+',height='+popup_height+'');");
        }

        $(document).ready(function() {
            $.ajax({ //Para llenar la tabla
                type: "GET",
                url: 'service_clinica',
                success: function(result) {
                    var data = jQuery.parseJSON(result);
                    for (var i = 0; i < data.length; i++) {
                        var id= data[i].cln_id;
                        var nombre= data[i].cln_nombre;
                        var telef= data[i].cln_telefono;
                        var email= data[i].cln_email;
                        var fb= data[i].cln_urlfbk;
                        var twitter= data[i].cln_urltwi;
                        var google= data[i].cln_urlgoo;
                        var descrip= data[i].cln_descri;
                        var direc= data[i].cln_direcc;
                        var mision= data[i].cln_mision;
                        var vision= data[i].cln_vision;

                        noticias.push([nombre, telef, email, fb, twitter, google, descrip, direc, mision, vision]);

                        var new_clinica = '<a href="#">' +
                                '<div class="team-member col-md-3 col-sm-6">' +
                                '<div class="img-hover">' +
                                '<img src="http://www.garmendiaabogados.com/cache~1-3-2-b-5-132b513e56471811df827623c5ccf42e12789fc1/derecho-penal.jpg">' +
                                '</div>' +
                                '<div class="titulo-clinicas">'+nombre+'</div>' +
                                '</div>' +
                                '</a>';

                        $("#clinicas").html(new_clinica);

                    }
                }
            });

        });

    </script>

    
<script type='text/javascript' src='../../wp-includes/js/wp-embed.min.js?ver=4.6'></script>
</body>
</html>
<!-- Localized -->
