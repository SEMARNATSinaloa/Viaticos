<?php
  require 'header.php';

?>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Page Header
        <small>Optional description</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Level</a></li>
        <li class="active">Here</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content container-fluid">

      <!--------------------------
        | Your Page Content Here |
        -------------------------->

         <div class="row">
              <div class="col-lg-10 col-md-10 col-sm-12 col-xs-12">

                        <div class="nav-tabs-custom">
            <ul class="nav nav-tabs">
              <li class="active"><a href="#ofcomision" data-toggle="tab">Of. Comisión</a></li>
              <li><a href="#ministracion" data-toggle="tab">Ministración</a></li>
              <li><a href="#desglose" data-toggle="tab">Desglose de Gastos</a></li>
              <li><a href="#informe" data-toggle="tab">Informe</a></li>
            </ul>
            <div class="tab-content">
                <!-- Formulario para oficio de comision -->
                <div class="tab-pane active" id="ofcomision">
                    <!-- centro -->
                    <div class="panel-body" id="formularioComision">
                        <form name="formofcomision" id="formofcomision" action="reportes/ofcomision.php" method="POST" target="_blank">
                            <div class="row">
                                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                                    <label for="fechaof">Fecha: </label>
                                    <div class="input-group date">
                                        <div class="input-group-addon">
                                            <i class="fa fa-calendar"></i>
                                        </div>
                                        <input type="text" class="form-control pull-right" name="fechaof" id="fechaof" value='<?php echo date('d/m/Y')?>' required>
                                    </div>
                                </div>
                                <div class="col-lg-12 col-smd-12 col-sm-12 col-xs-12">
                                    <label for="departamento">Departamento: </label>
                                    <div class="input-group">
                                        <span class="input-group-addon"><i class="fa fa-institution"></i></span>
                                        <input type="text" name="departamento" class="form-control" id="departamento" maxlength="60" placeholder="Departamento" required>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                                    <label for="noficio">Número de oficio: </label>
                                    <div class="input-group">
                                        <span class="input-group-addon"><i class="fa fa-book"></i></span>
                                        <input type="text" name="noficio" class="form-control" id="noficio" maxlength="20" placeholder="Número de oficio">
                                    </div> 
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                                    <label for="nombre">Nombre del comisionado: </label>
                                    <div class="input-group">
                                        <span class="input-group-addon"><i class="fa fa-child"></i></span>
                                        <input type="text" name="nombre" class="form-control" id="nombre" maxlength="60" placeholder="Nombre del comisionado" required>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                                    <label for="puesto">Puesto: </label>
                                    <div class="input-group">
                                        <span class="input-group-addon"><i class="fa fa-sitemap"></i></span>
                                        <input type="text" name="puesto" class="form-control" id="puesto" maxlength="60" placeholder="Puesto" required>
                                    </div>
                                </div> 
                                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                                    <label for="destino">Destino de la comisión:</label>
                                    <div class="input-group">
                                        <span class="input-group-addon"><i class="fa fa-globe"></i></span>
                                        <input type="text" name="destino" class="form-control" id="destino" maxlength="60" placeholder="Destino de la comisión" required>
                                    </div>
                                </div> 
                                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                                    <label for="duracion">Dias de duración: </label>
                                    <div class="input-group">
                                        <span class="input-group-addon"><i class="fa fa-clock-o"></i></span>
                                        <input type="number" name="duracion" class="form-control" id="duracion" maxlength="6" placeholder="Dias que dura la comisión" required>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                                    <label for="fechainicio">Fechas de inicio: </label>
                                    <div class="input-group date">
                                        <div class="input-group-addon">
                                            <i class="fa fa-calendar"></i>
                                        </div>
                                        <input type="text" class="form-control pull-right" name="fechainicio" id="fechainicio" value='<?php echo date('d/m/Y')?>' required>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                                    <label for="fechafin">Fechas de fin: </label>
                                    <div class="input-group date">
                                        <div class="input-group-addon">
                                            <i class="fa fa-calendar"></i>
                                        </div>
                                        <input type="text" class="form-control pull-right" name="fechafin" id="fechafin" value='<?php echo date('d/m/Y')?>' required>
                                    </div>
                                </div>
                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                    <label for="objetivo">Objetivo de la comisión: </label>
                                    <div class="input-group">
                                        <span class="input-group-addon"><i class="fa fa-bullseye"></i></span>
                                        <textarea class="form-control" rows="3" name="objetivo" id="objetivo" maxlength="500" placeholder="Objetivo de la comisión" required></textarea>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-6 col-smd-6 col-sm-12 col-xs-12">
                                    <label for="jefeinmediato">Jefe inmediato: </label>
                                    <div class="input-group">
                                        <span class="input-group-addon"><i class="fa fa-user"></i></span>
                                        <input type="text" name="jefeinmediato" class="form-control" id="jefeinmediato" maxlength="60" placeholder="Jefe inmediato" required>
                                    </div>
                                    <label for="puestojefe">Puesto del jefe: </label>
                                    <div class="input-group">
                                        <span class="input-group-addon"><i class="fa fa-deviantart"></i></span>
                                        <input type="text" name="puestojefe" class="form-control" id="puestojefe" maxlength="60" placeholder="Puesto del jefe inmediato" required>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="form-group col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                    <br>
                                    <button class="btn btn-primary" type="submit" id="btnImprimir" value="imprimir"><i class="fa fa-print"></i> Imprimir</button>

                                    <button class="btn btn-danger" type="reset"><i class="fa fa-eraser"></i> Borrar</button>
                                </div>
                            </div>
                        </form>
                    </div>
                    <!--Fin centro -->
                </div><!-- /.box -->
                <!-- /#oficio de comision -->
                <!-- formulario de orden de ministracion-->
                <div class="tab-pane" id="ministracion">
                    <!-- centro -->
                    <div class="panel-body" id="formularioMinistracion">
                        <form name="formofministracion" id="formofministracion" action="reportes/ministracion.php" method="POST" target="_blank">
                            <div class="row">
                                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                                    <label for="noficio">Número del oficio de comisión: </label>
                                    <div class="input-group">
                                        <span class="input-group-addon"><i class="fa fa-book"></i></span>
                                        <input type="text" name="noficio" class="form-control" id="noficio" maxlength="20" placeholder="Número de oficio" >
                                    </div> 
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                                <label for="fechaof">Fecha del oficio: </label>
                                    <div class="input-group date">
                                        <div class="input-group-addon">
                                            <i class="fa fa-calendar"></i>
                                        </div>
                                        <input type="text" class="form-control pull-right" name="fechaof" id="fechaof" value='<?php echo date('d/m/Y')?>' required>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                                    <label for="folio">Folio: </label>
                                    <div class="input-group">
                                        <span class="input-group-addon"><i class="fa fa-paperclip"></i></span>
                                        <input type="text" name="folio" class="form-control" id="folio" maxlength="10" placeholder="Folio">
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                                    <label for="clavep">Clave Presupuestal: </label>
                                    <div class="input-group">
                                        <span class="input-group-addon"><i class="fa fa-gg"></i></span>
                                        <input type="text" name="clavep" class="form-control" id="clavep" maxlength="60" placeholder="Clave presupuestal" >
                                    </div>
                                </div> 
                            </div>
                            <div class="row">
                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                    <h3>Datos del comisionado<span class="label label-default"></span></h3>
                                </div> 
                            </div>
                            <div class="row">
                                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                                    <label for="nombre">Nombre:</label>
                                    <div class="input-group">
                                        <span class="input-group-addon"><i class="fa fa-child"></i></span>
                                        <input type="text" name="nombre" class="form-control" id="nombre" maxlength="60" placeholder="Nombre del comisionado" required>
                                    </div>
                                </div> 
                                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                                    <label for="nivel">Nivel: </label>
                                    <div class="input-group">
                                        <span class="input-group-addon"><i class="fa fa-clock-o"></i></span>
                                        <input type="text" name="nivel" class="form-control" id="nivel" maxlength="10" placeholder="Nivel" required>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-6 col-smd-6 col-sm-12 col-xs-12">
                                    <label for="puesto">Puesto: </label>
                                    <div class="input-group">
                                        <span class="input-group-addon"><i class="fa fa-user"></i></span>
                                        <input type="text" name="puesto" class="form-control" id="puesto" maxlength="60" placeholder="Puesto" required>
                                    </div>
                                </div> 
                                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                                    <label>Categoria: </label>
                                    <table id="categoria">
                                        <td>
                                            <label>
                                            <input type="radio" name="base" value="Base" class="minimal" checked>Base</label>
                                        </td>
                                        <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </td>
                                        <td>
                                            <label>
                                            <input type="radio" name="base" value="Confianza" class="minimal">Confianza</label>
                                        </td>
                                    </table>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-6 col-smd-6 col-sm-12 col-xs-12">
                                    <label for="adscripcion">Área de adscripción: </label>
                                    <div class="input-group">
                                        <span class="input-group-addon"><i class="fa fa-user"></i></span>
                                        <input type="text" name="adscripcion" class="form-control" id="adscripcion" maxlength="60" placeholder="Área de adscripción" required>
                                    </div>
                                </div> 
                            </div>
                            <div class="row">
                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                    <h3>Datos de comisión<span class="label label-default"></span></h3>
                                </div> 
                            </div>
                            <div class="row">
                                <div class="col-lg-6 col-smd-6 col-sm-12 col-xs-12">
                                    <label for="lugar">Lugar de la comisión: </label>
                                    <div class="input-group">
                                        <span class="input-group-addon"><i class="fa fa-globe"></i></span>
                                        <input type="text" name="lugar" class="form-control" id="lugar" maxlength="60" placeholder="Lugar de la comisión" required>
                                    </div>
                                </div> 
                                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                                    <label>Medio de transporte: </label>
                                    <table id="mediotransporte">
                                        <td>
                                            <label>
                                            <input type="radio" name="transporte" value="Avión" class="minimal" checked>Avión</label>
                                        </td>
                                        <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </td>
                                        <td>
                                            <label>
                                            <input type="radio" name="transporte" value="Autobús" class="minimal">Autobús</label>
                                        </td>
                                        <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </td>
                                        <td>
                                            <label>
                                            <input type="radio" name="transporte" value="Automóvil" class="minimal">Automóvil</label>
                                        </td>
                                    </table>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                                    <label for="fechacoinicio">Fechas de inicio: </label>
                                    <div class="input-group date">
                                        <div class="input-group-addon">
                                            <i class="fa fa-calendar"></i>
                                        </div>
                                        <input type="text" class="form-control pull-right" name="fechacoinicio" id="fechacoinicio" value='<?php echo date('d/m/Y')?>' required>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                                    <label for="fechacofin">Fechas de fin: </label>
                                    <div class="input-group date">
                                        <div class="input-group-addon">
                                            <i class="fa fa-calendar"></i>
                                        </div>
                                        <input type="text" class="form-control pull-right" name="fechacofin" id="fechacofin" value='<?php echo date('d/m/Y')?>' required>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                                    <label for="tarifa">Tarifa y Nivel:</label>
                                    <div class="input-group">
                                        <span class="input-group-addon"><i class="fa fa-sitemap"></i></span>
                                        <input type="text" name="tarifa" class="form-control" id="tarifa" maxlength="60" placeholder="Tarifa y nivel" required>
                                    </div>
                                </div> 
                                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                                    <label for="cuota">Cuota Diaria: </label>
                                    <div class="input-group">
                                        <span class="input-group-addon"><i class="fa fa-money"></i></span>
                                        <input type="number" name="cuota" class="form-control" step=".01" id="cuota" maxlength="10" placeholder="Cuota diaria" required>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                                    <label for="duracion">Dias de duración: </label>
                                    <div class="input-group">
                                        <span class="input-group-addon"><i class="fa fa-clock-o"></i></span>
                                        <input type="number" name="duracion" class="form-control" step=".01" id="duracion" maxlength="6" placeholder="Dias que dura la comisión" required>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                    <label for="objetivo">Objetivo de la comisión: </label>
                                    <div class="input-group">
                                        <span class="input-group-addon"><i class="fa fa-bullseye"></i></span>
                                        <textarea class="form-control" rows="3" name="objetivo" id="objetivo" maxlength="1000" placeholder="Objetivo de la comisión" required></textarea>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                                    <label for="jefei">Jefe inmediato: </label>
                                    <div class="input-group">
                                        <span class="input-group-addon"><i class="fa fa-check-square-o"></i></span>
                                        <input type="text" name="jefei" class="form-control" id="jefei" maxlength="60" placeholder="Jefe inmediato" required>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                                    <label for="puestojefei">Puesto del jefe inmediato: </label>
                                    <div class="input-group">
                                        <span class="input-group-addon"><i class="fa fa-shirtsinbulk"></i></span>
                                        <input type="text" name="puestojefei" class="form-control" id="puestojefei" maxlength="60" placeholder="Puesto del jefe inmediato" required>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                                    <label for="autorizador">Autoriosa y/o Visto bueno: </label>
                                    <div class="input-group">
                                        <span class="input-group-addon"><i class="fa fa-check-square-o"></i></span>
                                        <input type="text" name="autorizador" class="form-control" id="autorizador" maxlength="60" placeholder="Autoriza y/o Visto bueno" value="Lic. Eduardo Urizabel Luque" required>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                                    <label for="puestojefe">Puesto: </label>
                                    <div class="input-group">
                                        <span class="input-group-addon"><i class="fa fa-shirtsinbulk"></i></span>
                                        <input type="text" name="puestojefe" class="form-control" id="puestojefe" maxlength="60" placeholder="Puesto" value="Jefe de Departamento de Recursos Humanos, Materiales y Servicios" required>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="form-group col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                    <br>
                                    <button class="btn btn-primary" type="submit" id="btnImprimir" value="imprimir"><i class="fa fa-print"></i> Imprimir</button>

                                    <button class="btn btn-danger"  type="reset" id="btnborrar"><i class="fa fa-eraser"></i> Borrar</button>
                                </div>
                            </div>
                        </form>
                    </div>
                    <!--Fin centro -->
                </div>
                <!-- /#orden de ministracion -->
                <!-- formulario de desglose-->
                <div class="tab-pane" id="desglose">
                    <!-- centro -->
                    <div class="panel-body" id="formularioDesglose">
                        <form name="formdesglose" id="formdesglose" action="reportes/desglose.php" method="POST" target="_blank">
                            <div class="row">
                                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                                    <label for="unidad">Unidad: </label>
                                    <div class="input-group">
                                        <span class="input-group-addon"><i class="fa fa-book"></i></span>
                                        <input type="text" name="unidad" class="form-control" id="unidad" value="145" maxlength="60" placeholder="Unidad" required>
                                    </div> 
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                                    <label for="nombre">Nombre del comisionado: </label>
                                    <div class="input-group">
                                        <span class="input-group-addon"><i class="fa fa-paperclip"></i></span>
                                        <input type="text" name="nombre" class="form-control" id="nombre" maxlength="50" placeholder="Nombre" required>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                                    <label for="Destino">Destino de la comisión:</label>
                                    <div class="input-group">
                                        <span class="input-group-addon"><i class="fa fa-child"></i></span>
                                        <input type="text" name="destino" class="form-control" id="destino" maxlength="60" placeholder="Destino" required>
                                    </div>
                                </div> 
                            </div>
                            <div class="row">
                                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                                    <label for="fechamininicio">Periodo de la comisión: </label>
                                    <div class="input-group date">
                                        <div class="input-group-addon">
                                            <i class="fa fa-calendar"></i>
                                        </div>
                                        <input type="text" class="form-control pull-right" name="fechamininicio" id="fechamininicio" value='<?php echo date('d/m/Y')?>' required>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                                    <label for="fechaminfin">al: </label>
                                    <div class="input-group date">
                                        <div class="input-group-addon">
                                            <i class="fa fa-calendar"></i>
                                        </div>
                                        <input type="text" class="form-control pull-right" name="fechaminfin" id="fechaminfin" value='<?php echo date('d/m/Y')?>' required>
                                    </div>
                                </div>
                            </div>
                            
                            <div class="row">
                                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                                    <fieldset id="gastosFact">
                                        <legend>Gastos con factura:</legend>
                                    </fieldset>
                                    <!-- <input type="button" value="Preview form" class="add" id="preview" />  -->
                                    <br>
                                    <input class="btn btn-info" type="button" value="Agregar" id="add1" />
                                </div>

                                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                                    <fieldset id="gastosNotas">
                                        <legend>Gastos sin factura:</legend>
                                    </fieldset>
                                    <!-- <input type="button" value="Preview form" class="add" id="preview" />  -->
                                    <br>
                                    <input class="btn btn-info" type="button" value="Agregar" id="add2" />
                                </div>
                            </div>
                    
                            <div class="row">
                                <div class="form-group col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                    <br>
                                    <button class="btn btn-primary" type="submit" id="btnImprimir" value="imprimir"><i class="fa fa-print"></i> Imprimir</button>

                                    <button class="btn btn-danger"  type="reset" id="btnborrar"><i class="fa fa-eraser"></i> Borrar</button>
                                </div>
                            </div>
                        </form>
                    </div>
                    <!--Fin centro -->
                </div>
                <!-- /#orden de desglose -->
                <!-- formulario de informe-->
                <div class="tab-pane" id="informe">
                    <!-- centro -->
                    <div class="panel-body" id="formularioInforme">
                        <form name="forminforme" id="forminforme" action="reportes/informe.php" method="POST" target="_blank">
                            <div class="row">
                                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                                    <label for="numero">Número: </label>
                                    <div class="input-group">
                                        <span class="input-group-addon"><i class="fa fa-book"></i></span>
                                        <input type="text" name="numero" class="form-control" id="numero" maxlength="30" placeholder="Número">
                                    </div> 
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                                    <label for="fechaInf">Fecha de la comisión: </label>
                                    <div class="input-group date">
                                        <div class="input-group-addon">
                                            <i class="fa fa-calendar"></i>
                                        </div>
                                        <input type="text" class="form-control pull-right" name="fechaInf" id="fechaInf" value='<?php echo date('d/m/Y')?>' required>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                                    <label for="destino">Destino de la comisión:</label>
                                    <div class="input-group">
                                        <span class="input-group-addon"><i class="fa fa-globe"></i></span>
                                        <input type="text" name="destino" class="form-control" id="destino" maxlength="60" placeholder="Destino de la comisión" required>
                                    </div>
                                </div> 
                            </div>
                            <div class="row">
                                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                                    <label for="fechainicio">Fechas de inicio: </label>
                                    <div class="input-group date">
                                        <div class="input-group-addon">
                                            <i class="fa fa-calendar"></i>
                                        </div>
                                        <input type="text" class="form-control pull-right" name="fechainicio" id="fechainicio" value='<?php echo date('d/m/Y')?>' required>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                                    <label for="fechafin">Fechas de fin: </label>
                                    <div class="input-group date">
                                        <div class="input-group-addon">
                                            <i class="fa fa-calendar"></i>
                                        </div>
                                        <input type="text" class="form-control pull-right" name="fechafin" id="fechafin" value='<?php echo date('d/m/Y')?>' required>
                                    </div>
                                </div>
                            </div>
                    
                            <div class="row">
                                <div class="form-group col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                    <br>
                                    <button class="btn btn-primary" type="submit" id="btnImprimir" value="imprimir"><i class="fa fa-print"></i> Imprimir</button>

                                    <button class="btn btn-danger"  type="reset" id="btnborrar"><i class="fa fa-eraser"></i> Borrar</button>
                                </div>
                            </div>
                        </form>
                    </div>
                    <!--Fin centro -->
                </div>
                <!-- /#orden de informe -->
            </div>
            <!-- /.tab-content -->
          </div>
          <!-- /.nav-tabs-custom -->

              </div><!-- /.col -->
          </div><!-- /.row -->

    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
<?php
  require 'footer.php';
?>
<!-- date-picker -->
<script src="../public/bootstrap/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js"></script>
<script src="../public/bootstrap/bootstrap-datepicker/js/locales/bootstrap-datepicker.es.js"></script>


<script type="text/javascript" src="scripts/ofcomision.js"></script>