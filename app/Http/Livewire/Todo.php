<?php

namespace App\Http\Livewire;

use App\Models\Todo as ModelsTodo;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class Todo extends Component
{
    public $todo;

    protected $rules =
    [
        'todo' =>'required|min:10|max:100',
    ];

    protected $messages =
    [
        'todo.required' => 'Debes colocar el detalle de el ToDo',
        'todo.min' => 'El ToDo debe tener al menos 10 caracteres',
        'todo.max' => 'El ToDo no debe superar los 100 caracteres',
    ];

    public function render()
    {
        $pendingTodos = ModelsTodo::where('user_id','=',Auth::user()->id)
        ->where('state','=',false)
        ->get();

        $endTodos = ModelsTodo::where('user_id','=',Auth::user()->id)
        ->where('state','=',true)
        ->get();


        return view('livewire.todo', compact('pendingTodos','endTodos'));
    }


    public function terminate($id)
    {
        $todo = ModelsTodo::findOrFail($id);

        if($todo->user_id != Auth::user()->id) return false;


        $todo->update([
            'state' => true,
        ]);

        $data = ([
            'title' => 'Finalizando To-Do',
            'text' => 'To-Do<br> ' . $todo->todo . '<br><b>marcado como finalizado</b>',
        ]);


        $this->emit('endTodo',$data);
        return back();
    }

    public function reactivate($id)
    {
        $todo = ModelsTodo::findOrFail($id);
        if($todo->user_id != Auth::user()->id) return false;

        $todo->update([
            'state' => false,
        ]);

        $data = ([
            'title' => 'Reactivando To-Do',
            'text' => 'To-Do<br> ' . $todo->todo . '<br><b>marcado como pendiente</b>',
        ]);

        $this->emit('reactivateTodo',$data);
        return back();
    }


    public function addTodo()
    {
        $this->validate();

        $todo = ModelsTodo::create([
            'user_id' => Auth::user()->id,
            'todo' => $this->todo,
        ]);

        $this->reset();

        $data = ([
            'title' => 'To-Do creado!',
            'text' => 'To-Do<br>' . $todo->todo . '<br><b>creado correctamente</b>',
        ]);
        $this->emit('createdTodo',$data);
        return back();
    }

    public function deleteTodo($id)
    {
        $todo = ModelsTodo::findOrFail($id);
        if($todo->user_id != Auth::user()->id) return false;
        $data = ([
            'title' => 'To-Do eliminado!',
            'text' => 'To-Do<br>' . $todo->todo . '<br><b>eliminado correctamente</b>',
        ]);
        $this->emit('deletedTodo',$data);
        $todo->delete();
        $this->reset();
        return back();

    }
    public function cancelCreate()
    {
        $this->resetValidation();
        $this->reset();
    }
}
