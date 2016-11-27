<!DOCTYPE html>
<html lang="en">
<head>
<link rel="icon" type="image/png" href="icon/valor.png" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
	<meta charset="utf-8" />
	<title>Intranet | Página Personal</title>

	<meta name="description" content="3 styles with inline editable feature" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0" />

	<!-- bootstrap & fontawesome -->
	<link rel="stylesheet" href="assets/css/bootstrap.min.css" />
	<link rel="stylesheet" href="assets/font-awesome/4.5.0/css/font-awesome.min.css" />

	<!-- page specific plugin styles -->
	<link rel="stylesheet" href="assets/css/jquery-ui.custom.min.css" />
	<link rel="stylesheet" href="assets/css/jquery.gritter.min.css" />
    <link rel="stylesheet" href="assets/css/select2.min.css" />
	<link rel="stylesheet" href="assets/css/bootstrap-editable.min.css" />
    
	<!-- text fonts -->
	<link rel="stylesheet" href="assets/css/fonts.googleapis.com.css" />

	<!-- ace styles -->
	<link rel="stylesheet" href="assets/css/ace.min.css" class="ace-main-stylesheet" id="main-ace-style"/>
	<link rel="stylesheet" href="assets/css/ace-skins.min.css" />
	<link rel="stylesheet" href="assets/css/ace-rtl.min.css" />
    
    <!--logo -->
    <link rel="stylesheet" href="assets/css/index.css" />

	<!-- ace settings handler -->
	<script src="assets/js/ace-extra.min.js"></script>
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
                        <li class="active">Perfil </li>
                    </ul><!-- /.breadcrumb -->
                </div>

			<div class="page-content">
				<div class="page-header"><!-- /.page-header -->
					<h1>Página Personal</h1>
				</div>

				<div class="row">
					<div class="col-xs-12">
						<!-- PAGE CONTENT BEGINS -->
						<div class="hr dotted"></div>
						<div>
							<div id="user-profile-1" class="user-profile row">
								<div class="col-xs-12 col-sm-3 center"> <!-- lado izquierdo del profile: foto + nombre completo-->
									<div>
                                        <span class="profile-picture"> <!-- foto de profile-->
                                            <img id="avatar" class="editable img-responsive" alt="Alex's Avatar" src="assets/images/avatars/profile-pic.jpg" />
                                        </span>
										<div class="space-4"></div>
										<div class="width-80 label label-info label-xlg arrowed-in arrowed-in-right"><!--nombre completo-->
											<div class="inline position-relative">
												<span id="pro_name2"class="white"></span>												
											</div>
										</div>
									</div>
									<div class="space-6"></div>
								</div>

								<div class="col-xs-12 col-sm-9"><!--lado derecho del profile: datos del usuario-->
									<div class="space-12"></div>
									<div class="profile-user-info profile-user-info-striped">
										

										<div class="profile-info-row"><!--Nombres-->
											<div class="profile-info-name"> Nombres </div>
											<div class="profile-info-value">
												<span id="pro_name" class=""></span>
											</div>
										</div>

										<div class="profile-info-row"><!--Nombres-->
											<div class="profile-info-name"> Codigo Pucp </div>
											<div class="profile-info-value">
												<span id="pro_cod" class=""></span>
											</div>
										</div>

										<div class="profile-info-row"><!--Nombres-->
											<div class="profile-info-name">Rol</div>
											<div class="profile-info-value">
												<span id="pro_rol" class=""></span>
											</div>
										</div>

										<div class="profile-info-row"><!--Nombres-->
											<div class="profile-info-name"> Nro Documento </div>
											<div class="profile-info-value">
												<span id="pro_doc" class=""></span>
											</div>
										</div>


										


										<div class="profile-info-row"><!--correo-->
											<div class="profile-info-name"> Correo </div>
											<div class="profile-info-value">
												<span id="pro_correo" class="editable editable-clic username"></span>
                                                <div class="help-button" data-rel="popover" data-trigger="hover" data-placement="right" data-content="You can edit by click in text.">?</div>
											</div>
										</div>
									</div>
									<div class="space-20"></div>
									<div class="space-6"></div>
								</div>
							</div>
						</div>
						<!-- PAGE CONTENT ENDS -->
					</div><!-- /.col -->
				</div><!-- /.row -->
			</div><!-- /.page-content -->
		</div>
	</div><!-- /.main-content -->

	<?php  echo view('intranet/footer'); ?>	

<!-- basic scripts -->
<script src="assets/js/jquery-2.1.4.min.js"></script>
<script type="text/javascript">
	if('ontouchstart' in document.documentElement) document.write("<script src='assets/js/jquery.mobile.custom.min.js'>"+"<"+"/script>");
</script>
<script src="assets/js/bootstrap.min.js"></script>

<!-- page specific plugin scripts -->
<script src="assets/js/jquery-ui.custom.min.js"></script>
<script src="assets/js/jquery.ui.touch-punch.min.js"></script>
<script src="assets/js/jquery.gritter.min.js"></script>
<script src="assets/js/bootbox.js"></script>
<script src="assets/js/jquery.easypiechart.min.js"></script>
<script src="assets/js/bootstrap-datepicker.min.js"></script>
<script src="assets/js/jquery.hotkeys.index.min.js"></script>
<script src="assets/js/bootstrap-wysiwyg.min.js"></script>
<script src="assets/js/select2.min.js"></script>
<script src="assets/js/spinbox.min.js"></script>
<script src="assets/js/bootstrap-editable.min.js"></script>
<script src="assets/js/ace-editable.min.js"></script>
<script src="assets/js/jquery.maskedinput.min.js"></script>

