<?php

declare(strict_types = 1);

namespace App\Http\Livewire;

use App\People;
use Livewire\Component;

class PeopleComponent extends Component
{
    public $data;
    public$name;
    public $phone;
    public $selectedId;
    public $updateMode = false;

    public function render()
    {
        $this->data = People::all();

        return view('livewire.people.component');
    }

    public function updated($propertyName)
    {
        $this->validateOnly($propertyName, [
            'name' => 'min:3',
            'phone' => 'required|numeric',
        ]);
    }

    private function resetInput()
    {
        $this->name = null;
        $this->phone = null;
    }

    public function store()
    {
        $this->validate([
            'name' => 'required|min:3',
            'phone' => 'required|numeric'
        ]);

        People::create([
            'name' => $this->name,
            'phone' => $this->phone
        ]);

        $this->resetInput();
    }

    public function edit($id)
    {
        $record = People::findOrFail($id);

        $this->selectedId = $id;
        $this->name = $record->name;
        $this->phone = $record->phone;

        $this->updateMode = true;
    }

    public function update()
    {
        $this->validate([
            'selectedId' => 'required|numeric',
            'name' => 'required|min:3',
            'phone' => 'required|numeric'
        ]);

        if ($this->selectedId) {
            $record = People::find($this->selectedId);
            $record->update([
                'name' => $this->name,
                'phone' => $this->phone
            ]);

            $this->resetInput();
            $this->updateMode = false;
        }
    }

    public function destroy($id)
    {
        if ($id) {
            $record = People::where('id', $id);
            $record->delete();
        }
    }
}
