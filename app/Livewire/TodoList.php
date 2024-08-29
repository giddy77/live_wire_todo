<?php

namespace App\Livewire;

use App\Models\Todo;
use Livewire\Component;
use Livewire\WithPagination;

class TodoList extends Component
{
    use WithPagination;
    public $name;
    public $search;

    public function create()
    {
        $this->validate(['name'=>'required']);

        Todo::create(['name' => $this->name]);
        $this->reset('name');

        request()->session()->flush('success', 'Created Successfully !');

    }

    public function delete(Todo $todo)
    {
        $todo->delete();
    }
    public function render()
    {
       $todos =  Todo::where('name', 'like', "%{$this->search}%")->paginate(4);
        return view('livewire.todo-list', ['todos'=>$todos]);
    }
}
