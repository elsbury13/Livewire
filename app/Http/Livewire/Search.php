<?php

declare(strict_types = 1);

namespace App\Http\Livewire;

use App\People;
use Livewire\Component;
use Livewire\WithPagination;

class Search extends Component
{
    use WithPagination;

    public $searchTerm;

    public function render()
    {
        return view('livewire.search',[
            'people' => People::where(
                'name',
                'like',
                '%' . $this->searchTerm . '%'
            )->paginate(10)
        ]);
    }
}
