<?php include("vistas/cabecera.php"); ?>



  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper table-responsive">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2 ">
          <div class="col-sm-6">
            <!---Encabezado del dashboard -->
            <h1>Permisos</h1>
            <div class="container">
              <div class="row">
                <div class="col-lg-12 mt-3"> 
                  <a class="btn btn-success" href="permisos.php" role="button">Agregar</a>
                </div> 
                

              </div>    
            </div>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="home.php">Inicio</a></li>
              <li class="breadcrumb-item active">Permisos</li>
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
                  <table id="listProductos" class="display">
                    <thead class="btn-info">
                      <tr>
                        <th>Razon Social</th>
                        <th>Ruc</th>
                        <th>Direccion</th>
                        <th>Responsable</th>
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


$('#listProductos').DataTable( {
        "ajax":{
            type: 'get',
            url: "http://api.miapp.com/api/v1/paciente",
            dataSrc: 'data',
            cache: true
            },
        columns: [
            { data: 'apellido' },
            { data: 'nombre' },
            { data: 'sexo' },
            { data: 'edad' },
            { data: 'fech_nac' },
            { data: 'estado_civil' },
            { data: 'tipo_documento' },
            { data: 'dni' },
            { data: 'celular' },
            { data: 'domicilio' },
            { data: 'correo' },
            { data: 'ocupacion' },
            { data: 'alergias' },
            { data: 'intervencion_quirurgicas' },
            { data: 'vacunas' },
        ],
        dom: 'Bfrtip',
        buttons: [
            'copy', 'csv', 'excel', 'pdf', 'print'
        ],

    });


});

</script>

<script>
  $(function () {
    $("content1").DataTable({
      "responsive": true, "lengthChange": false, "autoWidth": false,
      "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
    }).buttons().container().appendTo('#content1_wrapper .col-md-6:eq(0)');
    
  });
</script>

</body>
</html>
