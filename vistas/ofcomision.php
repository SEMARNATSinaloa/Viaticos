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
              <div class="col-lg-9 col-md-9 col-sm-12 col-xs-12">
                  <div class="box">
                    <div class="box-header with-border">
                          <h1 class="box-title">Oficio de comisión</h1>
                        <div class="box-tools pull-right">
                        </div>
                    </div>
                    <!-- /.box-header -->
                    <!-- centro -->
                    <div class="panel-body" id="formularioregistros">
                        <form name="formulario" id="formulario" method="POST">
                        <div class="row">
                            <div class="col-lg-12 col-smd-12 col-sm-12 col-xs-12">
                                <label for="departamento">Departamento: </label>
                                <div class="input-group">
                                    <span class="input-group-addon"><i class="fa fa-institution"></i></span>
                                    <input type="text" name="departamento" class="form-control" id="departamento" maxlength="45" placeholder="Departamento" required>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                                <label for="noficio">Número de oficio: </label>
                                <div class="input-group">
                                    <span class="input-group-addon"><i class="fa fa-book"></i></span>
                                    <input type="text" name="noficio" class="form-control" id="noficio" maxlength="10" placeholder="Número de oficio" required>
                                </div> 
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                                <label for="nombre">Nombre del comisionado: </label>
                                <div class="input-group">
                                    <span class="input-group-addon"><i class="fa fa-child"></i></span>
                                    <input type="text" name="nombre" class="form-control" id="nombre" maxlength="45" placeholder="Nombre del comisionado" required>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                                <label for="puesto">Puesto: </label>
                                <div class="input-group">
                                    <span class="input-group-addon"><i class="fa fa-sitemap"></i></span>
                                    <input type="text" name="puesto" class="form-control" id="puesto" maxlength="45" placeholder="Puesto" required>
                                </div>
                            </div> 
                            <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                                <label for="destino">Destino de la comisión:</label>
                                <div class="input-group">
                                    <span class="input-group-addon"><i class="fa fa-globe"></i></span>
                                    <input type="text" name="destino" class="form-control" id="destino" maxlength="6" placeholder="Destino de la comisión" required>
                                </div>
                            </div> 
                            <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                                <label for="duracion">Dias de duración: </label>
                                <div class="input-group">
                                    <span class="input-group-addon"><i class="fa fa-clock-o"></i></span>
                                    <input type="number" name="duracion" class="form-control" id="duracion" maxlength="6" min="1" placeholder="Dias que dura la comisión" required>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                                <label for="pais">Fechas de inicio: </label>
                                <div class="input-group date">
                                    <div class="input-group-addon">
                                        <i class="fa fa-calendar"></i>
                                    </div>
                                    <input type="text" class="form-control pull-right" id="fechainicio" value='<?php echo date('d/m/Y')?>' required>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                                <label for="pais">Fechas de fin: </label>
                                <div class="input-group date">
                                    <div class="input-group-addon">
                                        <i class="fa fa-calendar"></i>
                                    </div>
                                    <input type="text" class="form-control pull-right" id="fechafin" value='<?php echo date('d/m/Y')?>' required>
                                </div>
                            </div>
                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                <label for="municipio">Objetivo de la comisión: </label>
                                <div class="input-group">
                                    <span class="input-group-addon"><i class="fa fa-bullseye"></i></span>
                                    <textarea class="form-control" rows="3" name="objetivo" id="objetivo" placeholder="Objetivo de la comisión" required></textarea>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-6 col-smd-6 col-sm-12 col-xs-12">
                                <label for="jefeinmediato">Jefe inmediato: </label>
                                <div class="input-group">
                                    <span class="input-group-addon"><i class="fa fa-user"></i></span>
                                    <input type="text" name="jefeinmediato" class="form-control" id="jefeinmediato" maxlength="45" placeholder="Jefe inmediato" required>
                                </div>
                                <label for="puestojefe">Puesto del jefe: </label>
                                <div class="input-group">
                                    <span class="input-group-addon"><i class="fa fa-deviantart"></i></span>
                                    <input type="text" name="puestojefe" class="form-control" id="puestojefe" maxlength="10" placeholder="Puesto del jefe inmediato" required>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="form-group col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                <br>
                                <button class="btn btn-primary" type="submit" id="btnGuardar"><i class="fa fa-save"></i> Guardar</button>

                                <button class="btn btn-danger" onclick="cancelarform()" type="button"><i class="fa fa-arrow-circle-left"></i> Cancelar</button>
                            </div>
                        </div>
                        </form>
                    </div>
                    <!--Fin centro -->
                  </div><!-- /.box -->
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