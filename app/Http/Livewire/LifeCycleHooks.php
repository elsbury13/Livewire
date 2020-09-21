<?php

declare(strict_types = 1);

namespace App\Http\Livewire;

use Illuminate\Http\Request;
use Livewire\Component;

class LifeCycleHooks extends Component
{
    public $name = 'Ash';
    public $newName;

    /*
    // First thing that runs when compnent is booted. First request
    // Can pass in parameter where you use the blade
    public function mount($name)
    {
        $this->name = $name;
    }
    */

    // Dependancy inject
    // You can access the request of the inital page load
    // anywhere eles in the compnent do not access the request. As it a subsiquent ajax request
    // Dependancy inject can be in any method

    public function mount(Request $request, $name)
    {
        // If no name in input then default to what gets passed in
        // http://livewire-74.test/?name=misty
        $this->name = $request->input('name', $name);
    }

    // alternate to mount
    // runs on every subqequent request
    // Cant make this work :()
    /*
    public function hydrate()
    {
        $this->name = 'Brock';
    }
    */

    // called when updating a public model
    // Will update name and then call updated
    // Can call updating if you want to do it before the value is upfdated
    public function updated()
    {
        $this->name = 'Misty';
    }

    // scope methods to only run when specific properties are updated
    // e,g, the method name needs to be updated followed by the class property to be updated
    public function updatedNewName()
    {
        $this->newName = 'Professior Oak';
    }

    public function render()
    {
        return view('livewire.life-cycle-hooks');
    }
}
