<div id="modalAgregarComentario" class="modal fade" style="cursor:default;" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Caja de comentarios</h5>
      </div>
      <div class="modal-">
        <form method="POST"  action="cargarcomentario.php">
            <input type="hidden" name="usernamemodal" id="usernamemodal">
            <input type="hidden" name="passwordmodal" id="passwordmodal">
            <input type="hidden" name="idvideox" id="idvideox">
          <div class="mb-3">
              <center>
              <label for="recipient-name" class="col-form-label">Comentario</label>
              <textarea style="position:relative; width:90%" id= "nombreclia" cols="40" rows="5" name="nombreclia" type="text" class="form-control" required></textarea>
              </center>
            
          </div>       
      </div>
      <div class="modal-footer">

      <button type="submit" name="agregar" class="btn btn-danger"><span class="glyphicon glyphicon-floppy-disk"></span>Cargar!</button>
      </div>
      </form>
    </div>
  </div>
</div>