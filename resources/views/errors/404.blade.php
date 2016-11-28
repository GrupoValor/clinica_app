<!DOCTYPE html>	
<html lang="en">
	<head>
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
		<meta charset="utf-8" />
		<title>Cl&iacute;nica Jur&iacute;dica | Error</title>

		<meta name="description" content="Error 404" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0" />

		<!-- bootstrap & fontawesome -->
		{!! Html::style("assets/css/bootstrap.min.css") !!}		{!! Html::style("assets/font-awesome/4.5.0/css/font-awesome.min.css") !!}
		<!-- page specific plugin styles -->
		
		<!-- text fonts -->
		{!! Html::style("assets/css/fonts.googleapis.com.css") !!}
		<!-- ace styles -->
		{!! Html::style("assets/css/ace.min.css", ['class' => "ace-main-stylesheet", 'id' => "main-ace-style"]) !!}
        <!--logo -->
        {!! Html::style('assets/css/index.css') !!}
		<!--[if lte IE 9]>
			{!! Html::style('assets/css/ace-part2.min.css', ['class' => "ace-main-stylesheet"]) !!}
		<![endif]-->
		
		{!! Html::style("assets/css/ace-skins.min.css") !!}
		{!! Html::style("assets/css/ace-rtl.min.css") !!}
		<!--[if lte IE 9]>
		  {!! Html::style("assets/css/ace-ie.min.css") !!}
		<![endif]-->
		
		<!-- inline styles related to this page -->
		
		<!-- ace settings handler -->
		{!! Html::script("assets/js/ace-extra.min.js") !!}
		<!-- HTML5shiv and Respond.js for IE8 to support HTML5 elements and media queries -->
		
		<!--[if lte IE 8]>
		{!! Html::script("assets/js/html5shiv.min.js") !!}		{!! Html::script("assets/js/respond.min.js") !!}		<![endif]-->
		
	</head>

	<body class="no-skin">
	<div class="main-container ace-save-state" id="main-container">
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
												404
											</span>
											No se encuentra la p&aacute;gina
										</h1>

										<hr />
										<h3 class="lighter smaller">
											La p&aacute;gina que usted solicit&oacute; no existe o el servidor no la encontr&oacute;.
										</h3>

										<div class="space"></div>

										<div>
											Verifique si de casualidad habr&aacute; cometido un error al intentar navegar hasta esta p&aacute;gina. Si a pesar de ello el problema persiste, puede comunicarse con nosotros e intentaremos solucionarlo lo m&aacute;s pronto posible.
										</div>

										<hr />
									</div>
								</div>

								<!-- PAGE CONTENT ENDS -->
							</div><!-- /.col -->
						</div><!-- /.row -->
					</div><!-- /.page-content -->
				</div>

			</div><!-- /.main-content -->
		@include('intranet/footer')
	</div>




		<!-- basic scripts -->

		<!--[if !IE]> -->
		{!! Html::script("assets/js/jquery-2.1.4.min.js") !!}
		<!-- <![endif]-->

		<!--[if IE]>
		  {!! Html::script("assets/js/jquery-1.11.3.min.js") !!}
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
