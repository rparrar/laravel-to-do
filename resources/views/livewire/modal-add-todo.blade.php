<div wire:ignore.self class="modal" id="addTodo" tabindex="-1" data-bs-backdrop="static" data-bs-keyboard="false">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">AGREGANDO NUEVO To-Do</h5>
            </div>
            @if ($errors->any())
                <div class="col-md-11 mx-auto small mt-3">
                    <div class="alert alert-danger alert-dismissible fade show" role="alert">
                        <strong>Errores en el ingreso!</strong> Por favor verificar para poder crear un To-Do.
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                </div>
            @endif
            <div class="modal-body">
                <div class="row">
                    <label class="col-md-3 col-form-label" for="todo">To-Do</label>
                    <div class="col-md-9">
                        <textarea maxlength="100" wire:model="todo" rows="5" class="form-control form-control-sm" placeholder="EJ = COMPRAR SACO DE COMIDA PARA LOS GATOS"></textarea>
                        @error('todo')<small class="text-danger">{{ $message }}</small>@enderror
                    </div>
                </div>
            </div>
            <div class="modal-footer justify-content-between">
                <button wire:click="cancelCreate" type="button" class="btn btn-danger btn-sm" data-bs-dismiss="modal"><i class="bi bi-x-circle"></i>  VOLVER</button>
                <button wire:click="addTodo" class="btn btn-success btn-sm"><i class="bi bi-download"></i> GUARDAR</button>
            </div>
        </div>
    </div>
</div>
