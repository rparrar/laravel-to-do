@if (count($pendingTodos) == 0)
    <p class="text-center alert alert-danger">Sin To-Do pendientes para el usuario {{ Auth::user()->name }}</p>
@else
    <div class="table-responsive">
        <table class="table table-sm table-bordered table-striped table-hover">
            <thead class="text-center" style="font-size:13px;">
                <tr>
                    <th scope="col">To-Do</th>
                    <th scope="col">Creado</th>
                    <th scope="col">Acción </th>
                </tr>
            </thead>
            <tbody style="font-size:12px;" class="align-middle">
                @foreach ($pendingTodos as $todo)
                    <tr class="small">
                        <td class="w-50">{{ $todo->todo }}</td>
                        <td class="text-center">{{ \Carbon\Carbon::parse($todo->created_at)->format('d/m/Y -  h:i:s') }}</td>
                        <td style="width: 80px;" class="text-center">
                            <button wire:click="terminate({{ $todo->id }})" class="btn btn-success btn-sm"><i class="bi bi-check-lg"></i></button>
                            <button wire:click="deleteTodo({{ $todo->id }})" class="btn btn-danger btn-sm"><i class="bi bi-trash3"></i></button>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endif
