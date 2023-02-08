<?php include("vistas/cabecera.php"); ?>


 <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <!---Encabezado del dashboard -->
            <h1>Permiso</h1>
          </div>          
        </div>
      </div><!-- /.container-fluid -->
    </section>
    <!-- Main content -->
    <section> 
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-12">
            <div class="card card-#F1F2F2">
              <div class="card-header">
                <form class="needs-validation" novalidate>
                  <div class="form-row">                    
                    <div class="col-md-4 mb-3">
                      <label for="validationTooltip02">Razon Social</label>
                      <input type="text" class="form-control" id="validationTooltip02" placeholder="Ingrese datos" required>
                    </div>
                    <div class="col-md-5 mb-3">
                      <label for="validationTooltip02">Ruc</label>
                      <input type="text" class="form-control" id="validationTooltip02" placeholder="Ingrese datos" required>
                    </div>
                    <div class="col-md-4 mb-3">
                      <label for="validationTooltip02">Direccion</label>
                      <input type="text" class="form-control" id="validationTooltip02" placeholder="Ingrese especialista" required>
                    </div>
                    <div class="col-md-4 mb-3">
                      <label for="validationTooltip04">Responsable</label>
                      <input type="text" class="form-control" id="validationTooltip04" placeholder="Ingrese nombres y apellidos" required>
                    </div> 
                  </div>
                  <div>
                    <button class="btn btn-success mr-2" type="submit" href="home.php">Guardar</button>
                    <button class="btn btn-danger" type="reset">Cancelar</button>
                  </div> 
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>           
    </div>    
  </section>
</div>

<?php include("vistas/pie.php"); ?>

