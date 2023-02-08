<?php include("vistas/cabecera.php"); ?>



  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper table-responsive">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2 ">
          <div class="col-sm-6">
            <!---Encabezado del dashboard -->
            <h1>Servicios</h1>
            <div class="container">
              <div class="row">
                <div class="col-lg-12 mt-3"> 
                  <a class="btn btn-success" href="servNueva.php" role="button">Agregar</a> 
                </div> 
                
              </div>    
            </div>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="servicio.php">Inicio</a></li>
              <li class="breadcrumb-item active">Servicios</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>
        <!-- Main content -->
        <section class="content1">
          <div class="container-fluid">
            <div class="row"> 
             <div class="col-sm-12">
              <div class="card card-#F1F2F2">
                <div class="card-header"> 
                  <div class="card-body">             
                  <table id="listServ" class="display">
                    <thead class="btn-info">
                      <tr>
                        <th>Acciones</th>
                        <th>Servicio</th>
                        <th>Costo</th>
                        <th>Estado</th>
                        
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
  
$(document).ready(function(){


  TableServ= $('#listServ').DataTable( {
        "ajax":{
            type: 'get',
            url: "http://apisdashnephro.com/api/v1/servicio",
            dataSrc: 'data',
            cache: true
            },
        columns: [
            {
              targets: 0,

                render: function (data, type, row) {
                  /* return "<button>Editar</button> <button onclick=\"ConfirmarEliminarProducto('"+row.dni+"')\"></i>Eliminar</button>"; */
                    return "<button onclick=\"EditarPaciente('"+row.id+"')\" data-toggle='modal' data-target='#modal-default' class='btn btn-primary'><i class='fas fa-pencil-alt'></i></button> <button onclick=\"ConfirmarEliminarPaciente('"+row.id+"')\" data-toggle='modal' data-target='#modal-default' class='btn btn-danger' ><i class='fas fa-trash'></i></button>"; 
                },
            },

            { data: 'servicio' },
            { data: 'costo' },
            { data: 'estado' },
            
        ],
        dom: 'Bfrtip',
        buttons: [
            'copy', 'csv', 'excel', 'pdf', 'print'
        ],

    });


});

</script>



</body>
</html>
