<?php include("vistas/cabecera.php"); ?>


 <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <!---Encabezado del dashboard -->
            <h1>Servicios</h1>
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
                      <label for="validationTooltip02">Servicio</label>
                      <select id="inputState" class="form-control">
                        <option selected>Consulta médica general</option>
                        <option>Tratamiento de hemodiálisis</option>
                      </select>
                    </div>
                    <div class="col-md-4 mb-3">
                      <label for="validationTooltip02">Costo</label>
                      <input type="number" class="form-control" id="validationTooltip02" placeholder="Ingrese el costo S/..." required>
                    </div>
                    <div class="form-group col-md-3">
                      <label for="inputState">Estado</label>
                      <select id="inputState" class="form-control">
                        <option selected>Activado</option>
                        <option>...</option>
                        <option>...</option>
                      </select>
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

