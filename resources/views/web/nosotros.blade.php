<!DOCTYPE html>
<html lang="es">
<head>
    <!-- Flex Template -->
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700,800' rel='stylesheet' type='text/css'>

    <link rel="stylesheet" href="assets/font-awesome/4.5.0/css/font-awesome.min.css">

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
        .form-group p{
            font-family: 'RobotoWeb', sans-serif;
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

    <div align="center">
        <div class="modal fade" id="modal_clinica" role="dialog">
            <div class="modal-dialog" style="width: 50%;">
                <div class="modal-content">
                    <div class="page-header">
                        <h3 style="color: #0F4279"> </h3>
                    </div>
                    <div class="row">
                        <div class="space-4"></div>
                        <div id="id_evento" class="hide"></div>
                        <div class="form-group col-sm-12" >
                            <strong><p class="col-sm-2" style="text-align: left; text-decoration: underline">Descripción</p></strong>
                            <p class="col-sm-12" id="descrip" style="text-align: justify">
                            </p>
                        </div>

                        <div class="space-4"></div>
                        <div class="form-group col-sm-12">
                            <strong><p class="col-sm-2" style="text-align: left; text-decoration: underline">Misión</p></strong>
                            <p class="col-sm-12" id="mision" style="text-align: justify">
                            </p>
                        </div>
                        <div class="space-4"></div>
                        <div class="form-group col-sm-12">
                            <strong><p class="col-sm-2" style="text-align: left; text-decoration: underline">Visión</p></strong>
                            <p class="col-sm-12" id="vision" style="text-align: justify">
                            </p>
                        </div>

                        <div class="space-4"></div>
                        <div class="form-group col-sm-12">
                            <strong><p class="col-sm-2" style="text-align: left; text-decoration: underline">Contacto</p></strong>

                            <div class="col-sm-12 text-left">
                                <i class="fa fa-location-arrow" aria-hidden="true"></i>
                                <span id="direc" class="" style="text-align: left"></span>
                            </div>
                            <div class="col-sm-4 text-left">
                                <i class="fa fa-phone" aria-hidden="true" style="text-align: left"> </i>
                                <span id="telef" class="" style="text-align: left"></span>
                            </div>
                            <div class="col-sm-8 text-left">
                                <i class="fa fa-envelope" aria-hidden="true" style="text-align: left"> </i>
                                <span id="email" style="text-align: left"></span>
                            </div>
                        </div>


                    </div>
                    <style>
                        a:hover{
                            color: white;
                        }
                        a{
                            color:#6694C1;
                        }
                    </style>

                    <div class="modal-footer" style="font-size: 15px; background-color: #0F4279; color:#6694C1;">
                        <div class="text-right">
                            <i>Síguenos en &nbsp;</i>
                            <a style="" href='https://facebook.com/pucp/' target="_blank" id="fb">
                                <i class="fa fa-facebook-square fa-2x" aria-hidden="true"></i>
                            </a>
                            <a style="" href='https://facebook.com/pucp/' target="_blank" id="tw">
                                <i class="fa fa-twitter fa-2x" aria-hidden="true"></i>
                            </a>
                            <a style="" href='https://facebook.com/pucp/' target="_blank" id="gm">
                                <i class="fa fa-google-plus fa-2x"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>



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
        var clinicas=[];

        function showClinica(id) {
            $(".page-header h3").html(clinicas[id-1][0]);
            $("#descrip").html(clinicas[id-1][6]);
            $("#mision").html(clinicas[id-1][8]);
            $("#vision").html(clinicas[id-1][9]);
            $("#telef").html(clinicas[id-1][1]);
            $("#email").html(clinicas[id-1][2]);
            $("#direc").html(clinicas[id-1][7]);
            document.getElementById("fb").setAttribute('href', clinicas[id-1][3] );
            document.getElementById("tw").setAttribute('href', clinicas[id-1][4] );
            document.getElementById("gm").setAttribute('href', clinicas[id-1][5]);


            $("#modal_clinica").modal();
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

                        clinicas.push([nombre, telef, email, fb, twitter, google, descrip, direc, mision, vision]);

                        var new_clinica = '<a href="javascript:showClinica('+id+');">' +
                                '<div class="team-member col-md-3 col-sm-6">' +
                                '<div class="img-hover">' +
                                '<img src="http://www.garmendiaabogados.com/cache~1-3-2-b-5-132b513e56471811df827623c5ccf42e12789fc1/derecho-penal.jpg">' +
                                '</div>' +
                                '<div class="titulo-clinicas">'+nombre+'</div>' +
                                '</div>' +
                                '</a>';

                        $("#clinicas").append(new_clinica);

                    }
                }
            });



        });

        $(document).keydown(function (e) {
            if (e.keyCode == 27) {
                $('.modal').modal('hide');
            }
        });

    </script>

    
<script type='text/javascript' src='../../wp-includes/js/wp-embed.min.js?ver=4.6'></script>
</body>
</html>
<!-- Localized -->
