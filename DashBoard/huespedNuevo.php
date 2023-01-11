<?php include("vistas/cabecera.php"); ?>


 <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <!---Encabezado del dashboard -->
            <h1>Huesped</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="huespedes.php">Inicio</a></li>
              <li class="breadcrumb-item active">Huesped</li>
            </ol>
          </div>            
        </div>
      </div><!-- /.container-fluid -->
    </section>
      <!-- Main content -->
      <section> 
        <div class="container-fluid">
          <div class="row">
            <div class="col-sm-12">
              <div class="card card-#F1F2F2">
                <div class="card-header">
                  <form class="needs-validation" id="nuevoPaciente" >
                    
                    <div class="form-row">
                      <div class="col-md-4 mb-3">
                        <label for="validationTooltip01">Nombres</label>
                        <input type="text" name="validationTooltip01" class="form-control" id="validationTooltip01" placeholder="Ingresar nombres">
                      </div>
                      <div class="col-md-4 mb-3">
                        <label for="validationTooltip02">Apellidos</label>
                        <input type="text" name="validationTooltip02" class="form-control" id="validationTooltip02" placeholder="Ingresar apellidos" autocomplete="off">
                      </div>
                      
                      <div class="form-group col-md-2">
                        <label for="validationTooltip03">Sexo</label>
                        <select id="validationTooltip03" class="form-control">
                          <option selected>Masculino</option>
                          <option>Femenino</option>
                          <option>Otros</option>
                        </select>
                      </div>
                      
                      <div class="col-md-2 mb-4">
                        <label for="validationTooltip04">Edad</label>
                        <input type="number" name="validationTooltip04" class="form-control" id="validationTooltip04" placeholder="Ingresa la edad">
                      </div>
                      <div class="col-md-3 mb-3">
                        <label for="validationTooltip05">Celular</label>
                        <input type="text" name="validationTooltip05" class="form-control" id="validationTooltip05" placeholder="Número telefónico">
                        </div>
                      <div class="col-md-6 mb-3">
                        <label for="validationTooltip06">Domicilio</label>
                        <input type="text" name="validationTooltip06" class="form-control" id="validationTooltip06" placeholder="Ingresar el domicilio">
                      </div>
                      <div class="col-md-2 mb-3">
                        <label for="validationTooltip07">Tipo Documento</label>
                        <select id="validationTooltip07" class="form-control">
                          <option selected>Dni</option>
                          <option>Ruc</option>
                          <option>Pasaporte</option>
                        </select>
                      </div>
                      <div class="col-md-3 mb-3">
                        <label for="validationTooltip08">Número de Documento</label>
                        <input type="text" name="validationTooltip08" class="form-control" id="validationTooltip08" placeholder="Ingresar los dígitos">
                      </div>
                      <div class="col-md-4 mb-3">
                        <label for="validationTooltip09">Ocupación</label>
                        <input type="text" name="validationTooltip09" class="form-control" id="validationTooltip09" placeholder="Ingrese la ocupación">
                      </div>
                      <div class="col-md-4 mb-3">
                        <label for="validationTooltip10">Correo Electrónico</label>
                        <input type="text" name="validationTooltip10" class="form-control" id="validationTooltip10" placeholder="Ingrese email">
                      </div>
                      
                      
                  
                    </div> 
                      
                        <div class="form-row">
                          <div class="modal-footer justify-content-between">  
                              <button class="btn btn-success mr-1" type="submit">Guardar</button>
                              
                              <!--  onclick="ConfirmarEliminarProducto()" -->
                              <a class="btn btn-danger" href="huespedes.php" role="button">Cancelar</a>
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
<script type="text/javascript">
  
  $('#nuevoPaciente').submit(function(e){
    e.preventDefault();

  });

  $('#nuevoPaciente').validate({
    rules: {
      validationTooltip01: {
        required: true,      
      },
      validationTooltip02: {
        required: true,
      },
      
      validationTooltip03: {
        required: true,
      },
      validationTooltip04: {
        required: true,
      },
      validationTooltip05: {
        required: true,
      },
      validationTooltip06: {
        required: true,     
      },
      validationTooltip07: {
        required: true,    
      },
      validationTooltip08: {
        required: true,    
      },
      validationTooltip09: {
        required: true,    
      },
      validationTooltip10: {
        required: true,    
      },
    },

    messages: {
      validationTooltip01: {
        required: "Necesita ingresar el nombre completo",
      },
      validationTooltip02: {
        required: "Necesita ingresar el apellido completo",
      },
      
      validationTooltip03: {
        required: "Seleccione sexo",
      },    
      validationTooltip04: {
        required: "Necesita ingresar la edad",
      }, 
      validationTooltip05: {
         required: "Necesita ingresar el celular",
      },     
      validationTooltip06: {
        required: "Necesita ingresar el domicilio",
      },
      validationTooltip07: {
        required: "Necesita ingresar el tipo de documento",
      },
      validationTooltip08: {
        required: "Necesita ingresar el numero de documento",
      },
        validationTooltip09: {
        required: "Necesita ingresar el ocupacion",
      },
      validationTooltip010: {
        required: "Necesita ingresar el correo",
      },

      
    },
    errorElement: 'span',
    errorPlacement: function (error, element) {
      error.addClass('invalid-feedback');
      element.closest('.form-group').append(error);
    },
    highlight: function (element, errorClass, validClass) {
      $(element).addClass('is-invalid');
    },
    unhighlight: function (element, errorClass, validClass) {
      $(element).removeClass('is-invalid');
    },
    
    
    submitHandler : function()
    {
      $.ajax(
      {
        method:"post",
        data:
          {
            nombres:$("#validationTooltip01").val(),  
            apellidos:$("#validationTooltip02").val(),
            sexo:$("#validationTooltip03").val(),
            edad:$("#validationTooltip04").val(),         
            celular:$("#validationTooltip05").val(),
            domicilio:$("#validationTooltip06").val(),
            tipo_doc:$("#validationTooltip07").val(),
            numero_doc:$("#validationTooltip08").val(),
            ocupacion:$("#validationTooltip09").val(),
            correo:$("#validationTooltip10").val(),
            
           
          },
            url:"http://api.sipan/api/v1/clientes"
        }
      )
      .done(function(response){
        console.log("paciente agregado");      
        /* Línea para cerrar modal una vez ingresado los datos */
        $('#nuevoPaciente').modal('hide');
      });
    }
    
  });
  function reloadTablePacientes()
    {
      TablePacientes.ajax.reload();
    }
</script>





