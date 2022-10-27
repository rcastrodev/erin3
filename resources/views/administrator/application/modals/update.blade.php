<div class="modal fade" id="modal-update-element">
    <form action="{{ route('application.content.update') }}" method="post" id="form-update-slider" class="modal-dialog" enctype="multipart/form-data">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Actualizar aplicación</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">×</span>
                </button>
            </div>
        <div class="modal-body">
            <input type="hidden" name="id">
            <div class="form-group">
                <input type="text" name="order" class="form-control" placeholder="Orden">
            </div>
            <div class="form-group">
                <input type="text" name="name" class="form-control">
            </div>
            <div class="form-group">
                <input type="text" name="telephone" class="form-control" placeholder="teléfono">
            </div>
            <img src="" alt="" class="iicon img-fluid">
            <div class="form-group mt-3">
                <label for="">Icono</label>
                <input type="file" name="icon" class="form-control-file">
            </div>
            <img src="" alt="" class="iimage img-fluid">
            <div class="form-group mt-3">
                <label for="">Imagen hero</label>
                <input type="file" name="image" class="form-control-file">
                <small>Imagen hero</small>
            </div>
            <img src="" alt="" class="iimage-small img-fluid" style="width: 120px; height: 46px;">
            <div class="form-group mt-3">
                <label for="">Imagen small</label>
                <input type="file" name="image_small" class="form-control-file">
                <small>Imagen small</small>
            </div>
        </div>
        <div class="modal-footer justify-content-between">
            <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
            <button type="submit" class="btn btn-primary">Actualizar</button>
        </div>
        </div>
        <!-- /.modal-content -->
    </form>
    <!-- /.modal-dialog -->
</div>