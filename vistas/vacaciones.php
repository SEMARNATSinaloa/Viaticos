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
              <li class="active"><a href="#vacaciones" data-toggle="tab">Vacaciones</a></li>
            </ul>
            <div class="tab-content">
                <!-- Formulario para vacaciones -->
                <div class="tab-pane active" id="vacaciones">
                    <!-- centro -->
                    <div class="panel-body" id="formulariovacaciones">
                        <form name="formvacaciones" id="formvacaciones" action="reportes/vacaciones.php" method="POST" target="_blank">
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
                                <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                                    <label>Periodo:</label>
                                    <div class="input-group">
                                        <span class="input-group-addon"><i class="fa fa-inbox"></i></span>
                                        <!-- select -->
                                        <div class="form-group">
                                            <select class="form-control" name="periodo">
                                                <option>Primero</option>
                                                <option>Segundo</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                                    <label for="añop">Año del Periodo: </label>
                                    <div class="input-group date">
                                        <div class="input-group-addon">
                                            <i class="fa fa-calendar"></i>
                                        </div>
                                        <input type="text" class="form-control pull-right" name="añop" id="añop" value='<?php echo date('Y')?>' required>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                                    <label for="rfc">R.F.C.:</label>
                                    <div class="input-group">
                                        <span class="input-group-addon"><i class="fa fa-expeditedssl"></i></span>
                                        <input type="text" name="rfc" class="form-control" id="rfc" maxlength="10" placeholder="R.F.C." required>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                                    <label for="id">ID del Empleado:</label>
                                    <div class="input-group">
                                        <span class="input-group-addon"><i class="fa fa-code"></i></span>
                                        <input type="text" name="id" class="form-control" id="id" maxlength="10" placeholder="ID del empleado" required>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                                    <label for="apaterno">Apellido Paterno: </label>
                                    <div class="input-group">
                                        <span class="input-group-addon"><i class="fa fa-child"></i></span>
                                        <input type="text" name="apaterno" class="form-control" id="apaterno" maxlength="35" placeholder="Apellido paterno" required>
                                    </div>
                                </div> 
                                <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                                    <label for="amaterno">Apellido Materno: </label>
                                    <div class="input-group">
                                        <span class="input-group-addon"><i class="fa fa-child"></i></span>
                                        <input type="text" name="amaterno" class="form-control" id="amaterno" maxlength="35" placeholder="Apellido materno" required>
                                    </div>
                                </div> 
                                <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                                    <label for="nombre">Nombre(s): </label>
                                    <div class="input-group">
                                        <span class="input-group-addon"><i class="fa fa-child"></i></span>
                                        <input type="text" name="nombre" class="form-control" id="nombre" maxlength="35" placeholder="Nombre" required>
                                    </div>
                                </div> 
                                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                                    <label for="adscripcion">Área de adscripción:</label>
                                    <div class="input-group">
                                        <span class="input-group-addon"><i class="fa fa-globe"></i></span>
                                        <input type="text" name="adscripcion" class="form-control" id="adscripcion" maxlength="50" placeholder="Area de adscripción"  required>
                                    </div>
                                </div> 
                                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                                    <label for="puesto">Puesto:</label>
                                    <div class="input-group">
                                        <span class="input-group-addon"><i class="fa fa-globe"></i></span>
                                        <input type="text" name="puesto" class="form-control" id="puesto" maxlength="50" placeholder="Puesto"  required>
                                    </div>
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
                                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                                    <label for="puestojefe">Puesto del Jefe Inmediato:</label>
                                    <div class="input-group">
                                        <span class="input-group-addon"><i class="fa fa-black-tie"></i></span>
                                        <input type="text" name="puestojefe" class="form-control" id="puestojefe" maxlength="60" placeholder="Puesto Jefe Inmediato"  required>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                                    <label for="fechai">Fecha Inicial del Periodo: </label>
                                    <div class="input-group date">
                                        <div class="input-group-addon">
                                            <i class="fa fa-calendar"></i>
                                        </div>
                                        <input type="text" class="form-control pull-right" name="fechai" id="fechai" required>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                                    <label for="fechaf">Fecha Final del Periodo: </label>
                                    <div class="input-group date">
                                        <div class="input-group-addon">
                                            <i class="fa fa-calendar"></i>
                                        </div>
                                        <input type="text" class="form-control pull-right" name="fechaf" id="fechaf" required>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                                    <label for="diasaut">Días Hábiles Autorizados:</label>
                                    <div class="input-group">
                                        <span class="input-group-addon"><i class="fa fa-suitcase"></i></span>
                                        <input type="text" name="diasaut" class="form-control" id="diasaut" maxlength="10" placeholder="Días autorizados"  required>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                                    <label for="diaspen">Días Habiles Pendientes:</label>
                                    <div class="input-group">
                                        <span class="input-group-addon"><i class="fa fa-ticket"></i></span>
                                        <input type="text" name="diaspen" class="form-control" id="diaspen" maxlength="10" placeholder="Días pendientes"  required>
                                    </div>
                                </div>  
                            </div>
                            <div class="row">
                                <div class="form-group col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                    <label for="observaciones">Observaciones: </label>
                                    <div class="input-group">
                                        <span class="input-group-addon"><i class="fa fa-bullseye"></i></span>
                                        <textarea class="form-control" rows="3" name="observaciones" id="observaciones" maxlength="240" placeholder="Observaciones" required></textarea>
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


<script type="text/javascript" src="scripts/vacaciones.js"></script>