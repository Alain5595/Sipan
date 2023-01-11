<!-- Main Modal -->

  
<div class="modal fade" id="mdlEliminarPaciente">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title">Eliminar paciente</h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
       <form id="frmEliminarPaciente"> 
        <div class="card-body">
          <input type="hidden" name="frm_id" id="frm_id">
          <h6>¿Desea eliminar al paciente?</h6>
        </div>
      <div class="modal-footer justify-content-between">
        <button type="submit" class="btn btn-success">Si</button>
        <button type="button" class="btn btn-danger" data-dismiss="modal">No</button> 
      </div>
    </form>
    </div>
          <!-- /.modal-content -->
  </div>
        <!-- /.modal-dialog -->
</div>
      <!-- /.modal -->

<script type="text/javascript">
  
$("#frmEliminarPaciente").submit(function(e){
    e.preventDefault();

    $.ajax(
      {
        method:"delete",
        url:"http://api.sipan/api/v1/clientes/"+$("#frm_id").val()
        }
      )
      .done(function(response){
        console.log("paciente agregado");      
        /* Línea para cerrar modal una vez ingresado los datos */
        reloadTablePacientes();
        $("#mdlEliminarPaciente").modal('hide'); 
      });  

  });


</script>