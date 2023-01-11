<?php include("vistas/cabecera.php"); ?>



  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper table-responsive">

    <!-- Contenerdor para el modal -->
    <div id="modalContainer1"></div>

    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2 ">
          <div class="col-sm-6">
            <!---Encabezado del dashboard -->
            <h1>Cliente</h1>
            <div class="container">
              <div class="row">
                <div class="col-lg-12 mt-3"> 
                  <a class="btn btn-success" href="pacienteNuevo.php" role="button">Agregar</a>
                </div> 

              </div>    
            </div>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="huespedes.php">Inicio</a></li>
              <li class="breadcrumb-item active">Cliente</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->

      <!-- <button type="button" onclick="ConfirmarEliminarProducto()">New</button> -->

    </section>
        <!-- Main content -->
        <section class="content1">
          <div class="container-fluid">
            <div class="row"> 
             <div class="col-sm-12">
              <div class="card card-#F1F2F2">
                <div class="card-header"> 
                  <div class="card-body">             
                  <table id="listPacientes" class="display">
                    <thead class="btn-info">
                      <tr>
                          <th>Acciones</th>
                          <th>Nombres</th>
                          <th>Apellidos</th>
                          <th>Celular</th>
                          <th>Domicílio</th>
                          
                          <th>Número de documento</th>
                          
                          <th>Correo</th>
                          
                      </tr>
                    </thead>
                  </table>
                </div>
                </div>
              </div>
          </div>
        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->




  <footer class="main-footer">
    <div class="float-right d-none d-sm-block">
      <b>Version</b> 4.0
    </div>
    <strong>Copyright &copy; 2022 <a href="https://faceboock.com">Alain Peralta</a>.</strong> All rights reserved.
  </footer>


 <?php include("vistas/pie.php"); ?>



<script type="text/javascript">
  
  

 /* CONEXION A BD */ 
  
$(document).ready(function(){


TablePacientes= $('#listPacientes').DataTable( {
        "ajax":{
            type: 'get',
            url: "http://api.sipan/api/v1/clientes",
            dataSrc: 'data',
            cache: true,
            },
        columns: [
            {
              targets: 0,

                render: function (data, type, row) {
                  /* return "<button>Editar</button> <button onclick=\"ConfirmarEliminarProducto('"+row.dni+"')\"></i>Eliminar</button>"; */
                    return "<button onclick=\"EditarPaciente('"+row.id+"')\" data-toggle='modal' data-target='#modal-default' class='btn btn-primary'><i class='fas fa-pencil-alt'></i></button> <button onclick=\"ConfirmarEliminarPaciente('"+row.id+"')\" data-toggle='modal' data-target='#modal-default' class='btn btn-danger' ><i class='fas fa-trash'></i></button>"; 
                },
                
            },
            
            { data: 'nombres' },
            { data: 'apellidos' },
            
     
            { data: 'celular' },
            { data: 'domicilio' },
           
            { data: 'numero_doc' },
          
            { data: 'correo' },
         
            

        ],
        dom: 'Bfrtip',
        buttons: [
            'copy', 'csv', 'excel', 'pdf', 'print'
        ],

    });

});

/*Funcion Para Cargar el modal y hacer la conexion en otro form */
function reloadTablePacientes()
{
  TablePacientes.ajax.reload();
}

function ConfirmarEliminarPaciente(id)
{
  $("#modalContainer1").load("modalEliminarPaciente.php?v=1.0",function(){
    
    $("#frm_id").val(id);
    $('#mdlEliminarPaciente').modal({
        show: true
    }); 

  });
}

function EditarPaciente(id)
{
  $("#modalContainer1").load("modalEditarPaciente.php",function(){
    
    $.ajax(
      {

        method:"get",
        url:"http://api.sipan/api/v1/clientes/"+id
      }
    )
    .done(function(response){
      
      $("#txtID").val(response.data.id);
      $("#validationTooltip01").val(response.data.nombres);
      $("#validationTooltip02").val(response.data.apellidos);
      
      $("#validationTooltip03").val(response.data.sexo);
      $("#validationTooltip04").val(response.data.edad);
      $("#validationTooltip05").val(response.data.celular);
      $("#validationTooltip06").val(response.data.domicilio);
      $("#validationTooltip07").val(response.data.tipo_doc);
      $("#validationTooltip08").val(response.data.numero_doc);
      $("#validationTooltip09").val(response.data.ocupacion);
      $("#validationTooltip10").val(response.data.correo);
    


        $('#mdlEditarPaciente').modal({
        show: true
        });

        
    }); 

  });
}


</script>


</body>
</html>
