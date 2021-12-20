<?php

namespace App\Http\Livewire;

use App\Models\todo;
use Livewire\Component;

class Addtodo extends Component
{
    public $item;

    protected $rules = [
        'item' => 'required'
    ];

    protected $validationAttributes = [
        'item' => 'to-do'
    ];

    public function updated($propertyName){
        $this->validateOnly($propertyName);
    }

    public function mount(){
        $this->item ='';
    }

    public function addTodo(){
        $validatedData = $this->validate();
        todo::create($validatedData);
        $this->reset('item');
        $this->emit('todoAdded');
    } 

    public function render(){
        return view('livewire.addtodo');
    }
}
