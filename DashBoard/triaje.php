<?php include("vistas/cabecera.php"); ?>


 <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <!---Encabezado del dashboard -->
            <h1>Pasan a Triaje</h1>
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
                      <label for="validationTooltip04">Paciente</label>
                      <input type="text" class="form-control" id="validationTooltip04" placeholder="Ingrese nombres y apellidos" required>
                    </div>
                    <div class="col-md-3 mb-3">
                      <label for="validationTooltip02">Dni</label>
                      <input type="text" class="form-control" id="validationTooltip02" placeholder="Ingrese el dni" required>
                    </div>
                    <div class="col-md-3 mb-3">
                      <label for="validationTooltip02">Edad</label>
                      <input type="number" class="form-control" id="validationTooltip02" placeholder="Ingrese la edad" required>
                    </div>
                    <div class="col-md-4 mb-3">
                      <label for="validationTooltip02">Servicio</label>
                      <select id="inputState" class="form-control">
                        <option selected>Consulta médica general</option>
                        <option>Tratamiento de hemodiálisis</option>
                      </select>
                    </div>
                    <div class="col-md-4 mb-3">
                      <label for="validationTooltip02">Especialista:</label>
                      <select id="inputState" class="form-control">
                        <option selected>Suarez Molina Guillermo</option>
                        <option>Sosa Gutierres Patricia</option>
                        <option>Vallejos Fernandes Paul Rodrigo</option>
                      </select>
                    </div>
                    <div class="col-md-3 mb-3">
                      <label for="validationTooltip02">Presión Arterial(mmHg):</label>
                      <input type="text" class="form-control" id="validationTooltip02" placeholder="Presión arterial" required>
                    </div>
                    <div class="col-md-3 mb-3">
                      <label for="validationTooltip02">Temperatura(C°):</label>
                      <input type="text" class="form-control" id="validationTooltip02" placeholder="Temperatura" required>
                    </div>
                    <div class="col-md-3 mb-3">
                      <label for="validationTooltip02">Frecuencia Respiratoria(Por minuto):</label>
                      <input type="text" class="form-control" id="validationTooltip02" placeholder="Frecuencia respiratoria" required>
                    </div>
                    <div class="col-md-3 mb-3">
                      <label for="validationTooltip02">Frecuencia Cardiaca(Por minuto):</label>
                      <input type="text" class="form-control" id="validationTooltip02" placeholder="Frecuencia cardiaca" required>
                    </div>
                    <div class="col-md-3 mb-3">
                      <label for="validationTooltip02">Saturación O2:</label>
                      <input type="text" class="form-control" id="validationTooltip02" placeholder="Saturación" required>
                    </div>
                    <div class="col-md-3 mb-3">
                      <label for="validationTooltip02">Peso:utilice punto para decimales</label>
                      <input type="text" class="form-control" id="validationTooltip02" placeholder="Peso" required>
                    </div>
                    <div class="col-md-3 mb-3">
                      <label for="validationTooltip02">Talla:(cm)</label>
                      <input type="text" class="form-control" id="validationTooltip02" placeholder="Talla" required>
                    </div>
                    <div class="col-md-3 mb-3">
                      <label for="validationTooltip02">Imc:</label>
                      <input type="text" class="form-control" id="validationTooltip02" placeholder="Imc" required>
                    </div>
                    <div class="col-md-3 mb-3">
                      <label for="validationTooltip04">Costo</label>
                      <input type="number" class="form-control" id="validationTooltip04" placeholder="Ingrese el costo S/..." required>
                    </div>  
                    
                    <div class="col-md-4 mb-3">
                      <label for="validationTooltip02">Estado</label>
                      <select id="inputState" class="form-control">
                        <option selected>Registrado</option>
                      </select>
                    </div>  
                  </div>
                  <div>  
                    <button class="btn btn-success mr-2" type="submit" href="home.php">Guardar</button>
                    <button class="btn btn-danger" type="reset">Cancelar</button>
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