<!-- ace scripts -->
<script src="assets/js/ace-elements.min.js"></script>
<script src="assets/js/ace.min.js"></script>

<!-- inline scripts related to this page -->
<script type="text/javascript">
	jQuery(function($) {
		//editables on first profile page
		$.fn.editable.defaults.mode = 'inline';
		$.fn.editableform.loading = "<div class='editableform-loading'><i class='ace-icon fa fa-spinner fa-spin fa-2x light-blue'></i></div>";
		$.fn.editableform.buttons = '<button type="submit" class="btn btn-info editable-submit"><i class="ace-icon fa fa-check"></i></button>'+
				'<button type="button" class="btn editable-cancel"><i class="ace-icon fa fa-times"></i></button>';
		//editables
		//text editable
        $('[data-rel=popover]').popover({container:'body'});
		$('.username').editable({
					type: 'text',
					name: 'username'
				});
		
		// *** editable avatar *** //
		try {//ie8 throws some harmless exceptions, so let's catch'em
			//first let's add a fake appendChild method for Image element for browsers that have a problem with this
			//because editable plugin calls appendChild, and it causes errors on IE at unpredicted points
			try {
				document.createElement('IMG').appendChild(document.createElement('B'));
			} catch(e) {
				Image.prototype.appendChild = function(el){}
			}
			var last_gritter
			$('#avatar').editable({
				type: 'image',
				name: 'avatar',
				value: null,
				image: {
					//specify ace file input plugin's options here
					btn_choose: 'Change Avatar',
					droppable: true,
					maxSize: 110000,//~100Kb
					//and a few extra ones here
					name: 'avatar',//put the field name here as well, will be used inside the custom plugin
					on_error : function(error_type) {//on_error function will be called when the selected file has a problem
						if(last_gritter) $.gritter.remove(last_gritter);
						if(error_type == 1) {//file format error
							last_gritter = $.gritter.add({
								title: 'File is not an image!',
								text: 'Please choose a jpg|gif|png image!',
								class_name: 'gritter-error gritter-center'
							});
						} else if(error_type == 2) {//file size rror
							last_gritter = $.gritter.add({
								title: 'File too big!',
								text: 'Image size should not exceed 100Kb!',
								class_name: 'gritter-error gritter-center'
							});
						}
						else {//other error
						}
					},
					on_success : function() {
						$.gritter.removeAll();
					}
				},
				url: function(params) {
					// ***UPDATE AVATAR HERE*** //
					//for a working upload example you can replace the contents of this function with
					//examples/profile-avatar-update.js
					var deferred = new $.Deferred
					var value = $('#avatar').next().find('input[type=hidden]:eq(0)').val();
					if(!value || value.length == 0) {
						deferred.resolve();
						return deferred.promise();
					}
					//dummy upload
					setTimeout(function(){
						if("FileReader" in window) {
							//for browsers that have a thumbnail of selected image
							var thumb = $('#avatar').next().find('img').data('thumb');
							if(thumb) $('#avatar').get(0).src = thumb;
						}
						deferred.resolve({'status':'OK'});
						if(last_gritter) $.gritter.remove(last_gritter);
						last_gritter = $.gritter.add({
							title: 'Avatar Updated!',
							//text: 'Uploading to server can be easily implemented. A working example is included with the template.',
							class_name: 'gritter-info gritter-center'
						});
					} , parseInt(Math.random() * 800 + 800))
					return deferred.promise();
					// ***END OF UPDATE AVATAR HERE*** //
				},
				success: function(response, newValue) {
				}
			})
		}catch(e) {}		
		///////////////////////////////////////////
		///////////////////////////////////////////
		$('#user-profile-3').find('input[type=file]').ace_file_input('show_file_list', [{type: 'image', name: $('#avatar').attr('src')}]);
		////////////////////
		//change profile
		$('[data-toggle="buttons"] .btn').on('click', function(e){
			var target = $(this).find('input[type=radio]');
			var which = parseInt(target.val());
			$('.user-profile').parent().addClass('hide');
			$('#user-profile-'+which).parent().removeClass('hide');
		});
		/////////////////////////////////////
		$(document).one('ajaxloadstart.page', function(e) {
			//in ajax mode, remove remaining elements before leaving page
			try {
				$('.editable').editable('destroy');
			} catch(e) {}
			$('[class*=select2]').remove();
		});
	});
</script>

<script type="text/javascript">
	
$(document).ready(function(){

		$.ajax({
		                   
		                    type: "GET",
		                    url:'user',
		                    success: function(result){
		        
		                        /* var data =  $.map(jQuery.parseJSON(result), function(value, index) {
		                            return [value];
		                        }); */

		                        var data = JSON.parse(result);

		                        $("#pro_name").html(data.nombre);
		                        $("#pro_name2").html(data.nombre);
		                         $("#pro_doc").html(data.documento);  
		                         $("#pro_cod").html(data.codigo); 
		                         $("#pro_correo").html(data.correo);  

		                         if(data.rol=='1')
		                         	 $("#pro_rol").html("Administrador"); 
		                         if(data.rol=='2')
		                         	 $("#pro_rol").html("Alumno"); 
		                         if(data.rol=='3')
		                         	 $("#pro_rol").html("Voluntario"); 
		                         if(data.rol=='4')
		                         	 $("#pro_rol").html("Docente"); 
		                         if(data.rol=='5')
		                         	 $("#pro_rol").html("Jefe de Practica"); 
		                         if(data.rol=='6')
		                         	 $("#pro_rol").html("Editor de contenidos");
		                          if(data.rol=='7')
		                         	 $("#pro_rol").html("Cliente"); 
		                         
		                    }
		                        
		                            
		            
		                 
		            
		                });
	
	});


</script>
</body>
</html>