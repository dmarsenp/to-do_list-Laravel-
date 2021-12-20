<?php

namespace App\Http\Livewire;

use App\Models\todo;
use Livewire\Component;

class Alltodo extends Component
{
    public $todo;

    public $listeners = ['todoAdded'];

    public function mount(){
        $this->todo = todo::latest()->get();
    }

    public function todoAdded() {
        $this->todo =todo::latest()->get();
    }

    public function render()
    {
        return view('livewire.alltodo');
    }
}
