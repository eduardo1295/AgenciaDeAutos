<!-- Modal -->
<div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">Agregar persona</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      <div class="row">
            <div class="col-6">
                <input type="text" name="" id="nmodelo" class="form-control" placeholder="Modelo" maxlength="50">
            </div>
            <div class="col-6">
            <input type="text" name="" id="nmarca" class="form-control" placeholder="Marca" maxlength="50">
            </div>
            <div class="col-6">
              <input type="number" name="" id="nprecio" class="form-control" placeholder="precio" >
            </div>
            <div class="col-6">
              <input type="text" name="" id="npromocion" class="form-control" placeholder="Promocion" maxlength="50">
            </div>
            <div class="col-6">
              <input type="text" name="" id="nseguro" class="form-control" placeholder="Seguro" maxlength="50">
            </div>
            <div class="col-6">
              <input type="file" name="" id="nfoto" class="form-control" accept="image/png, image/jpeg" >
            </div>
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
        <button type="button" class="btn btn-primary btn-agregar-nuevo">Agregar</button>
      </div>
    </div>
  </div>
</div>

<div class="modal fade" id="ModalEliminar" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">Eliminar Carro</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      <h4 class="text-center">¿Seguro que desea eliminarlo?</h4>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
        <button type="button" class="btn btn-danger btn-eliminar">eliminar</button>
      </div>
    </div>
  </div>
</div>