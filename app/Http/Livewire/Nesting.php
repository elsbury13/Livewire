<?php

declare(strict_types = 1);

namespace App\Http\Livewire;

use Livewire\Component;

class Nesting extends Component
{
    public $names = ['Ash', 'Misty', 'Brock'];

    protected $listeners = ['evolve' => '$refresh'];

    public function removeName($key)
    {
        // Can call elequent here
        unset($this->names[$key]);
    }

    public function refreshChildren()
    {
        // calls event refreshChildren
        $this->emit('refreshChildren');
    }

    public function refreshChildrenWithParam()
    {
        $this->emit('refreshChildrenWithParam', 'pikachu');
    }

    public function refreshChildrenDifferentName()
    {
        $this->emit('refreshChildrenDifferentName');
    }

    public function refreshChildrenAuto()
    {
        $this->emit('refreshChildrenAuto');
    }

    public function render()
    {
        return view('livewire.nesting');
    }
}
