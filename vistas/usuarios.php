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
                          <h1 class="box-title">Usuarios del Sistema <button class="btn btn-success" id="btnagregar" onclick="mostrarform(true)"><i class="fa fa-plus-circle"></i> Agregar</button></h1>
                        <div class="box-tools pull-right">
                        </div>
                    </div>
                    <!-- /.box-header -->
                    <!-- centro -->
                    <div class="panel-body table-responsive" id="listadoregistros">
                        <table id="tbllistado" class="table table-striped table-bordered table-condensed table-hover" style="width:100%">
                          <thead>
                            
                            <th style="width:70px">Opciones</th>
                            <th>Usuario</th>
                            <th>Contraseña</th>
                            <th>Nombre</th>
                            <th>Apellido Paterno</th>
                            <th>Apellido Materno</th>
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
                    <div class="panel-body" id="formularioregistros">
                        <form name="formulario" id="formulario" method="POST">
                          <div class="form-group col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <label>Nombre de Usuario:</label>
                            <div class="input-group">
                              <span class="input-group-addon"><i class="fa fa-user"></i></span>
                              <input type="text" class="form-control" name="correo" id="correo" maxlength="45" placeholder="alguien@semarnat.gob.mx" required>
                            </div>
                          </div>
                          <div class="form-group col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <label>Contraseña:</label>
                            <div class="input-group">
                              <span class="input-group-addon"><i class="fa fa-key"></i></span>
                              <input type="password" class="form-control" name="pwd" id="pwd" maxlength="20" placeholder="Contraseña" required>
                            </div>    
                          </div>
                          <div class="form-group col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <label>Nombre:</label>
                            <div class="input-group">
                              <span class="input-group-addon"><i class="fa fa-slideshare"></i></span>
                              <input type="text" class="form-control" name="nombre" id="nombre" maxlength="30" placeholder="Nombre" required>
                            </div> 
                          </div>
                          <div class="form-group col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <label>Apellido Paterno:</label>
                            <div class="input-group">
                              <span class="input-group-addon"><i class="fa fa-slack"></i></span>
                              <input type="text" class="form-control" name="apellidop" id="apellidop" maxlength="20" placeholder="Apellido Paterno">
                            </div> 
                          </div>
                          <div class="form-group col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <label>Apellido Materno:</label>
                            <div class="input-group">
                              <span class="input-group-addon"><i class="fa fa-pied-piper"></i></span>
                              <input type="text" class="form-control" name="apellidom" id="apellidom" maxlength="20" placeholder="Apellido Materno">
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
<script type="text/javascript" src="scripts/usuarios.js"></script>