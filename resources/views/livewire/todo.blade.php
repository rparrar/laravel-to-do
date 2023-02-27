<div>
    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card">
                    <div class="card-header">
                        <button class="position-relative rounded bg-light border border-light">
                            MIS To-Do pendientes

                            <span class="ms-5 position-absolute start-100 translate-middle badge rounded-pill bg-danger" style="top:50%;">
                                {{ count($pendingTodos) }}
                            </span>
                        </button>
                        <button data-bs-toggle="modal" data-bs-target="#addTodo" class="btn btn-outline-success btn-sm float-end"><i class="bi bi-plus-lg"></i> AGREGAR To-Do</button>
                    </div>
                    <div class="card-body">
                        @include('livewire.table-pending-todos')
                    </div>
                </div>
            </div>

            <div class="col-md-6">
                <div class="card">
                    <div class="card-header">
                        <button class="position-relative rounded bg-light border border-light">
                            MIS To-Do terminados
                            <span class="ms-5 position-absolute start-100 translate-middle badge rounded-pill bg-success" style="top:50%;">
                                {{ count($endTodos) }}
                            </span>
                        </button>
                    </div>
                    <div class="card-body">
                        @include('livewire.table-end-todos')
                    </div>
                </div>
            </div>
        </div>
    </div>
    @include('livewire.modal-add-todo')
</div>
@section('scripts')
    <script>
        Livewire.on('endTodo', $data => {
            Swal.fire({
            icon: 'success',
            title: $data['title'],
            html: $data['text'],
            showConfirmButton: true,
            confirmButtonText: 'OK, Cerrar aviso',
            confirmButtonColor: 'red',
            timer: 3500,
            timerProgressBar: true,
            toast: true,
            position: 'top-right',
            });
        });

        Livewire.on('reactivateTodo', $data => {
            Swal.fire({
            icon: 'success',
            title: $data['title'],
            html: $data['text'],
            showConfirmButton: true,
            confirmButtonText: 'OK, Cerrar aviso',
            confirmButtonColor: 'red',
            timer: 3500,
            timerProgressBar: true,
            toast: true,
            position: 'top-right',
            });
        });


        Livewire.on('createdTodo', $data => {
            $('#addTodo').modal('hide');
            Swal.fire({
            icon: 'success',
            title: $data['title'],
            html: $data['text'],
            showConfirmButton: true,
            confirmButtonText: 'OK, Cerrar aviso',
            confirmButtonColor: 'red',
            timer: 3500,
            timerProgressBar: true,
            toast: true,
            position: 'top-right',
            });
        });

        Livewire.on('deletedTodo', $data => {
            Swal.fire({
            icon: 'success',
            title: $data['title'],
            html: $data['text'],
            showConfirmButton: true,
            confirmButtonText: 'OK, Cerrar aviso',
            confirmButtonColor: 'red',
            timer: 3500,
            timerProgressBar: true,
            toast: true,
            position: 'top-right',
            });
        });
    </script>
@endsection
