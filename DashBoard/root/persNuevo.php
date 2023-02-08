<?php include("vistas/cabecera.php"); ?>


 <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <!---Encabezado del dashboard -->
            <h1>Usuario</h1>
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
                    <div class="col-md-3 mb-3">
                      <label for="validationTooltip02">Apellidos</label>
                      <input type="text" class="form-control" id="validationTooltip02" placeholder="Ingrese su apellido" required>
                    </div>
                    <div class="col-md-3 mb-3">
                      <label for="validationTooltip02">Nombres</label>
                      <input type="text" class="form-control" id="validationTooltip02" placeholder="Ingrese su nombre" required>
                    </div>
                    <div class="col-md-2 mb-3 ">
                      <label for="validationTooltip02">Fecha de Nacimiento</label>
                      <input type="date" class="form-control" id="validationTooltip02" placeholder="" required>
                    </div>
                  
                    <div class="form-group col-md-2">
                      <label for="inputState">Sexo</label>
                      <select id="inputState" class="form-control">
                        <option selected>Masculino</option>
                        <option>Femenino</option>
                        <option>Otros</option>
                      </select>
                    </div>
                    <div class="col-md-2 mb-3">
                      <label for="validationTooltip05">Estado Civíl</label>
                      <select id="inputState" class="form-control">
                        <option selected>Casado</option>
                        <option>Soltero</option>
                        <option>Separado</option>
                        <option>viudo</option>
                      </select>
                    </div>
                    <div class="col-md-2 mb-3">
                      <label for="validationTooltip05">Tipo de documento</label>
                      <select id="inputState" class="form-control">
                        <option selected>Dni</option>
                        <option>Pasaporte</option>
                        <option>Ruc</option>
                        <option>Cedula</option>
                      </select>
                    </div>
                    <div class="col-md-2 mb-3">
                      <label for="validationTooltip02">Número de documento</label>
                      <input type="text" class="form-control" id="validationTooltip02" placeholder="Ingrese los dígitos" required>
                    </div>
                    <div class="col-md-4 mb-3">
                      <label for="validationTooltip02">Domicilio</label>
                      <input type="text" class="form-control" id="validationTooltip02" placeholder="Ingrese el domicilio" required>
                    </div>
                    <div class="col-md-3 mb-3">
                      <label for="validationTooltip02">Teléfono</label>
                      <input type="text" class="form-control" id="validationTooltip02" placeholder="Ingrese número telefónico" required>
                    </div>
                    <div class="col-md-4 mb-3">
                      <label for="validationTooltip02">Correo Electrónico</label>
                      <input type="email" class="form-control" id="validationTooltip02" placeholder="Ingrese email" required>
                    </div>
                    <div class="col-md-3 mb-3">
                      <label for="validationTooltip02">Ocupación</label>
                      <input type="text" class="form-control" id="validationTooltip02" placeholder="Ingrese datos" required>
                    </div>
                    <div class="col-md-3 mb-3">
                      <label for="validationTooltip02">Cargo</label>
                      <input type="text" class="form-control" id="validationTooltip02" placeholder="Ingrese datos" required>
                    </div>
                    <div class="col-md-3 mb-3">
                      <label for="validationTooltip02">Especialidad</label>
                      <input type="text" class="form-control" id="validationTooltip02" placeholder="Ingrese datos" required>
                    </div>
                    <div class="col-md-3 mb-3">
                      <label for="validationTooltip02">Login</label>
                      <input type="text" class="form-control" id="validationTooltip02" placeholder="Ingrese datos" required>
                    </div>
                    <div class="col-md-3 mb-3">
                      <label for="validationTooltip02">Contraseña</label>
                      <input type="password" class="form-control" id="validationTooltip02" placeholder="Ingrese datos" required>
                    </div>
                    

                    <div class="col-md-3 mb-3">
                    <label for="validationTooltip02">Permisos:</label>
                      <div class="form-check">
                        <input class="form-check-input" type="checkbox" name="elcheck1" id="elcheck1" value="escritorio" >
                        <label class="form-check-label" for="elcheck1">Escitorio</label>
                      </div>
                      <div class="form-check">
                        <input class="form-check-input" type="checkbox" name="elcheck2" id="elcheck2" value="paciente" >
                        <label class="form-check-label" for="elcheck2">Pacientes</label>
                      </div>                    
                      <div class="form-check ">
                        <input class="form-check-input" type="checkbox" name="elcheck3" id="elcheck3" value="clinica" >
                        <label class="form-check-label" for="elcheck3">Clinica</label>
                      </div>
                      <div class="form-check">
                        <input class="form-check-input" type="checkbox" name="elcheck4" id="elcheck4" value="atencion" >
                        <label class="form-check-label" for="elcheck4">Atención</label>
                      </div>                      
                      <div class="form-check">
                        <input class="form-check-input" type="checkbox" name="elcheck5" id="elcheck5" value="triaje" >
                        <label class="form-check-label" for="elcheck5">Triaje</label>
                      </div>
                      <div class="form-check">
                        <input class="form-check-input" type="checkbox" name="elcheck5" id="elcheck5" value="resultado" >
                        <label class="form-check-label" for="elcheck5">Resultado</label>
                      </div>
                      <div class="form-check">
                        <input class="form-check-input" type="checkbox" name="elcheck5" id="elcheck5" value="consultas" >
                        <label class="form-check-label" for="elcheck5">Consultas</label>
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

