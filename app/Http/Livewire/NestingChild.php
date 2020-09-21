<?php

declare(strict_types = 1);

namespace App\Http\Livewire;

use Livewire\Component;

class NestingChild extends Component
{
    public $name;

    protected $listeners = [
        'refreshChildren', // Dont have to specify key and value if the name of the event and method are the same
        'refreshChildrenWithParam', // Pass in param
        'refreshChildrenDifferentName' => 'refreshMe', // Listener to different method
        'refreshChildrenAuto' => '$refresh', // Call magic method refresh
        'evolve' => '$refresh' // listen for child to update parent
    ];

    public function refreshChildren()
    {
        //error_log('Refresh Children');
    }

    public function refreshChildrenWithParam($pokemon)
    {
        //error_log($pokemon);
    }

    public function refreshMe()
    {
        //error_log('Different Name');
    }

    public function emitEvolve()
    {
        // Will update all and parent
        //$this->emit('evolve');

        // Will update itself and parent
        $this->emitUp('evolve');
    }

    public function mount($name)
    {
        $this->name = $name;
    }

    public function render()
    {
        return view('livewire.nesting-child');
    }
}
