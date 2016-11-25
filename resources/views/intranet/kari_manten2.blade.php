<!DOCTYPE html>
<html lang="en">

<head>
	<meta name="csrf_token" content="{{ csrf_token() }}" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
	<meta charset="utf-8" />
	<title>Intranet | Mantenimientos</title>
	<meta name="description" content="Dynamic tables and grids using jqGrid plugin" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0" />
	<!-- bootstrap & fontawesome -->
	<link rel="stylesheet" href="assets/css/bootstrap.min.css" />
	<link rel="stylesheet" href="assets/font-awesome/4.5.0/css/font-awesome.min.css" />
	<!-- page specific plugin styles -->
	<link rel="stylesheet" href="assets/css/jquery-ui.min.css" />
	<link rel="stylesheet" href="assets/css/ui.jqgrid.min.css" />
    <link rel="stylesheet" href="assets/css/bootstrap-datepicker3.min.css" />
	<!-- text fonts -->
	<link rel="stylesheet" href="assets/css/fonts.googleapis.com.css" />
	<!--logo -->
	<link rel="stylesheet" href="assets/css/index.css" />
	<!-- ace styles -->
	<link rel="stylesheet" href="assets/css/ace.min.css" class="ace-main-stylesheet" id="main-ace-style" />
	<link rel="stylesheet" href="assets/css/ace-skins.min.css" />
	<link rel="stylesheet" href="assets/css/ace-rtl.min.css" />
	<script src="assets/js/ace-extra.min.js"></script>
    <!--<style>
        input[type='number'] {
            -moz-appearance:textfield;
        }

        input::-webkit-outer-spin-button,
        input::-webkit-inner-spin-button {
            -webkit-appearance: none;
        }
    </style>-->
</head>

