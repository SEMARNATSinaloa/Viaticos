<?php
  require 'header.php';

?>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <!--
        <h1>
            Page Header
            <small>Optional description</small>
        </h1>
        -->
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
              <div class="col-lg-9 col-md-9 col-sm-12 col-xs-12">

                        <div class="nav-tabs-custom">
            <ul class="nav nav-tabs">
              <li class="active"><a href="#fuji" data-toggle="tab">Justificación de incidencias</a></li>
            </ul>
            <div class="tab-content">
                <!-- Formulario para oficio de comision -->
                <div class="tab-pane active" id="fuji">
                    <!-- centro -->
                    <div class="panel-body" id="formularioFUJI">
                        <form name="formfuji" id="formfuji" action="reportes/fuji.php" method="POST" target="_blank">
                            <div class="row">
                                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                                    <label for="fecha">Fecha: </label>
                                    <div class="input-group date">
                                        <div class="input-group-addon">
                                            <i class="fa fa-calendar"></i>
                                        </div>
                                        <input type="text" class="form-control pull-right" name="fecha" id="fecha" value='<?php echo date('d/m/Y')?>' required>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                                    <label for="nombre">Nombre: </label>
                                    <div class="input-group">
                                        <span class="input-group-addon"><i class="fa fa-child"></i></span>
                                        <input type="text" name="nombre" class="form-control" id="nombre" maxlength="60" placeholder="Nombre del comisionado" required>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                                    <label for="nempleado">Número de empleado: </label>
                                    <div class="input-group">
                                        <span class="input-group-addon"><i class="fa fa-sitemap"></i></span>
                                        <input type="text" name="nempleado" class="form-control" id="nempleado" maxlength="6" placeholder="Numero de empleado" required>
                                    </div>
                                </div> 
                                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                                    <label for="adscripcion">Área de adscripción:</label>
                                    <div class="input-group">
                                        <span class="input-group-addon"><i class="fa fa-globe"></i></span>
                                        <input type="text" name="adscripcion" class="form-control" id="adscripcion" maxlength="60" placeholder="Area de adscripción"  required>
                                    </div>
                                </div> 
                                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                                    <label for="ext">Extensión:</label>
                                    <div class="input-group">
                                        <span class="input-group-addon"><i class="fa fa-phone"></i></span>
                                        <input type="text" name="ext" class="form-control" id="ext" maxlength="6" placeholder="Extensión"  required>
                                    </div>
                                </div> 
                                
                            </div>
                            <div class="row">
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
                                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                                    <label for="jefe">Jefe Inmediato:</label>
                                    <div class="input-group">
                                        <span class="input-group-addon"><i class="fa fa-black-tie"></i></span>
                                        <input type="text" name="jefe" class="form-control" id="jefe" maxlength="60" placeholder="Jefe Inmediato"  required>
                                    </div>
                                </div> 
                            </div>
                            <div class="row">
                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                    <h3>Datos de la justificación<span class="label label-default"></span></h3>
                                </div> 
                            </div>

                            <div class="row">
                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                    <label>Justificación 1:</label>
                                    <div class="input-group">
                                        <span class="input-group-addon"><i class="fa fa-file"></i></span>
                                        <!-- select -->
                                        <div class="form-group">
                                            <select class="form-control" name="just1">
                                                <option value="01-RETARDO 1/S1">01-RETARDO 1/S1</option>
                                                <option value="02-RETARDO 2/S2">02-RETARDO 2/S2</option>
                                                <option value="03-RETARDO 3/S3">03-RETARDO 3/S3</option>
                                                <option value="04-COMISIÓN SINDICAL">04-COMISIÓN SINDICAL</option>
                                                <option value="05-COMISIÓN INTERNA">05-COMISIÓN INTERNA</option>
                                                <option value="06-COMISIÓN EXTERNA">06-COMISIÓN EXTERNA</option>
                                                <option value="07-CUIDADOS MATERNOS">07-CUIDADOS MATERNOS</option>
                                                <option value="08-DIA ECONOMICO">08-DIA ECONOMICO</option>
                                                <option value="09-LICENCIA MEDICA">09-LICENCIA MEDICA</option>
                                                <option value="10-ONOMASTICO">10-ONOMASTICO</option>
                                                <option value="11-FALTA RETARDO">11-FALTA RETARDO</option>
                                                <option value="12-SALIDA ANTICIPADA">12-SALIDA ANTICIPADA</option>
                                                <option value="13-MATRIMONIO">13-MATRIMONIO</option>
                                                <option value="14-DEFUNCION FAMILIAR DIRECTO">14-DEFUNCION FAMILIAR DIRECTO</option>
                                                <option value="15-VACACIONES EXTRAORDINARIAS TRIMESTRAL">15-VACACIONES EXTRAORDINARIAS TRIMESTRAL</option>
                                                <option value="16-VACACIONES EXTRAORDINARIAS ANTIGÜEDAD">16-VACACIONES EXTRAORDINARIAS ANTIGÜEDAD</option>
                                                <option value="17-VACACIONES EXTRAORDINARIAS ESTIMULOS Y RECOMPENSAS">17-VACACIONES EXTRAORDINARIAS ESTIMULOS Y RECOMPENSAS</option>
                                                <option value="18-FACILIDADES ADMVAS">18-FACILIDADES ADMVAS</option>
                                                <option value="19-NACIMIENTO HIJO/A">19-NACIMIENTO HIJO/A</option>
                                                <option value="20-OLVIDO DE CREDENCIAL">20-OLVIDO DE CREDENCIAL</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                                    <label for="just1fin">Del: </label>
                                    <div class="input-group date">
                                        <div class="input-group-addon">
                                            <i class="fa fa-calendar"></i>
                                        </div>
                                        <input type="text" class="form-control pull-right" name="just1fin" id="just1fin" required>
                                    </div>
                                </div>
                                <div>
                                    <label for="just1ffin">al: </label>
                                    <div class="input-group date">
                                        <div class="input-group-addon">
                                            <i class="fa fa-calendar"></i>
                                        </div>
                                        <input type="text" class="form-control pull-right" name="just1ffin" id="just1ffin" required>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                    <label>Justificación 2:</label>
                                    <div class="input-group">
                                        <span class="input-group-addon"><i class="fa fa-file"></i></span>
                                        <!-- select -->
                                        <div class="form-group">
                                            <select class="form-control" name="just2">
                                                <option value="-"></option>
                                                <option value="01-RETARDO 1/S1">01-RETARDO 1/S1</option>
                                                <option value="02-RETARDO 2/S2">02-RETARDO 2/S2</option>
                                                <option value="03-RETARDO 3/S3">03-RETARDO 3/S3</option>
                                                <option value="04-COMISIÓN SINDICAL">04-COMISIÓN SINDICAL</option>
                                                <option value="05-COMISIÓN INTERNA">05-COMISIÓN INTERNA</option>
                                                <option value="06-COMISIÓN EXTERNA">06-COMISIÓN EXTERNA</option>
                                                <option value="07-CUIDADOS MATERNOS">07-CUIDADOS MATERNOS</option>
                                                <option value="08-DIA ECONOMICO">08-DIA ECONOMICO</option>
                                                <option value="09-LICENCIA MEDICA">09-LICENCIA MEDICA</option>
                                                <option value="10-ONOMASTICO">10-ONOMASTICO</option>
                                                <option value="11-FALTA RETARDO">11-FALTA RETARDO</option>
                                                <option value="12-SALIDA ANTICIPADA">12-SALIDA ANTICIPADA</option>
                                                <option value="13-MATRIMONIO">13-MATRIMONIO</option>
                                                <option value="14-DEFUNCION FAMILIAR DIRECTO">14-DEFUNCION FAMILIAR DIRECTO</option>
                                                <option value="15-VACACIONES EXTRAORDINARIAS TRIMESTRAL">15-VACACIONES EXTRAORDINARIAS TRIMESTRAL</option>
                                                <option value="16-VACACIONES EXTRAORDINARIAS ANTIGÜEDAD">16-VACACIONES EXTRAORDINARIAS ANTIGÜEDAD</option>
                                                <option value="17-VACACIONES EXTRAORDINARIAS ESTIMULOS Y RECOMPENSAS">17-VACACIONES EXTRAORDINARIAS ESTIMULOS Y RECOMPENSAS</option>
                                                <option value="18-FACILIDADES ADMVAS">18-FACILIDADES ADMVAS</option>
                                                <option value="19-NACIMIENTO HIJO/A">19-NACIMIENTO HIJO/A</option>
                                                <option value="20-OLVIDO DE CREDENCIAL">20-OLVIDO DE CREDENCIAL</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                                    <label for="just2fin">Del: </label>
                                    <div class="input-group date">
                                        <div class="input-group-addon">
                                            <i class="fa fa-calendar"></i>
                                        </div>
                                        <input type="text" class="form-control pull-right" name="just2fin" id="just2fin">
                                    </div>
                                </div>
                                <div>
                                    <label for="just2ffin">al: </label>
                                    <div class="input-group date">
                                        <div class="input-group-addon">
                                            <i class="fa fa-calendar"></i>
                                        </div>
                                        <input type="text" class="form-control pull-right" name="just2ffin" id="just2ffin">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                    <label>Justificación 3:</label>
                                    <div class="input-group">
                                        <span class="input-group-addon"><i class="fa fa-file"></i></span>
                                        <!-- select -->
                                        <div class="form-group">
                                            <select class="form-control" name="just3">
                                                <option value="-"></option>
                                                <option value="01-RETARDO 1/S1">01-RETARDO 1/S1</option>
                                                <option value="02-RETARDO 2/S2">02-RETARDO 2/S2</option>
                                                <option value="03-RETARDO 3/S3">03-RETARDO 3/S3</option>
                                                <option value="04-COMISIÓN SINDICAL">04-COMISIÓN SINDICAL</option>
                                                <option value="05-COMISIÓN INTERNA">05-COMISIÓN INTERNA</option>
                                                <option value="06-COMISIÓN EXTERNA">06-COMISIÓN EXTERNA</option>
                                                <option value="07-CUIDADOS MATERNOS">07-CUIDADOS MATERNOS</option>
                                                <option value="08-DIA ECONOMICO">08-DIA ECONOMICO</option>
                                                <option value="09-LICENCIA MEDICA">09-LICENCIA MEDICA</option>
                                                <option value="10-ONOMASTICO">10-ONOMASTICO</option>
                                                <option value="11-FALTA RETARDO">11-FALTA RETARDO</option>
                                                <option value="12-SALIDA ANTICIPADA">12-SALIDA ANTICIPADA</option>
                                                <option value="13-MATRIMONIO">13-MATRIMONIO</option>
                                                <option value="14-DEFUNCION FAMILIAR DIRECTO">14-DEFUNCION FAMILIAR DIRECTO</option>
                                                <option value="15-VACACIONES EXTRAORDINARIAS TRIMESTRAL">15-VACACIONES EXTRAORDINARIAS TRIMESTRAL</option>
                                                <option value="16-VACACIONES EXTRAORDINARIAS ANTIGÜEDAD">16-VACACIONES EXTRAORDINARIAS ANTIGÜEDAD</option>
                                                <option value="17-VACACIONES EXTRAORDINARIAS ESTIMULOS Y RECOMPENSAS">17-VACACIONES EXTRAORDINARIAS ESTIMULOS Y RECOMPENSAS</option>
                                                <option value="18-FACILIDADES ADMVAS">18-FACILIDADES ADMVAS</option>
                                                <option value="19-NACIMIENTO HIJO/A">19-NACIMIENTO HIJO/A</option>
                                                <option value="20-OLVIDO DE CREDENCIAL">20-OLVIDO DE CREDENCIAL</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                                    <label for="just3fin">Del: </label>
                                    <div class="input-group date">
                                        <div class="input-group-addon">
                                            <i class="fa fa-calendar"></i>
                                        </div>
                                        <input type="text" class="form-control pull-right" name="just3fin" id="just3fin">
                                    </div>
                                </div>
                                <div>
                                    <label for="just3ffin">al: </label>
                                    <div class="input-group date">
                                        <div class="input-group-addon">
                                            <i class="fa fa-calendar"></i>
                                        </div>
                                        <input type="text" class="form-control pull-right" name="just3ffin" id="just3ffin">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                    <label>Justificación 4:</label>
                                    <div class="input-group">
                                        <span class="input-group-addon"><i class="fa fa-file"></i></span>
                                        <!-- select -->
                                        <div class="form-group">
                                            <select class="form-control" name="just4">
                                                <option value="-"></option>
                                                <option value="01-RETARDO 1/S1">01-RETARDO 1/S1</option>
                                                <option value="02-RETARDO 2/S2">02-RETARDO 2/S2</option>
                                                <option value="03-RETARDO 3/S3">03-RETARDO 3/S3</option>
                                                <option value="04-COMISIÓN SINDICAL">04-COMISIÓN SINDICAL</option>
                                                <option value="05-COMISIÓN INTERNA">05-COMISIÓN INTERNA</option>
                                                <option value="06-COMISIÓN EXTERNA">06-COMISIÓN EXTERNA</option>
                                                <option value="07-CUIDADOS MATERNOS">07-CUIDADOS MATERNOS</option>
                                                <option value="08-DIA ECONOMICO">08-DIA ECONOMICO</option>
                                                <option value="09-LICENCIA MEDICA">09-LICENCIA MEDICA</option>
                                                <option value="10-ONOMASTICO">10-ONOMASTICO</option>
                                                <option value="11-FALTA RETARDO">11-FALTA RETARDO</option>
                                                <option value="12-SALIDA ANTICIPADA">12-SALIDA ANTICIPADA</option>
                                                <option value="13-MATRIMONIO">13-MATRIMONIO</option>
                                                <option value="14-DEFUNCION FAMILIAR DIRECTO">14-DEFUNCION FAMILIAR DIRECTO</option>
                                                <option value="15-VACACIONES EXTRAORDINARIAS TRIMESTRAL">15-VACACIONES EXTRAORDINARIAS TRIMESTRAL</option>
                                                <option value="16-VACACIONES EXTRAORDINARIAS ANTIGÜEDAD">16-VACACIONES EXTRAORDINARIAS ANTIGÜEDAD</option>
                                                <option value="17-VACACIONES EXTRAORDINARIAS ESTIMULOS Y RECOMPENSAS">17-VACACIONES EXTRAORDINARIAS ESTIMULOS Y RECOMPENSAS</option>
                                                <option value="18-FACILIDADES ADMVAS">18-FACILIDADES ADMVAS</option>
                                                <option value="19-NACIMIENTO HIJO/A">19-NACIMIENTO HIJO/A</option>
                                                <option value="20-OLVIDO DE CREDENCIAL">20-OLVIDO DE CREDENCIAL</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                                    <label for="just4fin">Del: </label>
                                    <div class="input-group date">
                                        <div class="input-group-addon">
                                            <i class="fa fa-calendar"></i>
                                        </div>
                                        <input type="text" class="form-control pull-right" name="just4fin" id="just4fin">
                                    </div>
                                </div>
                                <div>
                                    <label for="just4ffin">al: </label>
                                    <div class="input-group date">
                                        <div class="input-group-addon">
                                            <i class="fa fa-calendar"></i>
                                        </div>
                                        <input type="text" class="form-control pull-right" name="just4ffin" id="just4ffin">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="form-group col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                    <label for="motivo">Motivo de la justificación: </label>
                                    <div class="input-group">
                                        <span class="input-group-addon"><i class="fa fa-bullseye"></i></span>
                                        <textarea class="form-control" rows="3" name="motivo" id="motivo" maxlength="240" placeholder="Motivo de la justificación" required></textarea>
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
                <!-- /#orden de ministracion -->
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


<script type="text/javascript" src="scripts/fuji.js"></script>