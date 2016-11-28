<!DOCTYPE html>
<html lang="en">
	<head>
  <link rel="icon" type="image/png" href="icono/valor.png" />
    <meta name="csrf_token" content="{{ csrf_token() }}" />
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
		<meta charset="utf-8" />
		<title>Intranet | Mantenimientos - Profesor</title>

		<meta name="description" content="Dynamic tables and grids using jqGrid plugin" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0" />

		<!-- bootstrap & fontawesome -->
		<link rel="stylesheet" href="assets/css/bootstrap.min.css" />
		<link rel="stylesheet" href="assets/font-awesome/4.5.0/css/font-awesome.min.css" />

		<!-- page specific plugin styles -->
		<link rel="stylesheet" href="assets/css/jquery-ui.min.css" />
		<link rel="stylesheet" href="assets/css/ui.jqgrid.min.css" />

		<!-- text fonts -->
		<link rel="stylesheet" href="assets/css/fonts.googleapis.com.css" />
        
        <!--logo -->
        <link rel="stylesheet" href="assets/css/index.css" />

		<!-- ace styles -->
		<link rel="stylesheet" href="assets/css/ace.min.css" class="ace-main-stylesheet" id="main-ace-style" />
		<link rel="stylesheet" href="assets/css/ace-skins.min.css" />
		<link rel="stylesheet" href="assets/css/ace-rtl.min.css" />

        <script src="assets/js/ace-extra.min.js"></script>

	</head>

	<body class="no-skin">
		<?php  echo view('intranet/menu'); ?>
        
        <div  class="main-content">
        
        <select class="target">
            <option selected="selected" disabled selected value="0" > -- Select an option -- </option>
            <option value="1" >Docente</option>
            <option value="2">Alumno</option>
            <option value="3">Cliente</option>
          </select>
           <div id ="test" class="main-content">

        </div>			
      

		<script type="text/javascript">

        $(document).ready(function(){
            $( ".target" ).change(function() {
              var token = $( "select option:selected" ).val()
              if(token == '1')
              {
                 $.ajax({ 
                    type: "GET",
                    url:'docente',
                    success: function(result){
                        $("#test").html(result);
                    }         
            
                });    
              }

              if(token == '2')

              {

                $.ajax({ 
                    type: "GET",
                    url:'alumno',
                    success: function(result){
                        $("#test").html(result);
                    }         
            
                }); 


              }


              if(token == '3')

              {

                $.ajax({ 
                    type: "GET",
                    url:'cliente',
                    success: function(result){
                        $("#test").html(result);
                    }         
            
                }); 


              }


            });

        });

       
        </script>

		




	</body>
</html>