<body class="no-skin">
	<?php echo view( 'intranet/menu'); ?>
	<div class="main-content">
		<div class="main-content-inner">
			<div class="breadcrumbs ace-save-state" id="breadcrumbs">
				<ul class="breadcrumb">
					<li> <i class="ace-icon fa fa-home home-icon"></i> <a href="index">Home</a> </li>
					<li> Mantenimientos </li>
				</ul>
			</div>
			<div class="page-content">
				<div class="page-header">
					<!-- /.page-header -->
					<h1 id="mytitulo">
                        Mantenimientos							
                    </h1> </div>
				<div>
					<select id='myOptions'>
						
					</select>
					<button id="boton_nuevo" type="button" class="btn btn-primary hide" style="float: right;margin-top: -8px;" onclick="add_onClick()">Nuevo +</button>
				</div>
                <div class="row" id="comentario_ini" style="text-align:center; margin-top:10%; color: grey;">
                    <h3>Selecciona la tabla a mostrar</h3>                
                </div>
				<div class="row hide" id="table-alu"> <!--Alumnos-->
					<?php echo view( 'intranet/manten_alumno'); ?>
				</div>
				<!-- /.row -->
				<div class="row hide" id="table-prof"> <!--Profesor-->
					<?php echo view( 'intranet/manten_profesor'); ?>
				</div>
				<!-- /.row -->
				<div class="row hide" id="table-jp"> <!--JP-->
					<?php echo view( 'intranet/manten_jp'); ?>
				</div>
				<!-- /.row -->
				<div class="row hide" id="table-cli"> <!--Cliente-->
					<?php echo view( 'intranet/manten_cliente'); ?>
				</div>
				<!-- /.row -->
			</div>
			<!-- /.page-content -->
		</div>
	</div>
    
    <?php echo view( 'intranet/footer'); ?>
	<!-- basic scripts -->
	<!--[if !IE]> -->
	<script src="assets/js/jquery-2.1.4.min.js"></script>
	<script type="text/javascript">
	if('ontouchstart' in document.documentElement) document.write(" < script src = 'assets/js/jquery.mobile.custom.min.js' > "+" < "+" / script > ");
	</script>
	<script src="assets/js/bootstrap.min.js"></script>
	<!-- page specific plugin scripts -->
	<script src="assets/js/jquery.dataTables.min.js"></script>
	<script src="assets/js/jquery.dataTables.bootstrap.min.js"></script>
	<script src="assets/js/dataTables.buttons.min.js"></script>
	<script src="assets/js/buttons.flash.min.js"></script>
	<script src="assets/js/buttons.html5.min.js"></script>
	<script src="assets/js/buttons.print.min.js"></script>
	<script src="assets/js/buttons.colVis.min.js"></script>
	<script src="assets/js/dataTables.select.min.js"></script>
	<script src="assets/js/ace-elements.min.js"></script>
	<script src="assets/js/ace.min.js"></script>
	<script type="text/javascript"></script>
    <script src="assets/js/bootstrap-datepicker.min.js"></script>
    <script src="assets/js/spinbox.min.js"></script>
    <script type="text/javascript">
        $(document).ready(function(){
            
            $.ajax({
                   
                    type: "GET",
                    url:'user',
                    success: function(result){
        
                        var data = JSON.parse(result);

                       if (data.rol == '1'){
                        $('#myOptions').html('<option selected="selected" disabled selected value="0" > -- Select an option -- </option>'+
                                '<option value="1">Profesor</option>'+
                                '<option value="2">Jefe de práctica</option>'+
                                '<option value="3">Alumno</option>'+
                                '<option value="4">Cliente</option>')
                        }

                        if (data.rol == '2' || data.rol == '3'){
                        $('#myOptions').html('<option selected="selected" disabled selected value="0" > -- Select an option -- </option>'+
                                '<option value="4">Cliente</option>')
                        }
                        if (data.rol == '4'){
                        $('#myOptions').html('<option selected="selected" disabled selected value="0" > -- Select an option -- </option>'+
                            '<option value="2">Jefe de práctica</option>'+
                            '<option value="3">Alumno</option>'+
                            '<option value="4">Cliente</option>')
                        }
                        if (data.rol == '5'){
                        $('#myOptions').html('<option selected="selected" disabled selected value="0" > -- Select an option -- </option>'+
                            '<option value="3">Alumno</option>'+
                            '<option value="4">Cliente</option>')
                        }
                        $('#limantenimientos').addClass('active');

                    }
                        
                            
            
                 
            
                });



        });
    </script>

	<!-- inline scripts related to this page -->
	<script type="text/javascript"> 
        jQuery(function($) {
        $('.date-picker').datepicker({
            dateFormat: 'yyyy-mm-dd',
            autoclose: true,
            todayHighlight: true
        }).next().on(ace.click_event, function(){
            $(this).prev().focus();
        });
        $('#cli_numhij').ace_spinner({value:0,min:0,max:20,step:1, on_sides: true, icon_up:'ace-icon fa fa-plus bigger-110', icon_down:'ace-icon fa fa-minus bigger-110', btn_up_class:'btn-success' , btn_down_class:'btn-danger'});
    });
	
    var previous;
    var table_previous;
    var myselect;
    
	function add_onClick() { //Cuando se da click Nuevo+
        switch(myselect){
            case '1': //Profesor
                add_onClick_Profesor();               
                break;
            case '2': //JP
                add_OnClick_JP();                
                break;
            case '3': //Alumno
                add_OnClick_Alumno();                
                break;
            case '4': //Cliente
                add_onClick_Cliente();                                
                break;
            default:
                break;                
        }		
	}
        
    $(document).keydown(function(ev){ //Close modal by ESC key
        if(ev.keyCode == 27){
            $("#modal_alumno").trigger("click");
            $("#modal_profesor").trigger("click");
            $("#modal_jp").trigger("click");
            $("#modal_cliente").trigger("click");
        }
    });
    $('#myOptions').focus(function(){
        previous = this.value;  
    }).change(function(){
        myselect = this.value;//$("#myOptions option:selected").attr('value');
        var table_display;
        switch(myselect){
            case '1': //Profesor
                table_display = $("#table-prof");
                break;
            case '2': //JP
                table_display = $("#table-jp");
                break;
            case '3': //Alumno
                table_display = $("#table-alu");
                break;
            case '4': //Cliente
                table_display = $("#table-cli");
                break;
            default:
                break;
        }
        table_display.removeClass('hide');
        table_display.addClass('show');            
        if(previous!='0'){
           table_previous.removeClass('show'); 
           table_previous.addClass('hide'); 
        }else{
            $('#comentario_ini').addClass('hide');
            $('#boton_nuevo').removeClass('hide');
            $('#boton_nuevo').addClass('show');
        }
        previous = this.value;
        table_previous = table_display;
    });    
    </script>
</body>
</html>