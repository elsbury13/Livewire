<?php

declare(strict_types = 1);

namespace App\Http\Livewire;

use Livewire\Component;

class DataBinding extends Component
{
    // When public property is added in Laravel 7, automatically get added to blade
    public $name = 'Ash';
    public $loud = false;
    public $greeting = ['Hello'];

    public function resetName($name = 'Ash')
    {
        $this->name = $name;
    }

    public function render()
    {
        return view('livewire.data-binding');
    }
}
