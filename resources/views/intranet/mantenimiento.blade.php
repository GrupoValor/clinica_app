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
						<option disabled selected value="0" style="display:none;"> -- Select an option -- </option>
						<option value="1">Profesor</option>
						<option value="2">Jefe de práctica</option>
						<option value="3">Alumno</option>
						<option value="4">Cliente</option>
					</select>
					<button id="boton_nuevo" type="button" class="btn btn-primary hide" style="float: right;margin-top: -8px;" onclick="add_onClick()">Nuevo +</button>
				</div>
                <div class="row" id="comentario_ini" style="text-align:center; margin-top:10%; color: grey;">
                    <h3>Selecciona la tabla a mostrar</h3>                
                </div>
				<div class="row hide" id="table-alu"> <!--Alumnos-->
					<div class="col-xs-12">
						<!-- PAGE CONTENT BEGINS -->
						<table id="dynamic-table-alu" class="table table-striped table-bordered table-hover">
							<thead>
								<tr>
									<th>ID</th>
									<th>Nombre</th>
									<th>Codigo Pucp</th>
									<th>Número Documento</th>
									<th>Correo</th>
									<th>Voluntario</th>
									<th>Modificar</th>
								</tr>
							</thead>
							<tbody id="tbodycontent"></tbody>
						</table>
						<div id="grid-pager"></div>
						<!-- PAGE CONTENT ENDS -->
					</div>
					<!-- /.col -->
				</div>
				<!-- /.row -->
				<div class="row hide" id="table-prof"> <!--Profesor-->
					<div class="col-xs-12">
						<!-- PAGE CONTENT BEGINS -->
						<table id="dynamic-table-prof" class="table table-striped table-bordered table-hover">
							<thead>
								<tr>
									<th>ID</th>
									<th>Nombre</th>
									<th>Codigo Pucp</th>
									<th>Correo</th>
									<th>Modificar</th>
								</tr>
							</thead>
							<tbody id="tbodycontent"></tbody>
						</table>
						<div id="grid-pager"></div>
						<!-- PAGE CONTENT ENDS -->
					</div>
					<!-- /.col -->
				</div>
				<!-- /.row -->
				<div class="row hide" id="table-jp"> <!--JP-->
					<div class="col-xs-12">
						<!-- PAGE CONTENT BEGINS -->
						<table id="dynamic-table-jp" class="table table-striped table-bordered table-hover">
							<thead>
								<tr>
									<th>ID</th>
									<th>Nombre</th>
									<th>Codigo Pucp</th>
									<th>Correo</th>
									<th>Modificar</th>
								</tr>
							</thead>
							<tbody id="tbodycontent"></tbody>
						</table>
						<div id="grid-pager"></div>
						<!-- PAGE CONTENT ENDS -->
					</div>
					<!-- /.col -->
				</div>
				<!-- /.row -->
				<div class="row hide" id="table-cli"> <!--Cliente-->
					<div class="col-xs-12">
						<!-- PAGE CONTENT BEGINS -->
						<table id="dynamic-table-cli" class="table table-striped table-bordered table-hover">
							<thead>
								<tr>
									<th>ID</th>
									<th>Nombre</th>
									<th>Número Documento</th>
									<th>Teléfono</th>
									<th>Correo</th>
									<th>Modificar</th>
								</tr>
							</thead>
							<tbody id="tbodycontent"></tbody>
						</table>
						<div id="grid-pager"></div>
						<!-- PAGE CONTENT ENDS -->
					</div>
					<!-- /.col -->
				</div>
				<!-- /.row -->
			</div>
			<!-- /.page-content -->
		</div>
	</div>
	<!-- /.main-content -->
	<!-- Popup :  Agregar Alumno-->
	<div align="center">
		<div class="modal fade" id="modal_alumno" role="dialog">
			<div class="modal-dialog" style="width: 650px">
				<div class="modal-content">
					<!-- Modal content-->
					<div class="page-header">
						<!-- /.page-header -->
                        <button type="button" class="fa fa-times btn-danger" style="float: right; margin-right: 8px" data-dismiss="modal"></button>
                        <div class="space-10"></div>
						<h1>  Alumno </h1>
                    </div>
                    <div class="row">
						<form class="form-horizontal" role="form">
							<div class="form-group">
								<label class="col-sm-3 col-xs-3 control-label" for="form-field-3"> Nombres </label>
								<div class="col-sm-9 col-xs-9">
									<input id="alu_nombre" type="text" class="col-xs-9 col-sm-9" placeholder="*obligatorio" /> 
                                </div>
							</div>
                            <div class="space-4"></div>
							<div class="form-group">
								<label class="col-sm-3 col-xs-3 control-label no-padding-right" for="form-field-5"> Apellido paterno </label>
								<div class="col-sm-9 col-xs-9">
									<input id="alu_apePat" type="text" class="col-xs-9 col-sm-9" placeholder="*obligatorio"/> </div>
							</div>
                            <div class="space-4"></div>
							<div class="form-group">
								<label class="col-sm-3 col-xs-3 control-label no-padding-right" for="form-field-5"> Apellido materno </label>
								<div class="col-sm-9 col-xs-9">
									<input id="alu_apeMat" type="text" class="col-xs-9 col-sm-9" placeholder="*obligatorio"/> </div>
							</div>							
							<div class="space-4"></div>
                            <div class="form-group" id="alu_docs">
                                <label class="col-sm-3 col-xs-3 control-label no-padding-right" for="form-field-5"> Tipo de documento</label>
                                <label class="radio-inline" style="margin-left:-15%;">
                                    <input type="radio" name="docs" value="dni" checked="checked"> DNI 
                                </label> 
                                <label class="radio-inline">
                                    <input type="radio" name="docs" value="libreta"> Libreta militar 
                                </label> 
                                <label class="radio-inline">
                                    <input type="radio"  name="docs"value="pasaporte"> Pasaporte 
                                </label>
                                <label class="radio-inline">
                                    <input type="radio"  name="docs" value="otro"> Otro
                                </label>
                            </div>
							<div class="space-4"></div>
							<div class="form-group">
								<label class="col-sm-3 col-xs-3 control-label no-padding-right" for="form-field-5"> N° documento </label>
								<div class="col-sm-9 col-xs-9">
									<input id="alu_nrodoc" type="text" class="col-xs-5 col-sm-7" placeholder="*obligatorio"/> </div>
							</div>                            
                            <div class="space-4"></div>
                            <div class="form-group">
								<label class="col-sm-3 col-xs-3 control-label no-padding-right" for="form-field-5"> Fecha de nacimiento </label>
                                <div class="col-sm-3 col-xs-3">
                                    <div class="input-group">
                                        <input placeholder="*obligatorio" class="form-control date-picker" id="alu_date_picker" type="text" data-date-format="dd-mm-yyyy" />
                                        <span class="input-group-addon">
                                            <i class="fa fa-calendar bigger-110"></i>
                                        </span>
                                    </div>
                                </div>								
							</div>
                            <div class="space-4"></div>
                            <div class="form-group">
								<label class="col-sm-3 col-xs-3 control-label no-padding-right" for="form-field-5">Teléfono 1 </label>
								<div class="col-sm-9 col-xs-9">
									<input id="alu_telf1" type="text" class="col-xs-5 col-sm-7" /> </div>
							</div>
                            <div class="space-4"></div>
                            <div class="form-group">
								<label class="col-sm-3 col-xs-3 control-label no-padding-right" for="form-field-5">Teléfono 2</label>
								<div class="col-sm-9 col-xs-9">
									<input id="alu_tel2" type="text" class="col-xs-5 col-sm-7" /> </div>
							</div>
                            
                            <div class="space-4"></div>
                            <div class="form-group">
								<label class="col-sm-3 col-xs-3 control-label no-padding-right" for="form-field-5">Clínica jurídica </label>
								<div class="col-sm-9 col-xs-9">
									<select id='alu_clinica' class="col-xs-5 col-sm-7">
                                        <option disabled selected value="0" style="display:none;">*Obligatorio</option>
                                        <option value="1">Clínica 1</option>
                                        <option value="2">Clínica 2</option>
                                        <option value="3">Clínica 3</option>
                                        <option value="4">Clínica 4</option>
                                    </select>
                                </div>
							</div>
                            <div class="space-4"></div>                             
							<div class="form-group">
								<label class="col-sm-3 col-xs-3 control-label no-padding-right" for="form-field-5"> Código PUCP </label>
								<div class="col-sm-9 col-xs-9">
									<input id="alu_codpucp" type="text" class="col-xs-5 col-sm-7" placeholder="*obligatorio" /> </div>
							</div>
							<div class="space-4"></div>
							<div class="form-group">
								<label class="col-sm-3 col-xs-3 control-label no-padding-right" for="form-field-5"> Correo </label>
								<div class="col-sm-9 col-xs-9">
									<input id="alu_correo" type="text" id="form-field-5" class="col-xs-5 col-sm-7" placeholder="*obligatorio" /> </div>
							</div>							
							<div class="space-4"></div>
                            <div class="form-group">
								<label class="col-sm-3 col-xs-3 control-label no-padding-right" for="form-field-5"> Usuario </label>
								<div class="col-sm-9 col-xs-9">
									<input id="alu_user" type="text" class="col-xs-5 col-sm-7" placeholder="*obligatorio"/> </div>
							</div>
							<div class="space-4"></div>
                            <div class="form-group">
								<label class="col-sm-3 col-xs-3 control-label no-padding-right" for="form-field-5">Contraseña </label>
								<div class="col-sm-9 col-xs-9">
									<input id="alu_pass" type="text" class="col-xs-5 col-sm-7" placeholder="*obligatorio"/> </div>
							</div>
							<div class="space-20"></div>
						</form>
                    </div>
					
					<div class="modal-footer">
						<div align="center">
							<button id="boton_registrar" type="button" class="btn btn-primary" data-dismiss="modal" onclick="close();">Registrar</button>
                            &nbsp; &nbsp; &nbsp;
                            <button type="button" class="btn btn-primary btn-danger" data-dismiss="modal">Cancelar</button>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	
    <!-- Popup :  Agregar Profesor-->
	<div align="center">
		<div class="modal fade" id="modal_profesor" role="dialog">
			<div class="modal-dialog" style="width: 650px">
				<div class="modal-content">
					<!-- Modal content-->
					<div class="page-header">
						<!-- /.page-header -->
                        <button type="button" class="fa fa-times btn-danger" style="float: right; margin-right: 8px" data-dismiss="modal"></button>
                        <div class="space-10"></div>
						<h1>  Profesor </h1>
                    </div>
                    <div class="row">
						<form class="form-horizontal" role="form">
							<div class="form-group">
								<label class="col-sm-3 col-xs-3 control-label" for="form-field-3"> Nombres </label>
								<div class="col-sm-9 col-xs-9">
									<input id="prof_nombre" type="text" class="col-xs-9 col-sm-9" placeholder="*obligatorio" /> 
                                </div>
							</div>
                            <div class="space-4"></div>
							<div class="form-group">
								<label class="col-sm-3 col-xs-3 control-label no-padding-right" for="form-field-5"> Apellido paterno </label>
								<div class="col-sm-9 col-xs-9">
									<input id="prof_apePat" type="text" class="col-xs-9 col-sm-9" placeholder="*obligatorio"/> </div>
							</div>
                            <div class="space-4"></div>
							<div class="form-group">
								<label class="col-sm-3 col-xs-3 control-label no-padding-right" for="form-field-5"> Apellido materno </label>
								<div class="col-sm-9 col-xs-9">
									<input id="prof_apeMat" type="text" class="col-xs-9 col-sm-9" placeholder="*obligatorio"/> </div>
							</div>							
							<div class="space-4"></div>
                            <div class="form-group" id="prof_docs">
                                <label class="col-sm-3 col-xs-3 control-label no-padding-right" for="form-field-5"> Tipo de documento</label>
                                <label class="radio-inline" style="margin-left:-15%;">
                                    <input type="radio" name="docs" value="dni" checked="checked"> DNI 
                                </label> 
                                <label class="radio-inline">
                                    <input type="radio" name="docs" value="libreta"> Libreta militar 
                                </label> 
                                <label class="radio-inline">
                                    <input type="radio"  name="docs"value="pasaporte"> Pasaporte 
                                </label>
                                <label class="radio-inline">
                                    <input type="radio"  name="docs" value="otro"> Otro
                                </label>
                            </div>
							<div class="space-4"></div>
							<div class="form-group">
								<label class="col-sm-3 col-xs-3 control-label no-padding-right" for="form-field-5"> N° documento </label>
								<div class="col-sm-9 col-xs-9">
									<input id="prof_nrodoc" type="text" class="col-xs-5 col-sm-7" placeholder="*obligatorio"/> </div>
							</div>                            
                            <div class="space-4"></div>
                            <div class="form-group">
								<label class="col-sm-3 col-xs-3 control-label no-padding-right" for="form-field-5"> Fecha de nacimiento </label>
                                <div class="col-sm-3 col-xs-3">
                                    <div class="input-group">
                                        <input placeholder="*obligatorio" class="form-control date-picker" id="prof_date_picker" type="text" data-date-format="dd-mm-yyyy" />
                                        <span class="input-group-addon">
                                            <i class="fa fa-calendar bigger-110"></i>
                                        </span>
                                    </div>
                                </div>								
							</div>
                            <div class="space-4"></div>
                            <div class="form-group">
								<label class="col-sm-3 col-xs-3 control-label no-padding-right" for="form-field-5">Teléfono 1 </label>
								<div class="col-sm-9 col-xs-9">
									<input id="prof_telf1" type="text" class="col-xs-5 col-sm-7" /> </div>
							</div>
                            <div class="space-4"></div>
                            <div class="form-group">
								<label class="col-sm-3 col-xs-3 control-label no-padding-right" for="form-field-5">Teléfono 2</label>
								<div class="col-sm-9 col-xs-9">
									<input id="prof_tel2" type="text" class="col-xs-5 col-sm-7" /> </div>
							</div>
                            
                            <div class="space-4"></div>
                            <div class="form-group">
								<label class="col-sm-3 col-xs-3 control-label no-padding-right" for="form-field-5">Clínica jurídica </label>
								<div class="col-sm-9 col-xs-9">
									<select id='prof_clinica' class="col-xs-5 col-sm-7">
                                        <option disabled selected value="0" style="display:none;">*Obligatorio</option>
                                        <option value="1">Clínica 1</option>
                                        <option value="2">Clínica 2</option>
                                        <option value="3">Clínica 3</option>
                                        <option value="4">Clínica 4</option>
                                    </select>
                                </div>
							</div>
                            <div class="space-4"></div>                             
							<div class="form-group">
								<label class="col-sm-3 col-xs-3 control-label no-padding-right" for="form-field-5"> Código PUCP </label>
								<div class="col-sm-9 col-xs-9">
									<input id="prof_codpucp" type="text" class="col-xs-5 col-sm-7" placeholder="*obligatorio" /> </div>
							</div>
							<div class="space-4"></div>
							<div class="form-group">
								<label class="col-sm-3 col-xs-3 control-label no-padding-right" for="form-field-5"> Correo </label>
								<div class="col-sm-9 col-xs-9">
									<input id="prof_correo" type="text" id="form-field-5" class="col-xs-5 col-sm-7" placeholder="*obligatorio" /> </div>
							</div>							
							<div class="space-4"></div>
                            <div class="form-group">
								<label class="col-sm-3 col-xs-3 control-label no-padding-right" for="form-field-5"> Usuario </label>
								<div class="col-sm-9 col-xs-9">
									<input id="prof_user" type="text" class="col-xs-5 col-sm-7" placeholder="*obligatorio"/> </div>
							</div>
							<div class="space-4"></div>
                            <div class="form-group">
								<label class="col-sm-3 col-xs-3 control-label no-padding-right" for="form-field-5">Contraseña </label>
								<div class="col-sm-9 col-xs-9">
									<input id="prof_pass" type="text" class="col-xs-5 col-sm-7" placeholder="*obligatorio"/> </div>
							</div>
							<div class="space-20"></div>
						</form>
                    </div>
					
					<div class="modal-footer">
						<div align="center">
							<button id="boton_registrar" type="button" class="btn btn-primary" data-dismiss="modal" onclick="close();">Registrar</button>
                            &nbsp; &nbsp; &nbsp;
                            <button type="button" class="btn btn-primary btn-danger" data-dismiss="modal">Cancelar</button>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	
    <!-- Popup :  Agregar Cliente-->
	<div align="center">
		<div class="modal fade" id="modal_cliente" role="dialog">
			<div class="modal-dialog" style="width: 650px">
				<div class="modal-content">
					<!-- Modal content-->
					<div class="page-header">
						<!-- /.page-header -->
                        <button type="button" class="fa fa-times btn-danger" style="float: right; margin-right: 8px" data-dismiss="modal"></button>
                        <div class="space-10"></div>
						<h1>  Cliente </h1>
                    </div>
                    <div class="row">
						<form class="form-horizontal" role="form">
							<div class="form-group">
								<label class="col-sm-3 col-xs-3 control-label" for="form-field-3"> Nombres </label>
								<div class="col-sm-9 col-xs-9">
									<input id="cli_nombre" type="text" class="col-xs-9 col-sm-9" placeholder="*obligatorio" /> 
                                </div>
							</div>
                            <div class="space-4"></div>
							<div class="form-group">
								<label class="col-sm-3 col-xs-3 control-label no-padding-right" for="form-field-5"> Apellido paterno </label>
								<div class="col-sm-9 col-xs-9">
									<input id="cli_apePat" type="text" class="col-xs-9 col-sm-9" placeholder="*obligatorio"/> </div>
							</div>
                            <div class="space-4"></div>
							<div class="form-group">
								<label class="col-sm-3 col-xs-3 control-label no-padding-right" for="form-field-5"> Apellido materno </label>
								<div class="col-sm-9 col-xs-9">
									<input id="cli_apeMat" type="text" class="col-xs-9 col-sm-9" placeholder="*obligatorio"/> </div>
							</div>							
							<div class="space-4"></div>
                            <div class="form-group" id="cli_docs">
                                <label class="col-sm-3 col-xs-3 control-label no-padding-right" for="form-field-5"> Tipo de documento</label>
                                <label class="radio-inline" style="margin-left:-15%;">
                                    <input type="radio" name="docs" value="dni" checked="checked"> DNI 
                                </label> 
                                <label class="radio-inline">
                                    <input type="radio" name="docs" value="libreta"> Libreta militar 
                                </label> 
                                <label class="radio-inline">
                                    <input type="radio"  name="docs"value="pasaporte"> Pasaporte 
                                </label>
                                <label class="radio-inline">
                                    <input type="radio"  name="docs" value="otro"> Otro
                                </label>
                            </div>
							<div class="space-4"></div>
							<div class="form-group">
								<label class="col-sm-3 col-xs-3 control-label no-padding-right" for="form-field-5"> N° documento </label>
								<div class="col-sm-9 col-xs-9">
									<input id="cli_nrodoc" type="text" class="col-xs-5 col-sm-7" placeholder="*obligatorio"/> </div>
							</div>                            
                            <div class="space-4"></div>
                            <div class="form-group">
								<label class="col-sm-3 col-xs-3 control-label no-padding-right" for="form-field-5"> Fecha de nacimiento </label>
                                <div class="col-sm-3 col-xs-3">
                                    <div class="input-group">
                                        <input placeholder="*obligatorio" class="form-control date-picker" id="cli_date_picker" type="text" data-date-format="dd-mm-yyyy" />
                                        <span class="input-group-addon">
                                            <i class="fa fa-calendar bigger-110"></i>
                                        </span>
                                    </div>
                                </div>								
							</div>
                            <div class="space-4"></div>
                            <div class="form-group">
								<label class="col-sm-3 col-xs-3 control-label no-padding-right" for="form-field-5">Teléfono 1 </label>
								<div class="col-sm-9 col-xs-9">
									<input id="cli_telf1" type="text" class="col-xs-5 col-sm-7" /> </div>
							</div>
                            <div class="space-4"></div>
                            <div class="form-group">
								<label class="col-sm-3 col-xs-3 control-label no-padding-right" for="form-field-5">Teléfono 2</label>
								<div class="col-sm-9 col-xs-9">
									<input id="cli_tel2" type="text" class="col-xs-5 col-sm-7" /> </div>
							</div>
                            <div class="space-4"></div>
							<div class="form-group">
								<label class="col-sm-3 col-xs-3 control-label no-padding-right" for="form-field-5"> Correo </label>
								<div class="col-sm-9 col-xs-9">
									<input id="cli_correo" type="text" id="form-field-5" class="col-xs-5 col-sm-7" placeholder="*obligatorio" /> </div>
							</div>
                            <div class="space-4"></div>
                            <div class="form-group">
								<label class="col-sm-3 col-xs-3 control-label no-padding-right" for="form-field-5">Nivel educativo</label>
								<div class="col-sm-9 col-xs-9">
									<select id='cli_educacion' class="col-xs-5 col-sm-7">
                                        <option disabled selected value="0" style="display:none;">*Obligatorio</option>
                                        <option value="1">Primaria</option>
                                        <option value="2">Secundaria</option>
                                        <option value="3">Superior</option>
                                    </select>
                                </div>
							</div>
                            <div class="space-4"></div>                             
							<div class="form-group">
								<label class="col-sm-3 col-xs-3 control-label no-padding-right" for="form-field-5"> N° hijos </label>
								<div class="col-sm-9 col-xs-9" style="margin-left:-27%;">
									<input type="text" id="cli_spinner"/>
                                </div>
							</div>
                            <div class="space-4"></div>
							<div class="form-group">
								<label class="col-sm-3 col-xs-3 control-label no-padding-right" for="form-field-5"> Ocupación </label>
								<div class="col-sm-9 col-xs-9">
									<input id="cli_ocupacion" type="text" id="form-field-5" class="col-xs-5 col-sm-7" placeholder="*obligatorio" /> </div>
							</div>		
                            <div class="space-4"></div>
							<div class="form-group">
								<label class="col-sm-3 col-xs-3 control-label no-padding-right" for="form-field-5"> Dirección </label>
								<div class="col-sm-9 col-xs-9">
									<input id="cli_direccion" type="text" id="form-field-5" class="col-xs-9 col-sm-9" placeholder="*obligatorio" /> </div>
							</div>	
							<div class="space-4"></div>
                            <div class="form-group">
								<label class="col-sm-3 col-xs-3 control-label no-padding-right" for="form-field-5"> Población vulnerable </label>
                                <div class="checkbox col-sm-9 col-xs-9" style="margin-left:-10%">
                                    <label>
                                        <input name="form-field-checkbox" type="checkbox" class="ace">
                                        <span class="lbl">Desplazado</span>
                                    </label>

                                    <label>
                                        <input name="form-field-checkbox" type="checkbox" class="ace">
                                        <span class="lbl">Menor de edad</span>
                                    </label>
                                    <label>
                                        <input name="form-field-checkbox" type="checkbox" class="ace">
                                        <span class="lbl">Anciano</span>
                                    </label>                                    
                                </div>
                                <div class="checkbox col-sm-9 col-xs-9" style="margin-left:-10%">
                                    <label>
                                        <input name="form-field-checkbox" type="checkbox" class="ace">
                                        <span class="lbl">Discapacitado</span>
                                    </label>
                                    <label>
                                        <input name="form-field-checkbox" type="checkbox" class="ace">
                                        <span class="lbl">Otros</span>
                                    </label>
                                </div>
							</div>
							<div class="space-4"></div>
                            <div class="form-group">
								<label class="col-sm-3 col-xs-3 control-label no-padding-right" for="form-field-5"> Usuario </label>
								<div class="col-sm-9 col-xs-9">
									<input id="cli_user" type="text" class="col-xs-5 col-sm-7" placeholder="*obligatorio"/> </div>
							</div>
							<div class="space-4"></div>
                            <div class="form-group">
								<label class="col-sm-3 col-xs-3 control-label no-padding-right" for="form-field-5">Contraseña </label>
								<div class="col-sm-9 col-xs-9">
									<input id="cli_pass" type="text" class="col-xs-5 col-sm-7" placeholder="*obligatorio"/> </div>
							</div>
							<div class="space-20"></div>
						</form>
                    </div>
					
					<div class="modal-footer">
						<div align="center">
							<button id="boton_registrar" type="button" class="btn btn-primary" data-dismiss="modal" onclick="close();">Registrar</button>
                            &nbsp; &nbsp; &nbsp;
                            <button type="button" class="btn btn-primary btn-danger" data-dismiss="modal">Cancelar</button>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	
    <!-- Popup :  Agregar JP-->
	<div align="center">
		<div class="modal fade" id="modal_jp" role="dialog">
			<div class="modal-dialog" style="width: 650px">
				<div class="modal-content">
					<!-- Modal content-->
					<div class="page-header">
						<!-- /.page-header -->
                        <button type="button" class="fa fa-times btn-danger" style="float: right; margin-right: 8px" data-dismiss="modal"></button>
                        <div class="space-10"></div>
						<h1>  Jefe de práctica </h1>
                    </div>
                    <div class="row">
						<form class="form-horizontal" role="form">
							<div class="form-group">
								<label class="col-sm-3 col-xs-3 control-label" for="form-field-3"> Nombres </label>
								<div class="col-sm-9 col-xs-9">
									<input id="jp_nombre" type="text" class="col-xs-9 col-sm-9" placeholder="*obligatorio" /> 
                                </div>
							</div>
                            <div class="space-4"></div>
							<div class="form-group">
								<label class="col-sm-3 col-xs-3 control-label no-padding-right" for="form-field-5"> Apellido paterno </label>
								<div class="col-sm-9 col-xs-9">
									<input id="jp_apePat" type="text" class="col-xs-9 col-sm-9" placeholder="*obligatorio"/> </div>
							</div>
                            <div class="space-4"></div>
							<div class="form-group">
								<label class="col-sm-3 col-xs-3 control-label no-padding-right" for="form-field-5"> Apellido materno </label>
								<div class="col-sm-9 col-xs-9">
									<input id="jp_apeMat" type="text" class="col-xs-9 col-sm-9" placeholder="*obligatorio"/> </div>
							</div>							
							<div class="space-4"></div>
                            <div class="form-group" id="jp_docs">
                                <label class="col-sm-3 col-xs-3 control-label no-padding-right" for="form-field-5"> Tipo de documento</label>
                                <label class="radio-inline" style="margin-left:-15%;">
                                    <input type="radio" name="docs" value="dni" checked="checked"> DNI 
                                </label> 
                                <label class="radio-inline">
                                    <input type="radio" name="docs" value="libreta"> Libreta militar 
                                </label> 
                                <label class="radio-inline">
                                    <input type="radio"  name="docs"value="pasaporte"> Pasaporte 
                                </label>
                                <label class="radio-inline">
                                    <input type="radio"  name="docs" value="otro"> Otro
                                </label>
                            </div>
							<div class="space-4"></div>
							<div class="form-group">
								<label class="col-sm-3 col-xs-3 control-label no-padding-right" for="form-field-5"> N° documento </label>
								<div class="col-sm-9 col-xs-9">
									<input id="jp_nrodoc" type="text" class="col-xs-5 col-sm-7" placeholder="*obligatorio"/> </div>
							</div>                            
                            <div class="space-4"></div>
                            <div class="form-group">
								<label class="col-sm-3 col-xs-3 control-label no-padding-right" for="form-field-5"> Fecha de nacimiento </label>
                                <div class="col-sm-3 col-xs-3">
                                    <div class="input-group">
                                        <input placeholder="*obligatorio" class="form-control date-picker" id="jp_date_picker" type="text" data-date-format="dd-mm-yyyy" />
                                        <span class="input-group-addon">
                                            <i class="fa fa-calendar bigger-110"></i>
                                        </span>
                                    </div>
                                </div>								
							</div>
                            <div class="space-4"></div>
                            <div class="form-group">
								<label class="col-sm-3 col-xs-3 control-label no-padding-right" for="form-field-5">Teléfono 1 </label>
								<div class="col-sm-9 col-xs-9">
									<input id="jp_telf1" type="text" class="col-xs-5 col-sm-7" /> </div>
							</div>
                            <div class="space-4"></div>
                            <div class="form-group">
								<label class="col-sm-3 col-xs-3 control-label no-padding-right" for="form-field-5">Teléfono 2</label>
								<div class="col-sm-9 col-xs-9">
									<input id="jp_tel2" type="text" class="col-xs-5 col-sm-7" /> </div>
							</div>
                            
                            <div class="space-4"></div>
                            <div class="form-group">
								<label class="col-sm-3 col-xs-3 control-label no-padding-right" for="form-field-5">Clínica jurídica </label>
								<div class="col-sm-9 col-xs-9">
									<select id='jp_clinica' class="col-xs-5 col-sm-7">
                                        <option disabled selected value="0" style="display:none;">*Obligatorio</option>
                                        <option value="1">Clínica 1</option>
                                        <option value="2">Clínica 2</option>
                                        <option value="3">Clínica 3</option>
                                        <option value="4">Clínica 4</option>
                                    </select>
                                </div>
							</div>
                            <div class="space-4"></div>                             
							<div class="form-group">
								<label class="col-sm-3 col-xs-3 control-label no-padding-right" for="form-field-5"> Código PUCP </label>
								<div class="col-sm-9 col-xs-9">
									<input id="jp_codpucp" type="text" class="col-xs-5 col-sm-7" placeholder="*obligatorio" /> </div>
							</div>
							<div class="space-4"></div>
							<div class="form-group">
								<label class="col-sm-3 col-xs-3 control-label no-padding-right" for="form-field-5"> Correo </label>
								<div class="col-sm-9 col-xs-9">
									<input id="jp_correo" type="text" id="form-field-5" class="col-xs-5 col-sm-7" placeholder="*obligatorio" /> </div>
							</div>							
							<div class="space-4"></div>
                            <div class="form-group">
								<label class="col-sm-3 col-xs-3 control-label no-padding-right" for="form-field-5"> Usuario </label>
								<div class="col-sm-9 col-xs-9">
									<input id="jp_user" type="text" class="col-xs-5 col-sm-7" placeholder="*obligatorio"/> </div>
							</div>
							<div class="space-4"></div>
                            <div class="form-group">
								<label class="col-sm-3 col-xs-3 control-label no-padding-right" for="form-field-5">Contraseña </label>
								<div class="col-sm-9 col-xs-9">
									<input id="jp_pass" type="text" class="col-xs-5 col-sm-7" placeholder="*obligatorio"/> </div>
							</div>
							<div class="space-20"></div>
						</form>
                    </div>
					
					<div class="modal-footer">
						<div align="center">
							<button id="boton_registrar" type="button" class="btn btn-primary" data-dismiss="modal" onclick="close();">Registrar</button>
                            &nbsp; &nbsp; &nbsp;
                            <button type="button" class="btn btn-primary btn-danger" data-dismiss="modal">Cancelar</button>
						</div>
					</div>
				</div>
			</div>
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
	<!-- inline scripts related to this page -->
	<script type="text/javascript">
    
    jQuery(function($) {
        $('.date-picker').datepicker({
            autoclose: true,
            todayHighlight: true
        }).next().on(ace.click_event, function(){
            $(this).prev().focus();
        });
        $('#cli_spinner').ace_spinner({value:0,min:0,max:100,step:1, on_sides: true, icon_up:'ace-icon fa fa-plus bigger-110', icon_down:'ace-icon fa fa-minus bigger-110', btn_up_class:'btn-success' , btn_down_class:'btn-danger'});
    });
    
	jQuery('#limantenimientos').addClass('active open');
	jQuery('#mant-alumno').addClass('active');
	var myTable_alu;
    var myTable_cli;
    var myTable_prof;
    var myTable_jp;
	var data_set = [];
	var editid;
	var action;
    var previous;
    var table_previous;
    var myselect;

	function getButtons(i, alu_id) {
		var param = "'" + i + "','" + alu_id + "'";
		var butons = '<div class="hidden-sm hidden-xs action-buttons">'+
                                                    
                                                    '<a  onClick="edit_onClick('+param+')" class="green" ">'+
                                                        '<i class="ace-icon fa fa-pencil bigger-130">'+'</i>'+
                                                    '</a>'+

                                                    '<a onClick="edit_onClick(\'borrar\')" class="red" href="#">'+
                                                        '<i class="ace-icon fa fa-trash-o bigger-130">'+'</i>'+
                                                    '</a>'+
                                                '</div>';
		return butons;
	}

	function add_onClick() { //Cuando se da click Nuevo+
		action = "ADD";
        switch(myselect){
            case '1': //Profesor
                $("#modal_profesor").modal();
                break;
            case '2': //JP
                $("#modal_jp").modal();
                break;
            case '3': //Alumno
                $("#modal_alumno").modal();
                break;
            case '4': //Cliente
                $("#modal_cliente").modal();
                break;
            default:
                break;                
        }
		
	}
        
    
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
        
    
    
	$("#boton_registrar").on('click', function(e) {
		//alert("mostareaas");
		if(action == "ADD") {
			//tipo = "Persona";
			i = data_set.length;
			var tipo = "SI";
			//validaciones
			if($('#alu_nombre').val().length < 1) return;
			//	
			$.ajax({
				type: "POST",
				url: 'service_alumno',
				beforeSend: function(xhr) {
					var token = $('meta[name="csrf_token"]').attr('content');
					if(token) {
						return xhr.setRequestHeader('X-CSRF-TOKEN', token);
					}
				},
				data: {
					alu_nombre: $('#alu_nombre').val(),
					alu_nrodoc: $("#alu_nrodoc").val(),
					alu_codpuc: $('#alu_codpucp').val(),
					alu_correo: $('#alu_correo').val()
				},
				success: function(Response) {
					data_set.push([
						//para agregar al datatable
						Response,
						$("#alu_nombre").val(),
						$("#alu_codpucp").val(),
						$("#alu_nrodoc").val(),
						$("#alu_correo").val(),
						tipo,
						getButtons(i, i)
					]);
					myTable_alu.clear().rows.add(data_set).draw();
					alert("Registrado");
				}
			});
		}
		if(action == "UPDATE") {
			data_set[editid][1] = $("#alu_nombre").val();
			data_set[editid][2] = $("#alu_codpucp").val();
			data_set[editid][3] = $("#alu_nrodoc").val();
			data_set[editid][4] = $("#alu_correo").val();
			myTable_alu.clear().rows.add(data_set).draw();
		}
	});

	function edit_onClick(id, alu_id) {
		//alert (id);
		action = "UPDATE";
		var rows = myTable_alu.rows(id).data();
		editid = parseInt(id);
		$("#alu_nombre").val(data_set[editid][1] + "");
		$("#alu_codpucp").val(data_set[editid][2] + "");
		$("#alu_nrodoc").val(data_set[editid][3] + "");
		$("#alu_correo").val(data_set[id][4] + "");
		$("#boton").modal()
	}
	$(document).ready(function() { //Alumno
		myTable_alu = $('#dynamic-table-alu').DataTable({
			bAutoWidth: false,
			"aoColumns": [
                {"sWidth": "5%"},
                {"sWidth": "20%"},
                {"sWidth": "15%"},
                {"sWidth": "15%"},
                {"sWidth": "15%"},
                {"sWidth": "10%"},
                {"sWidth": "20%", "bSortable":false},
				/*null, null, null, null, null, null, {
					"bSortable": false
				}*/
			],
			"aaSorting": [],
			select: {
				style: 'single'
			}
		});
		$.ajax({
			type: "GET",
			url: 'service_alumno',
			success: function(result) {
				var data = jQuery.parseJSON(result);
				var tipo;
				for(var i = 0; i < data.length; i++) {
					if(data[i].alu_volunt === 1) tipo = "SI";
					else tipo = "NO";
					//[{"eva_id":1,"usu_id":3,"eva_codpuc":"20012734","eva_tipeva":"d","eva_nombre":"Carlos Flores","eva_correo":"carlos@pucp.pe"}]
					data_set.push([
						data[i].alu_id,
						data[i].alu_nombre,
						data[i].alu_codpuc,
						data[i].alu_nrodoc,
						data[i].alu_correo,
						tipo,
						getButtons(i)
					])
				}
				myTable_alu.clear().rows.add(data_set).draw()
			}
		});
	});
	
    $(document).ready(function() { //profesor
		myTable_prof = $('#dynamic-table-prof').DataTable({
			bAutoWidth: false,
			"aoColumns": [                
                {"sWidth": "5%"},
                {"sWidth": "27%"},
                {"sWidth": "27%"},
                {"sWidth": "27%"},
                {"sWidth": "20%", "bSortable":false},
			],
			"aaSorting": [],
			select: {
				style: 'single'
			}
		});
		$.ajax({
			type: "GET",
			url: 'service_alumno',
			success: function(result) {
				var data = jQuery.parseJSON(result);
				var tipo;
				for(var i = 0; i < data.length; i++) {
					if(data[i].alu_volunt === 1) tipo = "SI";
					else tipo = "NO";
					//[{"eva_id":1,"usu_id":3,"eva_codpuc":"20012734","eva_tipeva":"d","eva_nombre":"Carlos Flores","eva_correo":"carlos@pucp.pe"}]
					data_set.push([
						data[i].alu_id,
						data[i].alu_nombre,
						data[i].alu_codpuc,
						data[i].alu_nrodoc,
						data[i].alu_correo,
						tipo,
						getButtons(i)
					])
				}
				myTable_prof.clear().rows.add(data_set).draw()
			}
		});
	});
    
    $(document).ready(function() { //JP
		myTable_jp = $('#dynamic-table-jp').DataTable({
			bAutoWidth: false,
			"aoColumns": [
                {"sWidth": "5%"},
                {"sWidth": "27%"},
                {"sWidth": "27%"},
                {"sWidth": "27%"},
                {"sWidth": "20%", "bSortable":false}
			],
			"aaSorting": [],
			select: {
				style: 'single'
			}
		});
		$.ajax({
			type: "GET",
			url: 'service_alumno',
			success: function(result) {
				var data = jQuery.parseJSON(result);
				var tipo;
				for(var i = 0; i < data.length; i++) {
					if(data[i].alu_volunt === 1) tipo = "SI";
					else tipo = "NO";
					//[{"eva_id":1,"usu_id":3,"eva_codpuc":"20012734","eva_tipeva":"d","eva_nombre":"Carlos Flores","eva_correo":"carlos@pucp.pe"}]
					data_set.push([
						data[i].alu_id,
						data[i].alu_nombre,
						data[i].alu_codpuc,
						data[i].alu_nrodoc,
						data[i].alu_correo,
						tipo,
						getButtons(i)
					])
				}
				myTable_jp.clear().rows.add(data_set).draw()
			}
		});
	});
    
    $(document).ready(function() { //Cliente
		myTable_cli = $('#dynamic-table-cli').DataTable({
			bAutoWidth: false,
			"aoColumns": [
                {"sWidth": "5%"},
                {"sWidth": "18%"},
                {"sWidth": "18%"},
                {"sWidth": "18%"},
                {"sWidth": "18%"},
                {"sWidth": "20%", "bSortable":false}
			],
			"aaSorting": [],
			select: {
				style: 'single'
			}
		});
		$.ajax({
			type: "GET",
			url: 'service_alumno',
			success: function(result) {
				var data = jQuery.parseJSON(result);
				var tipo;
				for(var i = 0; i < data.length; i++) {
					if(data[i].alu_volunt === 1) tipo = "SI";
					else tipo = "NO";
					//[{"eva_id":1,"usu_id":3,"eva_codpuc":"20012734","eva_tipeva":"d","eva_nombre":"Carlos Flores","eva_correo":"carlos@pucp.pe"}]
					data_set.push([
						data[i].alu_id,
						data[i].alu_nombre,
						data[i].alu_codpuc,
						data[i].alu_nrodoc,
						data[i].alu_correo,
						tipo,
						getButtons(i)
					])
				}
				myTable_cli.clear().rows.add(data_set).draw()
			}
		});
	});
    
    </script>
</body>

</html>