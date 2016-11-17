<!DOCTYPE html>
<html lang="en">
	<head>
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
		<meta charset="utf-8" />
		<title>Cl&iacute;nica Jur&iacute;dica | Error</title>

		<meta name="description" content="Error 500" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0" />

		<!-- bootstrap & fontawesome -->
		{!! Html::style("assets/css/bootstrap.min.css") !!}
		{!! Html::style("assets/font-awesome/4.5.0/css/font-awesome.min.css") !!}
		<!-- page specific plugin styles -->
		
		<!-- text fonts -->
		{!! Html::style("assets/css/fonts.googleapis.com.css") !!}
		<!-- ace styles -->
		{!! Html::style("assets/css/ace.min.css", ['class' => "ace-main-stylesheet", 'id' => "main-ace-style"]) !!}
        <!--logo -->
        {!! Html::style('assets/css/index.css') !!}
		<!--[if lte IE 9]>
			<link rel="stylesheet" href="assets/css/ace-part2.min.css" class="ace-main-stylesheet" />
		<![endif]-->
		{!! Html::style("assets/css/ace-skins.min.css") !!}
		{!! Html::style("assets/css/ace-rtl.min.css") !!}
		<!--[if lte IE 9]>
		  <link rel="stylesheet" href="assets/css/ace-ie.min.css" />
		<![endif]-->
		
		<!-- inline styles related to this page -->
		
		<!-- ace settings handler -->
		{!! Html::script("assets/js/ace-extra.min.js") !!}
		<!-- HTML5shiv and Respond.js for IE8 to support HTML5 elements and media queries -->
		
		<!--[if lte IE 8]>
		<script src="assets/js/html5shiv.min.js"></script>
		<script src="assets/js/respond.min.js"></script>
		<![endif]-->
	</head>

	<body class="no-skin">
       @include('intranet/menu')	
			<div class="main-content">
				<div class="main-content-inner">

					<div class="page-content">

						<div class="row">
							<div class="col-xs-12">
								<!-- PAGE CONTENT BEGINS -->

								<div class="error-container">
									<div class="well">
										<h1 class="grey lighter smaller">
											<span class="blue bigger-125">
												<i class="ace-icon fa fa-random"></i>
												403
											</span>
											Acceso restringido
										</h1>

										<hr />
										<h3 class="lighter smaller">
											No tiene permisos para ver la p&aacute;gina que usted solicit&oacute; :(.
										</h3>

										<div class="space"></div>

										<div>
											Si cree que se trata de un error, o est&aacute; seguro de que necesita ver la p&aacute;gina, puede comunicarse con nosotros e intentaremos solucionarlo lo m&aacute;s pronto posible.
										</div>

										<hr />
										<div class="space"></div>

										<div class="center">
											<a href="javascript:history.back()" class="btn btn-inverse">
												<i class="ace-icon fa fa-arrow-left"></i>
												Regresar
											</a>
										</div>										
									</div>
								</div>

								<!-- PAGE CONTENT ENDS -->
							</div><!-- /.col -->
						</div><!-- /.row -->
					</div><!-- /.page-content -->
				</div>
			</div><!-- /.main-content -->

			@include('intranet/footer')	

		<!-- basic scripts -->

		<!--[if !IE]> -->
		{!! Html::script("assets/js/jquery-2.1.4.min.js") !!}
		<!-- <![endif]-->

		<!--[if IE]>
<script src="assets/js/jquery-1.11.3.min.js"></script>
<![endif]-->
		<script type="text/javascript">
			if('ontouchstart' in document.documentElement) document.write("<script src='assets/js/jquery.mobile.custom.min.js'>"+"<"+"/script>");
		</script>
		{!! Html::script("assets/js/bootstrap.min.js") !!}

		<!-- page specific plugin scripts -->

		<!-- ace scripts -->
		{!! Html::script("assets/js/ace-elements.min.js") !!}
		{!! Html::script("assets/js/ace.min.js") !!}

		<!-- inline scripts related to this page -->
	</body>
</html>
