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
                          <h1 class="box-title">Montos de Gastos Operativos <button class="btn btn-success" id="btnagregar" onclick="mostrarform(true)"><i class="fa fa-plus-circle"></i> Agregar</button></h1>
                        <div class="box-tools pull-right">
                        </div>
                    </div>
                    <!-- /.box-header -->
                    <!-- centro -->
                    <div class="panel-body table-responsive" id="listadoregistros">
                        <table id="tbllistado" class="table table-striped table-bordered table-condensed table-hover" style="width:100%">
                          <thead>
                            
                            <th>Opciones</th>
                            <th>Categoria</th>
                            <th>Monto Con Pernocta</th>
                            <th>Monto Sin Pernocta</th>
                            <th>Estado</th>
                          </thead>
                          <tbody>                            
                          </tbody>
                          <!--
                          <tfoot>
                            <th>Opciones</th>
                            <th>Categoria</th>
                            <th>Monto Con Pernocta</th>
                            <th>Monto Sin Pernocta</th>
                            <th>Estado</th>
                          </tfoot>
                          -->
                        </table>
                    </div>
                    <div class="panel-body" style="height: 400px;" id="formularioregistros">
                        <form name="formulario" id="formulario" method="POST">
                          <div class="form-group col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <label>Categoria:</label>
                            <input type="hidden" name="idcuotas" id="idcuotas">
                            <div class="input-group">
                              <span class="input-group-addon"><i class="fa fa-shirtsinbulk"></i></span>
                              <input type="text" class="form-control" name="tipo_persona" id="tipo_persona" maxlength="45" placeholder="Categoria" required>
                            </div>
                          </div>
                          <div class="form-group col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <label>Monto Con Pernocta:</label>
                            <div class="input-group">
                              <span class="input-group-addon"><i class="fa fa-moon-o"></i></span>
                              <input type="text" class="form-control" name="pernocta" id="pernocta" maxlength="9" placeholder="$00.00" required>
                            </div>    
                          </div>
                          <div class="form-group col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <label>Monto Sin Pernocta:</label>
                            <div class="input-group">
                              <span class="input-group-addon"><i class="fa fa-sun-o"></i></span>
                              <input type="text" class="form-control" name="sinpernocta" id="sinpernocta" maxlength="9" placeholder="$00.00"required>
                            </div> 
                          </div>
                          <div class="form-group col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <button class="btn btn-primary" type="submit" id="btnGuardar"><i class="fa fa-save"></i> Guardar</button>

                            <button class="btn btn-danger" onclick="cancelarform()" type="button"><i class="fa fa-arrow-circle-left"></i> Cancelar</button>
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
<script type="text/javascript" src="scripts/cuotas.js"></script>