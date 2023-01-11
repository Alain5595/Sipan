<!-- Main Modal -->

  
<div class="modal fade" id="mdlEditarPaciente">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title">Editar paciente</h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form id="frmEditarPaciente">
          <input type="hidden" name="txtID" id="txtID">
          <div class="form-row">
            <div class="col-md-6 mb-3">
              <label for="validationTooltip01">Nombres</label>
              <input type="text" name="validationTooltip01" class="form-control" id="validationTooltip01" placeholder="Ingrese su nombre" autocomplete="off">
            </div>
            <div class="col-md-6 mb-3">
              <label for="validationTooltip02">Apellidos</label>
              <input type="text" name="validationTooltip02" class="form-control" id="validationTooltip02" placeholder="Ingrese su apellido">
            </div>
            <div class="form-group col-md-4">
              <label for="validationTooltip03">Sexo</label>
              <select id="validationTooltip03" class="form-control">
                <option selected>Masculino</option>
                <option>Femenino</option>
                <option>Otros</option>
              </select>
            </div>
            <div class="col-md-2 mb-4">
              <label for="validationTooltip04">Edad</label>
              <input type="number" name="validationTooltip04" class="form-control" id="validationTooltip04" placeholder="Ingrese la edad">
            </div>
            <div class="col-md-6 mb-3">
              <label for="validationTooltip05">Celular</label>
              <input type="text" name="validationTooltip05" class="form-control" id="validationTooltip05" placeholder="Ingrese número telefónico">
              </div>
            <div class="col-md-8 mb-3">
              <label for="validationTooltip06">Domicilio</label>
              <input type="text" name="validationTooltip06" class="form-control" id="validationTooltip06" placeholder="Ingrese el domicilio">
            </div>
            <div class="col-md-4 mb-3">
              <label for="validationTooltip07">Tipo de Documento</label>
              <select id="validationTooltip07" class="form-control">
                <option selected>Dni</option>
                <option>Ruc</option>
                <option>Pasaporte</option>
              </select>
            </div>
            <div class="col-md-5 mb-3">
              <label for="validationTooltip08">Número de Documento</label>
              <input type="text" name="validationTooltip08" class="form-control" id="validationTooltip08" placeholder="Ingrese los dígitos">
            </div>
            
            <div class="col-md-7 mb-3">
              <label for="validationTooltip09">Ocupación</label>
              <input type="text" name="validationTooltip09" class="form-control" id="validationTooltip09" placeholder="Ingrese email">
            </div>
            <div class="col-md-8 mb-3">
              <label for="validationTooltip10">Correo Electrónico</label>
              <input type="text" name="validationTooltip10" class="form-control" id="validationTooltip10" placeholder="Ingrese la ocupación">
            </div>
            
          </div>
          <div class="form-row">
            <div class="modal-footer justify-content-between">

                <button type="submit" class="btn btn-success">Guardar</button>
                <button type="button" class="btn btn-danger" data-dismiss="modal">Cancelar</button>
            </div>
          </div>
        </form>

      </div>
    </div>
          <!-- /.modal-content -->
  </div>
        <!-- /.modal-dialog -->
</div>
      <!-- /.modal -->

<script type="text/javascript">
  
$("#frmEditarPaciente").submit(function(e){
    e.preventDefault();

  });

    $('#frmEditarPaciente').validate({
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
        required: "Seleccione el sexo",
      }, 
      
      validationTooltip04: {
        required: "Necesita ingresar la edad",
      },
      validationTooltip05: {
        required: "Necesita ingresar el número celular",
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
      
      validationTooltip10: {
        required: "Necesita ingresar la correo",
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
        method:"put",
        data:
          {
            id:$("#txtID").val(),
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
        console.log("la informacion del paciente se edito correctamente");      
        /* Línea para cerrar modal una vez ingresado los datos */
        
        reloadTablePacientes();
        $('#mdlEditarPaciente').modal('hide');
      });
    }
  });


</script>

