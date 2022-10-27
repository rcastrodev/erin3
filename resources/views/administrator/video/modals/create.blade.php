<div class="modal fade" id="modal-create-element">
    <form action="{{ route('video.content.store') }}" method="post" class="modal-dialog" data-info="reset">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Crear</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">×</span>
                </button>
            </div>
            <div class="modal-body">
                <input type="hidden" name="page_id" value="8">
                <div class="form-group">
                    <input type="text" name="order" class="form-control" placeholder="Orden">
                </div>
                <div class="form-group">
                    <input type="text" name="title" class="form-control" placeholder="Título">
                </div>
                <div class="form-group">
                    <input type="text" name="content1" class="form-control" placeholder="Contenido">
                </div>
                <div class="form-group">
                    <input type="text" name="extra1" class="form-control" placeholder="Cod del video">
                </div>
            </div>
            <div class="modal-footer justify-content-between">
                <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
                <button type="submit" class="btn btn-primary">Guardar</button>
            </div>
        </div>
        <!-- /.modal-content -->
    </form>
    <!-- /.modal-dialog -->
</div>