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
              <li class="active"><a href="#psalidavehicular" data-toggle="tab">Pase de salida vehicular</a></li>
            </ul>
            <div class="tab-content">
                <!-- Formulario para pase de salida -->
                <div class="tab-pane active" id="psalidavehicular">
                    <!-- centro -->
                    <div class="panel-body" id="formulariopsalidavehicular">
                        <form name="formpsalidavehicular" id="formpsalidavehicular" action="reportes/pasevehicular.php" method="POST" target="_blank">
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
                                    <label>Lugar de solicitud:</label>
                                    <div class="input-group">
                                        <span class="input-group-addon"><i class="fa fa-street-view"></i></span>
                                        <!-- select -->
                                        <div class="form-group">
                                            <select class="form-control" name="lugar" required>
                                                <option>CULIACAN</option>
                                                <option>MAZATLAN</option>
                                                <option>LOS MOCHIS</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                                    <label for="nombre">Nombre: </label>
                                    <div class="input-group">
                                        <span class="input-group-addon"><i class="fa fa-child"></i></span>
                                        <input type="text" name="nombre" class="form-control" id="nombre" maxlength="35" placeholder="Nombre del comisionado" required>
                                    </div>
                                </div> 
                            </div>
                            <div class="row">
                                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                                    <label>Vehículo solicitado o asignado:</label>
                                    <div class="input-group">
                                        <span class="input-group-addon"><i class="fa fa-car"></i></span>
                                        <!-- select -->
                                        <div class="form-group">
                                            <select class="form-control" name="vehiculo">
                                                <option>SMA 034  -  PICK UP RANGER</option>
                                                <option>SMA 036  -  PICK UP RANGER</option>
                                                <option>SMA 037  -  PICK UP RANGER</option>
                                                <option>SMA 044  -  PICK UP RANGER</option>
                                                <option>SMA 045  -  PICK UP RANGER</option>
                                                <option>SMA 048  -  CHEVY</option>
                                                <option>SMA 050  -  PICK UP RANGER</option>
                                                <option>SMA 051  -  PICK UP RANGER</option>
                                                <option>SMA 052  -  PICK UP RANGER</option>
                                                <option>SMA 053  -  CHEVY</option>
                                                <option>SMA 055  -  CHEVY</option>
                                                <option>SMA 056  -  CHEVY</option>
                                                <option>SMA 057  -  DODGE NITRO</option>
                                                <option>SMA 058  -  JEEP</option>
                                                <option>SMA 060  -  JEEP</option>
                                                <option>SMA 059  -  JEEP</option>
                                                <option>SMA 061  -  JEEP</option>
                                                <option>SMA 063  -  DURANGO</option>
                                                <option>SMA 064  -  DODGE RAM</option>
                                                <option>SMA 000  -  CUATRIMOTO</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                                    <label for="jefe">Autorizador: </label>
                                    <div class="input-group">
                                        <span class="input-group-addon"><i class="fa fa-black-tie"></i></span>
                                        <input type="text" name="jefe" class="form-control" id="jefe" maxlength="35" placeholder="Nombre de quien autoriza" value="Lic. Eduardo Urizabel Luque">
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


<script type="text/javascript" src="scripts/pasevehicular.js"></script>